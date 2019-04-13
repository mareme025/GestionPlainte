<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="infraction")
 **/
class Infraction
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;

    /** @Column(type="string") **/
    private $libelle;

    /** @Column(type="string") **/
    private $date;

    /** @Column(type="string") **/
    private $dateEnregistrement;

    /** @Column(type="integer") **/
    private $classee;

     /**
     * Many infraction have Many concerne.
     * @ManyToMany(targetEntity="Concerne", mappedBy="infraction")
     */
    private $concernes; 

     /**
     * Many infraction have one user. This is the owning side.
    * @ManyToOne(targetEntity="User", inversedBy="infractions")
    * @JoinColumn(name="user_id", referencedColumnName="id")
    */ 
    private $user;
    
    public function __construct()
    {
        $this->concernes = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;
    }

    public function getClassee()
    {
        return $this->classee;
    }
    public function setClassee($classee)
    {
        $this->classee = $classee;
    }

    public function getConcernes()
    {
        return $this->concernes;
    }
    public function setConcernes($concernes)
    {
        $this->concernes = $concernes;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
}

?>