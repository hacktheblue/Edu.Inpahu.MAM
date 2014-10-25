<?php

class Db {


	var $lastError; 
	var $lastQuery; 
	var $result; 
	var $records; 
	var $affected;
	var $rawResults; 
	var $arrayedResult; 
	
	var $hostname; 
	var $username; 
	var $password; 
	var $database; 
	
	var $databaseLink; 
	
	
	
	function __construct($database, $username, $password, $hostname='localhost', $port=3306){
		$this->database = $database;
		$this->username = $username;
		$this->password = $password;
		$this->hostname = $hostname.':'.$port;
		
		$this->Connect();
	}
	
	
	private function Connect($persistant = false){
		$this->CloseConnection();
	
		if($persistant){
			$this->databaseLink = mysql_pconnect($this->hostname, $this->username, $this->password);
		}
		else{
			$this->databaseLink = mysql_connect($this->hostname, $this->username, $this->password);
		}
	
		if(!$this->databaseLink){
			$this->lastError = 'Could not connect to server: ' . mysql_error($this->databaseLink);
		return false;
		}
	
		if(!$this->UseDB()){
			$this->lastError = 'Could not connect to database: ' . mysql_error($this->databaseLink);
			return false;
		}
		return true;
	}


	private function UseDB(){
		if(!mysql_select_db($this->database, $this->databaseLink)){
			$this->lastError = 'Cannot select database: ' . mysql_error($this->databaseLink);
			return false;
		}
		else{
			return true;
		}
	}


	private function SecureData($data){
		if(is_array($data)){
			$i = 0;
			foreach($data as $key=>$val){
				if(!is_array($data[$key])){

					$data[$key] = mysql_real_escape_string($data[$key], $this->databaseLink);
					$i++;
				}
			}
		}
		else{

			$data = mysql_real_escape_string($data, $this->databaseLink);
		}
		return $data;
	}
    
    
    

    public function executeSQL($query){
        $this->lastQuery = $query;
        if($this->result = mysql_query($query, $this->databaseLink)){
            if (gettype($this->result) === 'resource') {
                $this->records = @mysql_num_rows($this->result);
                $this->affected = @mysql_affected_rows($this->databaseLink);
            } else {
               $this->records = 0;
               $this->affected = 0;
            }

            if($this->records > 0){
                $this->arrayResults();
                return $this->arrayedResult;
				
            }else{
                return true;
            }

        }else{
            $this->lastError = mysql_error($this->databaseLink);
            return false;
        }
    }

    public function insert($table, $vars, $exclude = ''){

        if($exclude == ''){
            $exclude = array();
        }

        array_push($exclude, 'MAX_FILE_SIZE'); 

        $vars = $this->SecureData($vars);

        $query = "INSERT INTO `{$table}` SET ";
        foreach($vars as $key=>$value){
            if(in_array($key, $exclude)){
                continue;
            }
            $query .= "`{$key}` = '{$value}', ";
        }

        $query = trim($query, ', ');
        return $this->executeSQL($query);
    }

    public function delete($table, $where='', $limit='', $like=false){
		
        $query = "DELETE FROM `{$table}` WHERE ";
        if(is_array($where) && $where != ''){
            $where = $this->SecureData($where);
			foreach($where as $key=>$value){
                if($like){
                    $query .= "`{$key}` LIKE '{$value}' AND ";
                }else{
                    $query .= "`{$key}` = '{$value}' AND ";
                }
            }

            $query = substr($query, 0, -5);
        }

        if($limit != ''){
            $query .= ' LIMIT ' . $limit;
        }
		
        return $this->executeSQL($query);
    }


    public function select($from, $where='', $orderBy='', $limit='', $like=false, $operand='AND',$cols='*'){
        if(trim($from) == ''){
            return false;
        }

        $query = "SELECT {$cols} FROM `{$from}` WHERE ";

        if(is_array($where) && $where != ''){
            $where = $this->SecureData($where);

            foreach($where as $key=>$value){

                if($like){
                    $query .= "`{$key}` LIKE '{$value}' {$operand} ";
                }else{
                    $query .= "`{$key}` = '{$value}' {$operand} ";
                }

            }

            $query = substr($query, 0, -(strlen($operand)+2));

        }else{
            $query = substr($query, 0, -6);
        }

        if($orderBy != ''){
            $query .= ' ORDER BY ' . $orderBy;
        }

        if($limit != ''){
            $query .= ' LIMIT ' . $limit;
        }
     
        return $this->executeSQL($query);

    }

    public function update($table, $set, $where, $exclude = ''){
        if(trim($table) == '' || !is_array($set) || !is_array($where)){
            return false;
        }
        if($exclude == ''){
            $exclude = array();
        }

        array_push($exclude, 'MAX_FILE_SIZE'); 

        $set = $this->SecureData($set);
        $where = $this->SecureData($where);


        $query = "UPDATE `{$table}` SET ";

        foreach($set as $key=>$value){
            if(in_array($key, $exclude)){
                continue;
            }
            if($value!= NULL){
                $query .= "`{$key}` = '{$value}', ";
            }
        }

        $query = substr($query, 0, -2);


        $query .= ' WHERE ';

        foreach($where as $key=>$value){
            $query .= "`{$key}` = '{$value}' AND ";
        }
		
        $query = substr($query, 0, -5);

        return $this->executeSQL($query);
    }

    public function arrayResult(){
        $this->arrayedResult = mysql_fetch_assoc($this->result) or die (mysql_error($this->databaseLink));
        return $this->arrayedResult;
    }

    public function arrayResults(){

        if($this->records == 1){
            return $this->arrayResult();
        }

        $this->arrayedResult = array();
        while ($data = mysql_fetch_assoc($this->result)){
            $this->arrayedResult[] = $data;
        }
        return $this->arrayedResult;
    }

    public function arrayResultsWithKey($key='id'){
        if(isset($this->arrayedResult)){
            unset($this->arrayedResult);
        }
        $this->arrayedResult = array();
        while($row = mysql_fetch_assoc($this->result)){
            foreach($row as $theKey => $theValue){
                $this->arrayedResult[$row[$key]][$theKey] = $theValue;
            }
        }
        return $this->arrayedResult;
    }

    public function lastInsertID(){
        return mysql_insert_id();
    }

    public function countRows($from, $where=''){
        $result = $this->select($from, $where, '', '', false, 'AND','count(*)');
        return $result["count(*)"];
    }

    public function closeConnection(){
        if($this->databaseLink){
            mysql_close($this->databaseLink);
        }
    }
}
?>