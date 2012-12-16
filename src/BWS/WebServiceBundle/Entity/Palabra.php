<?php

namespace BWS\WebServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BWS\WebServiceBundle\Entity\Palabra
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Palabra
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
     * @var date $created
     * @ORM\Column(type="date", length=255, name="created")
     */
    protected $created;
    
    /**
     * @ORM\ManyToOne(targetEntity="BWS\WebServiceBundle\Entity\Tag", inversedBy="palabras")
     */
    protected $tag;
    
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
     * @return Palabra
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
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set tag
     *
     * @param BWS\WebServiceBundle\Entity\Tag $tag
     * @return Palabra
     */
    public function setTag(\BWS\WebServiceBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return BWS\WebServiceBundle\Entity\Tag 
     */
    public function getTag()
    {
        return $this->tag;
    }
}