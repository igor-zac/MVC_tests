<?php
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
