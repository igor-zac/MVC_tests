<?php
class Order {

    private $contenuCommande;
    private $totalCommande;
    private $informationsClient;
    private $orderReference;
    private $orderDate;

    public function __construct()
    {
        $this->contenuCommande=[];
        $this->totalCommande=0;
    }

    public function addArticle($idArticle, $nomArticle, $quantite, $prix){
        $this->contenuCommande[$idArticle] = [$idArticle, $nomArticle, $quantite, $prix];
    }

    public function getOrderContent(){
        return $this->contenuCommande;
    }

    public function setTotal($total){
        $this->totalCommande = $total;
    }

    public function setOrderDate($date){
        $this->orderDate = $date;
    }

    public function getOrderDate(){
        return $this->orderDate;
    }

    public function getTotal(){
        return $this->totalCommande;
    }

    public function getOrderReference(){
        return $this->orderReference;
    }

    public function generateOrderReference($clientID){
        $this->orderReference =
            substr(sha1(serialize($clientID).date("YmdHis").serialize($this->contenuCommande)),
                0, 10);
    }

    public function setClient(Client $myClient){
        $this->informationsClient = array(
            "nom" => $myClient->getNom(),
            "prenom" => $myClient->getPrenom(),
            "adresse" => $myClient->getAdresse(),
            "cp" => $myClient->getCP(),
            "ville" => $myClient->getVille()
        );
    }

    public function getClient(){
        return $this->informationsClient;
    }

}