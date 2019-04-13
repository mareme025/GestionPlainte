<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="concerne")
 **/
class Concerne
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $nom;

    /** @Column(type="string") **/
    private $prenom;

    /** @Column(type="string") **/
    private $adresse;

     /** @Column(type="integer") **/
     private $telephone;

      /** 
         * Many concerne have Many infraction.
         * @ManyToMany(targetEntity="Infraction", inversedBy="concernes")
         * @JoinTable(name="infractions_concernes")
         */
     private $infractions;

    
    public function __construct()
    {
        $this->infractions = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    
    public function getInfractions()
    {
        return $this->infractions;
    }
    public function setInfractions($infractions)
    {
        $this->infractions = $infractions;
    }
    
}

?>