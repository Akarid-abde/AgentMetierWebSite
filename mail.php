<?php
session_start();
if(empty($_POST['nom'])  || empty($_POST['prenom'])  || empty($_POST['email']) || empty($_POST['tele']))
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
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $metier = $_POST['metier'];
    $subject = "demande d'un client, il chosis metier". $metier;
    $txt ="Nom : ". $nom . "\r\n Prenom : ". $prenom . "\r\n Email : " . $email . "\r\n tele :" . $tele. "\r\n metier :". $metier ;
    $headers = "From: ".$email;
    if($email!=NULL){
        mail("agentmetier@gmail.com",$subject,$txt,$headers); 
        $referer = $_SERVER['HTTP_REFERER'];
        header("Location: $referer");
        $_SESSION['st'] = "Merci pour votre Message  \n Message a été bien envoyer ";
    }
}
?>