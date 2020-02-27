<?php
class ClientList {

    private $clients;

    public function __construct($clientList)
    {
        $this->clients = $clientList;
    }

    public function getClients(){
        return $this->clients;
    }

}