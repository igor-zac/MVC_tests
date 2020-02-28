<?php
class Article {


    private $nom;
    private $description;
    private $prix;
    private $nomImage;
    private $poids;
    private $stock;
    private $dispo;
    private $id;
    private $idCategorie;


    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrix()
    {
        return $this->prix/100;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getPoids()
    {
        return $this->poids/1000;
    }

    public function setPoids($poids)
    {
        $this->poids = $poids;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNomImage()
    {
        return $this->nomImage;
    }

    public function setNomImage($nomImage)
    {
        $this->nomImage = $nomImage;
    }

    public function getDispo()
    {
        return $this->disponibilite;
    }

    public function setDispo($dispo)
    {
        $this->dispo = $dispo;
    }

    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }


}