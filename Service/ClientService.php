<?php
include_once ("../DAO/ClientDAO.php");
include_once("../Model/Client.php");

    class ClientService {

        public function createCustomer(){

            $client = new Client();
            $client->setNom('Lambert')
                    ->setPrenom('jojo')
                    ->setMail('jojo@gmail.com');
            $client->getAdresse()->setAdresse('test')
                                  ->setPays('france')
                                  ->setCodePostal("59800");
            var_dump($client);
            
        }

      
    }


    $s =  new ClientService;
    $s->createCustomer();