<?php

namespace BWS\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BWS\WebServiceBundle\Entity\Estadistica
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estadistica
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var date $created
     * @ORM\Column(type="date", length=255, name="created")
     */
    protected $created;
    
    /**
     * @var integer $aciertos
     * @ORM\Column(type="integer", length=255, name="aciertos")
     */
    protected $aciertos;
    
    /**
     * @var integer $fallos
     * @ORM\Column(type="integer", length=255, name="fallos")
     */
    protected $fallos;
    
    /**
     * @var integer $eficiencia
     * @ORM\Column(type="integer", length=255, name="eficiencia")
     */
    protected $eficiencia;
    
    /**
     * @var integer $veces_practicado
     * @ORM\Column(type="integer", length=255, name="veces_practicado")
     */
    protected $veces_practicado;
    
    /**
     * @var boolean $favorito
     * @ORM\Column(type="boolean", length=255, name="favorito")
     */
    protected $favorito;
    
    /**
     * @var string $traduccion
     * @ORM\Column(type="string", length=255, name="traduccion")
     */
    protected $traduccion;
    
    /**
     * @ORM\ManyToOne(targetEntity="BWS\WebServiceBundle\Entity\Usuario", inversedBy="estadisticas")
     */
    protected $usuario;
    
    /**
     * @ORM\ManyToOne(targetEntity="BWS\WebServiceBundle\Entity\Palabra", inversedBy="estadisticas")
     */
    protected $palabra;
    
    public function __construct()
    {
        $this->created = new \DateTime('now');
    }

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
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set aciertos
     *
     * @param integer $aciertos
     * @return Estadistica
     */
    public function setAciertos($aciertos)
    {
        $this->aciertos = $aciertos;
    
        return $this;
    }

    /**
     * Get aciertos
     *
     * @return integer 
     */
    public function getAciertos()
    {
        return $this->aciertos;
    }

    /**
     * Set fallos
     *
     * @param integer $fallos
     * @return Estadistica
     */
    public function setFallos($fallos)
    {
        $this->fallos = $fallos;
    
        return $this;
    }

    /**
     * Get fallos
     *
     * @return integer 
     */
    public function getFallos()
    {
        return $this->fallos;
    }

    /**
     * Set eficiencia
     *
     * @param integer $eficiencia
     * @return Estadistica
     */
    public function setEficiencia($eficiencia)
    {
        $this->eficiencia = $eficiencia;
    
        return $this;
    }

    /**
     * Get eficiencia
     *
     * @return integer 
     */
    public function getEficiencia()
    {
        return $this->eficiencia;
    }

    /**
     * Set veces_practicado
     *
     * @param integer $vecesPracticado
     * @return Estadistica
     */
    public function setVecesPracticado($vecesPracticado)
    {
        $this->veces_practicado = $vecesPracticado;
    
        return $this;
    }

    /**
     * Get veces_practicado
     *
     * @return integer 
     */
    public function getVecesPracticado()
    {
        return $this->veces_practicado;
    }

    /**
     * Set favorito
     *
     * @param boolean $favorito
     * @return Estadistica
     */
    public function setFavorito($favorito)
    {
        $this->favorito = $favorito;
    
        return $this;
    }

    /**
     * Get favorito
     *
     * @return boolean 
     */
    public function getFavorito()
    {
        return $this->favorito;
    }

    /**
     * Set traduccion
     *
     * @param string $traduccion
     * @return Estadistica
     */
    public function setTraduccion($traduccion)
    {
        $this->traduccion = $traduccion;
    
        return $this;
    }

    /**
     * Get traduccion
     *
     * @return string 
     */
    public function getTraduccion()
    {
        return $this->traduccion;
    }

    /**
     * Set usuario
     *
     * @param BWS\WebServiceBundle\Entity\Usuario $usuario
     * @return Estadistica
     */
    public function setUsuario(\BWS\WebServiceBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return BWS\WebServiceBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set palabra
     *
     * @param BWS\WebServiceBundle\Entity\Palabra $palabra
     * @return Estadistica
     */
    public function setPalabra(\BWS\WebServiceBundle\Entity\Palabra $palabra = null)
    {
        $this->palabra = $palabra;
    
        return $this;
    }

    /**
     * Get palabra
     *
     * @return BWS\WebServiceBundle\Entity\Palabra 
     */
    public function getPalabra()
    {
        return $this->palabra;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Estadistica
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }
}