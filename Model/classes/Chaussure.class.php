<?php
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