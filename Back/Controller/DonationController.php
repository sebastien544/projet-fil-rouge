<?php
include_once ("../Service/DonationService.php");

session_start();

 
    if(isset($_SESSION['mail'])){
      $donServ = new DonationService();
      $donServ->ajoutDon($_POST, $_SESSION['mail']);
      $data = array('status' => true);
      echo json_encode($data);
    }else{
        $data = array('status' => false);
        echo json_encode($data);
    }

