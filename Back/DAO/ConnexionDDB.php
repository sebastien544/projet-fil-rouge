<?php

class ConnexionDDB {


    function connectDatabase(){
        $db = new mysqli( 'localhost', 'root', '', 'save_them');
        return $db;
    }
}
?>





