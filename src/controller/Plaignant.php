<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="user")
 **/
    class Plaignant
    {
        /** @Column(type="string") **/
        private $cin;

        public function __construct()
        {

        }

        public function getCin()
        {
            return $this->cin;
        }
        public function setCin($cin)
        {
            $this->cin=$cin;
        }
    }

?>