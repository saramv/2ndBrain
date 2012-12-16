<?php

namespace BWS\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BWS\WebServiceBundle\Entity\Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
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
     * @var string $nombre
     * @ORM\Column(type="string", length=255, name="nombre")
     */
    protected $nombre;
    
    /**
     * @var string $contraseña
     * @ORM\Column(type="string", length=255, name="contraseña")
     */
    protected $contraseña;

    /**
     * @var date $created
     * @ORM\Column(type="date", length=255, name="created")
     */
    protected $created;
    
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set contraseña
     *
     * @param string $contraseña
     * @return Usuario
     */
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
    
        return $this;
    }

    /**
     * Get contraseña
     *
     * @return string 
     */
    public function getContraseña()
    {
        return $this->contraseña;
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
}