<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

class ConnexionDDB {

  
        function connectDatabase(){
            try{
                $db = new mysqli( 'localhost', 'root', '', 'save_them');
                return $db;
               
            }catch(mysqli_sql_exception $mse){
                throw $mse;

            }

        }
}
?>





