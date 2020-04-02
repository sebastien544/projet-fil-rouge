<?php

class ConnexionDDB {


    function connectDatabase(){
        $db = new mysqli( '127.0.0.1', 'root', '200386', 'save_them');
        return $db;
    }
}
?>





