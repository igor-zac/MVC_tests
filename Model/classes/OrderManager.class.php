<?php
class OrderManager{

    private $bdd;

    public function __construct($bdd){
        $this->bdd = $bdd;
    }

    public function generateOrder(Panier $panier){

        $myOrder = new Order();

        foreach($panier->getContenuPanier() as $idArticle => $quantite){
            $sql = 'SELECT nom, prix FROM produit WHERE id='.$idArticle;
            $infosArticle = $this->bdd->query($sql)->fetch();

            $myOrder->addArticle($idArticle, $infosArticle['nom'], intval($quantite), $infosArticle['prix']);
        }

        $myOrder->setTotal($panier->getTotal());

        return $myOrder;

    }

    public function saveClient(Client $myClient){

        $req = $this->bdd->prepare('INSERT INTO client(nom, prenom, adresse, cp, ville) 
                                VALUES(:nom, :prenom, :adresse, :cp, :ville)');
        $req->execute($myClient->getInfos());

        return $this->bdd->lastInsertId();
    }

    public function saveOrder(Order $myOrder, $clientID){
        $req = $this->bdd->prepare('INSERT INTO commande(commande, date, idClient, montant)
                                VALUES(:commande, CURRENT_DATE(), :idClient, :montant)');
        $req->execute(array(
            'commande' => $myOrder->getOrderReference(),
            'idClient' => $clientID,
            'montant' => $myOrder->getTotal()*100
        ));



        $idCommande = $this->bdd->lastInsertId();

        $sql='SELECT date FROM commande WHERE id='.$idCommande;
        $req = $this->bdd->query($sql);
        $data = $req->fetch();
        $myOrder->setOrderDate($data['date']);

        foreach ($myOrder->getOrderContent() as $article){
            $idArticle = $article[0];
            $quantite=intval($article[2]);



            $req = $this->bdd->prepare('INSERT INTO cmdproduit(idProduit, idCommande, quantite)
                         VALUES(:idProduit, :idCommande, :quantite)');
            $req->execute(array('idProduit' => $idArticle,
                'idCommande' => $idCommande,
                'quantite' => $quantite
            ));

            $req = $this->bdd->prepare('UPDATE produit SET stock = stock-:quantite WHERE id = :idProduit');
            $req->execute(array(
                'quantite' => $quantite,
                'idProduit' => $idArticle
            ));
        }



    }

}