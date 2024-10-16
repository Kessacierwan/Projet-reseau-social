<?php


class User extends UserRepository
{
    private $Id;
    private $nom;
    // private $prenom;
    private $password;



    public function __construct($Id, $nom, $password)
    {
        $this -> setId($Id);
        $this->setNom($nom);
        // $this->setPrenom($prenom);
        $this->setPassword($password) ;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    // public function setPrenom($prenom)
    // {
    //     $this->prenom = $prenom;
    // }

    // public function getPrenom()
    // {
    //     return $this->prenom;
    // }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }
}
