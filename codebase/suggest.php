<?php 
 if (isset($_POST['envoyer'])) {
  if (empty($_POST['user-name'])) {
    echo"<script>alert('veuillez saisir votre nom !</script>";
  }
  elseif (empty($_POST['user-mail'])|| !filter_var($_POST['user-mail'],FILTER_VALIDATE_EMAIL)) {
    echo "veuillez saisir votre email";
  }
  elseif (empty($_POST['message'])) {
    echo "veuillez saisir votre message ";
  }
  else {
    require_once 'includes/sendemail.php';
  }
 }
 else{
  echo "il faut valider votre formulaire";
 }
?>