<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipo_caso
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tipo_caso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tpc_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $tpcId;

    /**
     * @var string
     *
     * @ORM\Column(name="tpc_nombre", type="string", length=30)
     */
    private $tpcNombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->tpcId;
    }

    /**
     * Set tpcNombre
     *
     * @param string $tpcNombre
     * @return tipo_caso
     */
    public function setTpcNombre($tpcNombre)
    {
        $this->tpcNombre = $tpcNombre;

        return $this;
    }

    /**
     * Get tpcNombre
     *
     * @return string 
     */
    public function getTpcNombre()
    {
        return $this->tpcNombre;
    }
}
