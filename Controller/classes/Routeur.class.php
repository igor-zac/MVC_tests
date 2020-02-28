<?php
require_once "Controller/classes/CatalogueController.class.php";
require_once "Controller/classes/ClientController.class..php";
require_once "Controller/classes/CartController.class.php";
require_once "Controller/classes/MySmarty.class.php";

class Routeur
{
    private $clientCtrl;
    private $catalogueCtrl;
    private $cartCtrl;

    private $templateEngine;

    public function __construct()
    {
        $this->clientCtrl = new ClientController();
        $this->catalogueCtrl = new CatalogueController();
//        $this->cartCtrl = new CartController();

        $this->templateEngine = new MySmarty();
    }

    public function routeRequest(){
        try {
            if(isset($_GET['action']))
            {
                if($_GET['action'] == 'client')
                {
                    $this->clientCtrl->client($this->templateEngine);
                }
                elseif($_GET['action'] == 'cart')
                {
                    $this->cartCtrl->cart($this->templateEngine);
                }

            }
            else
            {
                $this->catalogueCtrl->catalogue($this->templateEngine);
            }
        }
        catch (Exception $e){

        }
    }
}