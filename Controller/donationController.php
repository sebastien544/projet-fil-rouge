<?php
include_once ("../Service/DonationService.php");

session_start();

$donServ = new DonationService();
if(isset($_SESSION['mail']))
{
  $donServ->ajoutDon($_POST, $_SESSION['mail']);
  $data = array('status' => true);
  echo json_encode($data);
}else
{
  $data = array('status' => false);
  echo json_encode($data);
}

if(isset($_GET['action']) && $_GET['action'] == "afficher")
{
  $donServ->afficherDon($_SESSION['mail']);
}