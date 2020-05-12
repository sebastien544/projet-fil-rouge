<?php
include_once ('../Service/PetitionService.php');
include ("../Service/DonationService.php");
include_once ('../Service/UtilisateurService.php');
session_start();

if(isset($_GET['action']) && $_GET['action'] == 'testConnexion')
{
  if(isset($_SESSION['mail']))
  {
    $data = array('status' => true);
    echo json_encode($data);
  }else{
    $data = array('status' => false);
    echo json_encode($data);
  }
}

if($_GET['action'] == 'petitions')
{
    echo '
            <div  id="test5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Petitions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <table class="table table-bordered mb-5">
                        <thead>
                        <tr>
                            <th scope="col">Number Petition</th>
                            <th scope="col">Date</th>
                            <th scope="col">Animal</th>
                        </tr>
                        </thead>
                        <tbody>';
                        
                            $petServ = new PetitionService;
                            $data = $petServ->afficherPetitions($_SESSION['mail']);
                            for($i=0; $i < sizeof($data); $i++){
                            echo '<tr>
                                    <th scope="row">'.($i+1).'</th>
                                    <td>'.$data[$i]['date_signature'].'</td>
                                    <td>'.$data[$i]['type_animal'].'</td>
                                    </tr>';
                            }
                        echo'
                        </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>';
}

if($_GET['action'] == 'donations')
{
    echo'<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Donations</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <table class="table table-bordered mb-5">
        <thead>
          <tr>
            <th scope="col">Number Donation</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Animal</th>
          </tr>
        </thead>
        <tbody>';
          
            $donServ = new DonationService;
            $data = $donServ->afficherDon($_SESSION['mail']);
            for($i=0; $i < sizeof($data); $i++){
              echo '<tr>
                    <th scope="row">'.($i+1).'</th>
                    <td>'.$data[$i]['date'].'</td>
                    <td>'.$data[$i]['montant'].'</td>
                    <td>'.$data[$i]['type_animal'].'</td>
                    </tr>';
            }
        echo'   
        </tbody>
      </table>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
    </div>
    </div>';
}

if($_GET['action'] == 'informations')
{
  echo '<div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Personal informations</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <div class="modal-body">';
  
    
      
        $userServ = new UtilisateurService;
        $data = $userServ->rechercheUser($_SESSION['mail']);
        echo  '<form class="text-center border border-light p-5" action="#!">
              
                <div class="form-row mb-4">
                  <div class="col">
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" value="'.$data['prenom'].'" disabled="disabled">
                  </div>
                <div class="col">
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" value="'.$data['nom'].'" disabled="disabled">
                  </div>
                </div>
                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" value="'.$data['mail'].'" disabled="disabled">
                <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                <input type="text" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                <input type="text" id="defaultRegisterFormLastName" class="form-control mb-1" placeholder="Address">
                <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" placeholder="">
                <input type="text" id="defaultRegisterFormLastName" class="form-control mb-4" placeholder="Zip code">
                <input type="text" id="defaultRegisterFormLastName" class="form-control " placeholder="Country">
                <button class="btn btn-blue-grey my-4 btn-block" style="width: 125px;" type="submit">MODIFY</button>
              </form>
      

              </div>
            </div>';
}

