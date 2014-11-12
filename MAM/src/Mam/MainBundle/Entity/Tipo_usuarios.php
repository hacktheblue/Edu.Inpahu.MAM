<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tipo_usuarios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tipo_usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tpu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $tpuId;

    /**
     * @var string
     *
     * @ORM\Column(name="tpu_nombre", type="string", length=35)
     */
    private $tpuNombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->tpuId;
    }

    /**
     * Set tpuNombre
     *
     * @param string $tpuNombre
     * @return tipo_usuarios
     */
    public function setTpuNombre($tpuNombre)
    {
        $this->tpuNombre = $tpuNombre;

        return $this;
    }

    /**
     * Get tpuNombre
     *
     * @return string 
     */
    public function getTpuNombre()
    {
        return $this->tpuNombre;
    }
}
