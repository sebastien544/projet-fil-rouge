<?php

class ConnexionDDB {


    function connectDatabase(){
        $db = new mysqli( 'localhost', 'Antoine', '200386', 'save_them');
        return $db;
    }
}
?>





