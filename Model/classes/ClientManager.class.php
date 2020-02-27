<?php


class ClientManager extends Model
{
    public function getClientList()
    {
        $sql = 'SELECT nom, prenom, adresse, cp, ville FROM client';

        $req = $this->executeRequest($sql);

        $clientList = [];

        while ($client = $req->fetch()) {
//
            $clientList[] = new Client($client);
        }
//        }
        return new ClientList($clientList);
    }

}