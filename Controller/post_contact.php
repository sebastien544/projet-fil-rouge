<?php


    $errors = [];

    if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
        $errors['name']= "vous n'avez pas renseigné votre nom";
    }
    if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email']= "vous n'avez pas renseigné un email valide";
    }
    if(!array_key_exists('message', $_POST) ||$_POST['message'] == ''){
        $errors['message']= "vous n'avez pas renseigné votre message";
    }
  //  var_dump($errors);
    die();

    if(!empty($errors)){
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $_POST;
        header('Location: contactus.php');
    }else{ 
        $_SESSION['success'] = 1;
        $message= $_POST['message'];
        var_dump($message);
        $headers = 'FROM :site@local.dev';
        mail('debroucker.Antoine@bbox.fr', 'Formulaire de contact', $message, $headers);
        header('Location: contactus.php');
    }