<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Area
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="are_nombre", type="string", length=35)
     */
    private $areNombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set areNombre
     *
     * @param string $areNombre
     * @return Area
     */
    public function setAreNombre($areNombre)
    {
        $this->areNombre = $areNombre;

        return $this;
    }

    /**
     * Get areNombre
     *
     * @return string 
     */
    public function getAreNombre()
    {
        return $this->areNombre;
    }
}
