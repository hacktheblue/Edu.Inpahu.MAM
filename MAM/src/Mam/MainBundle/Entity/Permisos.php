<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * permisos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Permisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="per_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $perId;

    /**
     * @var integer
     *
     * @ORM\Column(name="tpu_id", type="integer")
     */
    private $tpuId;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo1", type="string", length=1)
     */
    private $perModulo1;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo2", type="string", length=1)
     */
    private $perModulo2;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo3", type="string", length=1)
     */
    private $perModulo3;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo4", type="string", length=1)
     */
    private $perModulo4;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo5", type="string", length=1)
     */
    private $perModulo5;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo6", type="string", length=1)
     */
    private $perModulo6;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo7", type="string", length=1)
     */
    private $perModulo7;

    /**
     * @var string
     *
     * @ORM\Column(name="per_modulo8", type="string", length=1)
     */
    private $perModulo8;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->perId;
    }

    /**
     * Set tpuId
     *
     * @param integer $tpuId
     * @return permisos
     */
    public function setTpuId($tpuId)
    {
        $this->tpuId = $tpuId;

        return $this;
    }

    /**
     * Get tpuId
     *
     * @return integer 
     */
    public function getTpuId()
    {
        return $this->tpuId;
    }

    /**
     * Set perModulo1
     *
     * @param string $perModulo1
     * @return permisos
     */
    public function setPerModulo1($perModulo1)
    {
        $this->perModulo1 = $perModulo1;

        return $this;
    }

    /**
     * Get perModulo1
     *
     * @return string 
     */
    public function getPerModulo1()
    {
        return $this->perModulo1;
    }

    /**
     * Set perModulo2
     *
     * @param string $perModulo2
     * @return permisos
     */
    public function setPerModulo2($perModulo2)
    {
        $this->perModulo2 = $perModulo2;

        return $this;
    }

    /**
     * Get perModulo2
     *
     * @return string 
     */
    public function getPerModulo2()
    {
        return $this->perModulo2;
    }

    /**
     * Set perModulo3
     *
     * @param string $perModulo3
     * @return permisos
     */
    public function setPerModulo3($perModulo3)
    {
        $this->perModulo3 = $perModulo3;

        return $this;
    }

    /**
     * Get perModulo3
     *
     * @return string 
     */
    public function getPerModulo3()
    {
        return $this->perModulo3;
    }

    /**
     * Set perModulo4
     *
     * @param string $perModulo4
     * @return permisos
     */
    public function setPerModulo4($perModulo4)
    {
        $this->perModulo4 = $perModulo4;

        return $this;
    }

    /**
     * Get perModulo4
     *
     * @return string 
     */
    public function getPerModulo4()
    {
        return $this->perModulo4;
    }

    /**
     * Set perModulo5
     *
     * @param string $perModulo5
     * @return permisos
     */
    public function setPerModulo5($perModulo5)
    {
        $this->perModulo5 = $perModulo5;

        return $this;
    }

    /**
     * Get perModulo5
     *
     * @return string 
     */
    public function getPerModulo5()
    {
        return $this->perModulo5;
    }

    /**
     * Set perModulo6
     *
     * @param string $perModulo6
     * @return permisos
     */
    public function setPerModulo6($perModulo6)
    {
        $this->perModulo6 = $perModulo6;

        return $this;
    }

    /**
     * Get perModulo6
     *
     * @return string 
     */
    public function getPerModulo6()
    {
        return $this->perModulo6;
    }

    /**
     * Set perModulo7
     *
     * @param string $perModulo7
     * @return permisos
     */
    public function setPerModulo7($perModulo7)
    {
        $this->perModulo7 = $perModulo7;

        return $this;
    }

    /**
     * Get perModulo7
     *
     * @return string 
     */
    public function getPerModulo7()
    {
        return $this->perModulo7;
    }

    /**
     * Set perModulo8
     *
     * @param string $perModulo8
     * @return permisos
     */
    public function setPerModulo8($perModulo8)
    {
        $this->perModulo8 = $perModulo8;

        return $this;
    }

    /**
     * Get perModulo8
     *
     * @return string 
     */
    public function getPerModulo8()
    {
        return $this->perModulo8;
    }
}
