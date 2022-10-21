<?php

session_start();

if(empty($_POST['nom'])  || empty($_POST['prenom'])  || empty($_POST['email']) || empty($_POST['message']))
{
    $errors = "\n Error: all fields are required";
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
    $_SESSION['st'] = $errors;
}
else
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Message Contact";
    $txt="Nom : ". $nom . "\r\n Prenom : ". $prenom . "\r\n Email : " . $email. "\r\n Message : ".$message;
    $headers = "From: ".$_POST['email'];
    if($email!=NULL){
        mail("agentmetier@gmail.com",$subject,$txt,$headers); 
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        $_SESSION['status'] = "Merci pour votre Message  \n Message a été bien envoyer ";
}
}
?>