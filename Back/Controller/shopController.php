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

    if(isset($_SESSION['mail']) && isset($_GET['action']) && $_GET['action'] == 'compter')
    {
        $data = $panierServ->afficherPanier($_SESSION['mail']);
        $total = 0;
        for($i=0;$i<sizeof($data);$i++)
        {
            $total += 1 * $data[$i]['quantity'];
        }
        echo $total;
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

    if(isset($_GET['action']) && $_GET['action']== 'afficherProduit'){

        $data = $panierServ->afficherProduit($_GET['page'],$_GET['categorie']);
        
            $count2=ceil(sizeof($data)/3);
              
            for($j=0; $j<$count2;$j++){
                echo' <div class="row">';
                $i=0;
                 $count=ceil(sizeof($data)/2);
                
                
                    if($j== 1){
                        $i=3;
                        $count=6;
                    }
                        for($i; $i<$count; $i++){
                            echo '
                            <div class="col-xl-4 col-lg-6 col-sm-12">
                        
                            
                                <div class="card card-cascade narrower">
                                    <div class="view view-cascade overlay">
                                        <img src="'.$data[$i]['photo'].'" class="card-img-top"
                                        alt="narrower">    
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h5 class="blue-grey-text"><i class="fas fa-hippo"></i> Shop</h5>
                                    
                                        <h4 class="card-title">'.$data[$i]['designation'].'</h4>
                                    
                                        <p class="card-text">'.$data[$i]['description'].' <br> '.$data[$i]['prix'].' pts</p>
                                        <a id="3" class="add btn btn-unique btn btn-blue-grey">Add to basket</a>
                                    </div>
                            
                                </div>
                                
                            </div>';
                        }
                    
            echo '</div>'; 
            }
    }

    if(isset($_GET['action']) && $_GET['action']== 'pagination'){
       
        $numberPage= $panierServ->afficherNumberPage($_GET['categorie']);
       
        echo'
        <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue">
                <li class="page-item"><a class="page-link" id="precedent" onclick="passage()">Previous</a></li>';
            for($i=1; $i<=$numberPage; $i++){
                echo'<li class="page-item"><a class="page-link" href="shop_02.php?page='.$i.'&categorie='.$_GET['categorie'].'">'.$i.'</a></li>';
            
            }
            echo '<li class="page-item"><a id="suivant" onclick="passage()" class="page-link">Next</a></li>
            </ul>
        </nav>';
    }

    if(isset($_GET['action']) && $_GET['action'] == 'numberPage'){
        echo    $panierServ->afficherNumberPage($_GET['categorie']);
    }