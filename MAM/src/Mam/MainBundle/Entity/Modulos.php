<?php

namespace Mam\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * modulos
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Modulos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mdo_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $mdoId;

    /**
     * @var string
     *
     * @ORM\Column(name="mdo_numero", type="string", length=5)
     */
    private $mdoNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="mdo_cssIconoForm", type="string", length=45)
     */
    private $mdoCssIconoForm;

    /**
     * @var string
     *
     * @ORM\Column(name="mdo_viewName", type="string", length=45)
     */
    private $mdoViewName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->mdoId;
    }

    /**
     * Set mdoNumero
     *
     * @param string $mdoNumero
     * @return modulos
     */
    public function setMdoNumero($mdoNumero)
    {
        $this->mdoNumero = $mdoNumero;

        return $this;
    }

    /**
     * Get mdoNumero
     *
     * @return string 
     */
    public function getMdoNumero()
    {
        return $this->mdoNumero;
    }

    /**
     * Set mdoCssIconoForm
     *
     * @param string $mdoCssIconoForm
     * @return modulos
     */
    public function setMdoCssIconoForm($mdoCssIconoForm)
    {
        $this->mdoCssIconoForm = $mdoCssIconoForm;

        return $this;
    }

    /**
     * Get mdoCssIconoForm
     *
     * @return string 
     */
    public function getMdoCssIconoForm()
    {
        return $this->mdoCssIconoForm;
    }

    /**
     * Set mdoViewName
     *
     * @param string $mdoViewName
     * @return modulos
     */
    public function setMdoViewName($mdoViewName)
    {
        $this->mdoViewName = $mdoViewName;

        return $this;
    }

    /**
     * Get mdoViewName
     *
     * @return string 
     */
    public function getMdoViewName()
    {
        return $this->mdoViewName;
    }
}
