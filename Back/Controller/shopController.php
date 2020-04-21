<?php
session_start();
include_once ("../Service/UtilisateurService.php");
include_once ('../Service/PanierService.php');

    $userServ = new  UtilisateurService();
    $panierServ = new PanierService();

    if(isset($_POST['firstname'])){
        $userServ->insertAddress($_POST,$_SESSION['mail']);
    }

    if(isset($_POST['promo'])){
        $data = $panierServ->rechercheCodePromo($_POST['codePromo']);
        echo json_encode($data);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'ajouter'){
        if(isset($_SESSION['mail'])){
            $PanierServ = new PanierService();
            $PanierServ->insertItem($_POST['id'], $_SESSION['mail']);
            $data = array('status' => true);
            echo json_encode($data);
        }else{
            $data = array('status' => false);
            echo json_encode($data);
        }
    }

    if(isset($_POST['action']) && $_POST['action'] == 'supprimer'){
        $panierServ->removeItem($_POST['id'], $_SESSION['mail']);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'recuperer'){
        $data = $userServ->rechercheUser($_SESSION['mail']);
        echo json_encode($data);
    }

    if(isset($_POST['action']) && $_POST['action'] == 'majorer'){
        if(isset($_POST['action']) && $_POST['role'] == 'major'){
        $quantity = $_POST['quantity']+1;
        }else{
            $quantity = $_POST['quantity']-1;
        }
         $panierServ->updateQuantity($_POST['id'], $_SESSION['mail'], $quantity);
    }

    if(isset($_SESSION['mail'])){
        if(isset($_POST['action']) && ($_POST['action'] == 'afficher' || $_POST['action'] == 'supprimer')){
            $data = $panierServ->afficherPanier($_SESSION['mail']);
            $var = 0;
            for($i=0;$i<sizeof($data);$i++){
                echo '<tr  class="items">
                        <th scope="row">'.($i+1).'</th>
                        <td>'.$data[$i]['designation'].'</td>
                        <td>'.$data[$i]['prix'].'</td>
                        <td><button id="minus" onclick="updateQuantity('.$data[$i]['id_produit'].',qte'.$i.',this.id)">-</button><input disabled="disabled" id="qte'.$i.'" class="text-center" value="'.$data[$i]['quantity'].'" style="width:50px;"><button id="major" onclick="updateQuantity('.$data[$i]['id_produit'].',qte'.$i.',this.id)">+</button></td>
                        <td><a class="waves-effect waves-light"><i class="fas fa-times" onclick="remove('.$data[$i]['id_produit'].')"></i></a></td>
                    </tr>';
                    $var = $var + $data[$i]['prix'];
            }
            echo '  <tr class="bg-light text-success">
                        <th colspan="2" scope="row" >Promo code</th>
                        <td id="code" colspan="2">Example code</td>
                        <td id="reduction">-5%</td>
                    </tr>
                    <tr class="total">
                        <th scope="row">5</th>
                        <td>Total</td>
                        <td id="total">'.$var.'</td>
                        <td></td>
                    </tr>';
        }
    }else{
        echo "";
    }