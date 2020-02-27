<?php
class Panier {
    private $contenuPanier;
    private $total;

    public function __construct()
    {
        $this->contenuPanier = [];
    }

    public function getContenuPanier(){
        return $this->contenuPanier;
    }

    public function getTotal(){
        return $this->total;
    }

    public function add($idArticle){
        if(isset($this->contenuPanier[$idArticle])){
            $this->contenuPanier[$idArticle] += 1;
        } else {
            $this->contenuPanier[$idArticle] = 1;
        }

        $this->calculTotal();
    }

    public function update($idArticle, $quantite){
        $this->contenuPanier[$idArticle] = $quantite;
        $this->calculTotal();
    }

    public function delete($idArticle){
        unset($this->contenuPanier[$idArticle]);
        $this->calculTotal();
    }

    public function emptyCart(){
        $this->contenuPanier=[];
    }

    private function calculTotal(){
        $bdd = dbConnect();
        $this->total = 0;
        foreach($this->contenuPanier as $idArticle => $quantite){
            $sql = 'SELECT prix FROM produit WHERE id='.$idArticle;
            $article = $bdd->query($sql)->fetch();
            $this->total += $article['prix']*$quantite;
        }
        $this->total /= 100;
    }
}