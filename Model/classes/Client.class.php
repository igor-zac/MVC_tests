<?php
class Client {

    private $nom;
    private $prenom;
    private $adresse;
    private $cp;
    private $ville;

    public function __construct($entreeSQL)
    {
        $this->nom = $entreeSQL['nom'];
        $this->prenom = $entreeSQL['prenom'];
        $this->adresse = $entreeSQL['adresse'];
        $this->cp = $entreeSQL['cp'];
        $this->ville = $entreeSQL['ville'];

    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getCP(){
        return $this->cp;
    }

    public function getVille(){
        return $this->ville;
    }

//    public function getInfos(){
//        return array(
//            "nom" => $this->nom,
//            "prenom" => $this->prenom,
//            "adresse" => $this->adresse,
//            "cp" => $this->cp,
//            "ville" => $this->ville
//        );
//    }
}