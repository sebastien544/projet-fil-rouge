<?php
session_start();
include_once("../Service/UtilisateurService.php");

    $userServ = new  UtilisateurService();

    if(isset($_POST['action']) && $_POST['action'] == 'ajouter'){
        $userServ->insertItem($_POST['id'], $_SESSION['mail']);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'supprimer'){
        $userServ->removeItem($_POST['id'], $_SESSION['mail']);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'majorer'){
        if(isset($_POST['action']) && $_POST['role'] == 'major'){
        $quantity = $_POST['quantity']+1;
        }else{
            $quantity = $_POST['quantity']-1;
        }
         $userServ->updateQuantity($_POST['id'], $_SESSION['mail'], $quantity);
    }

    $data = $userServ->selectCart($_SESSION['mail']);
    for($i=0;$i<sizeof($data);$i++){
        echo '<tr>
            <th scope="row">'.($i+1).'</th>
            <td>'.$data[$i]['designation'].'</td>
            <td>'.$data[$i]['prix'].'</td>
            <td><button id="minus" onclick="updateQuantity('.$data[$i]['id_produit'].',qte'.$i.',this.id)">-</button><input disabled="disabled" id="qte'.$i.'" class="text-center" value="'.$data[$i]['quantity'].'" style="width:50px;"><button id="major" onclick="updateQuantity('.$data[$i]['id_produit'].',qte'.$i.',this.id)">+</button></td>
            <td><a class="waves-effect waves-light"><i class="fas fa-times" onclick="remove('.$data[$i]['id_produit'].')"></i></a></td>
            </tr>';

    }