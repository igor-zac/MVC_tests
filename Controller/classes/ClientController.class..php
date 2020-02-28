<?php
require_once "Model/classes/ClientManager.class.php";
require_once "Model/classes/ClientList.class.php";
require_once "Controller/classes/MySmarty.class.php";

class ClientController
{
    private $manager;


    public function __construct()
    {
        $this->manager = new  ClientManager();
    }

    public function client($templateEngine){
        $clients = $this->manager->getClientList();


        $templateEngine->assign('clients', $clients->getClients());

        $templateEngine->display('Client/client.tpl');
    }
}