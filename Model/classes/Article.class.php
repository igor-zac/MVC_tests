<?php
class Article {
    private $nom;
    private $description;
    private $prix;
    private $image;
    private $poids;
    private $stock;
    private $disponibilite;
    private $id;

    public function __construct($entreeSQL)
    {
        $this->nom = $entreeSQL['nom'];
        $this->description = $entreeSQL['description'];
        $this->prix = $entreeSQL['prix'];
        $this->image = $entreeSQL['nomImage'];
        $this->poids = $entreeSQL['poids'];
        $this->stock = $entreeSQL['stock'];
        $this->disponibilite = $entreeSQL['dispo'];
        $this->id = $entreeSQL['id'];
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getDispo() {
        return $this->disponibilite;
    }

    public function getId() {
        return $this->id;
    }

}