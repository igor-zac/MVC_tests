<?php


abstract class Model
{
    private $bdd;

    protected function executeRequest($sql, $params=null)
    {



        if($params == null)
        {
            $result = $this->getBdd()->query($sql);
        }
        else
        {
            $result = $this->getBdd()->prepare($sql);

            $result->execute($params);

        }

        return $result;
    }

    private function getBdd(){
        if($this->bdd == null) {
            try
            {
                $this->bdd = new PDO('mysql:host=localhost;port=3308;dbname=mydb;charset=utf8', 'admin', 'MotDePasse');
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
        }

        return $this->bdd;
    }
}