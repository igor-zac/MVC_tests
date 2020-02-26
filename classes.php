<?php


class ListeClients {

    private $listeClients;

    public function __construct()
    {
        $bdd=dbConnect();

        $sql = 'SELECT nom, prenom, adresse, cp, ville FROM client';
        foreach($bdd->query($sql) as $client) {
            $this->listeClients[] = new Client($client);
        }
    }

    public function getListeClients(){
        return $this->listeClients;
    }

}

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

    public function getInfos(){
        return array(
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "adresse" => $this->adresse,
            "cp" => $this->cp,
            "ville" => $this->ville
        );
    }
}

class Catalogue
{

    private $productList;
    public static $PAGE_LENGTH = 10;
//    private $nbPages;

//    private $bdd;


    public function __construct($productList)
    {
//        $this->bdd = dbConnect();

        $this->productList = $productList;

//        $this->setNbPages();


    }

    public function getListeArticles()
    {
        return $this->productList;
    }

//    public function getNbPages(){
//        return $this->nbPages;
//    }

//    private function setNbPages(){
//        $req = $this->bdd->query('SELECT COUNT(id) as nbArticles FROM produit');
//        $data = $req->fetch();
//
//        $this->nbPages = ceil($data['nbArticles']/$this->artPerPage);
//
//    }
}

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

class Chaussure extends Article{
    private $listePointures;
    private $pointure;

    public function __construct($entreeSQL)
    {
        parent::__construct($entreeSQL);
        $this->setListePointures($entreeSQL['id']);
    }

    public function getPointure(){
        return $this->pointure;
    }

    public function setPointure(int $maPointure){
        $this->pointure = $maPointure;
    }

    private function getListePointures(){
        return $this->listePointures;
    }


    private function setListePointures($id){

        $bdd=dbConnect();

        $sql='SELECT pointure FROM chaussures WHERE idArticle='.$id;
        $req = $bdd->query($sql);
        while($pointureBDD = $req->fetch()){
            $this->listePointures[] = $pointureBDD['pointure'];
        }
    }

    public function afficherPointures(){
        ?>
<label for="<?= $this->getNom() ?>" class="d-block">Pointure : </label>
<select name="<?= $this->getId() ?>" id="<?= $this->getNom() ?>">
    <?php
        foreach ($this->getListePointures() as $pointure){ ?>
    <option value="<?= $pointure ?>"><?= $pointure ?></option>
    <?php
        } ?>
</select>
<?php


    }
}
class Vetement extends Article{
    private $listeTailles;
    private $taille;

    public function __construct($entreeSQL)
    {
        parent::__construct($entreeSQL);
        $this->setListeTailles($entreeSQL['id']);
    }

    public function getTaille(){
        return $this->taille;
    }

    public function setTaille(int $maTaille){
        $this->taille = $maTaille;
    }

    private function getListeTailles(){
        return $this->listeTailles;
    }


    private function setListeTailles($id){

        $bdd=dbConnect();

        $sql='SELECT taille FROM vetements WHERE idArticle='.$id;
        $req = $bdd->query($sql);
        while($taillesBDD = $req->fetch()){
            $this->listeTailles[] = $taillesBDD['taille'];
        }
    }

    public function afficherTailles(){
        ?>
        <label for="<?= $this->getNom() ?>" class="d-block">Taille : </label>
        <select name="<?= $this->getId() ?>" id="<?= $this->getNom() ?>">
            <?php
            foreach ($this->getListeTailles() as $size){ ?>
                <option value="<?= $size ?>"><?= $size ?></option>
                <?php
            } ?>
        </select>
        <?php
    }
}

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

