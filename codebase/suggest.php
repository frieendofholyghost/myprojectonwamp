<?php 
 include'connexion.php';
     if (!$conn) {
        die("connexion failed: " . mysqli_connect_error());
    }
 $name=$_POST["user_name"];
 $tel=$_POST["user-tel"];
 $email=$_POST["user-mail"];
 $message=$_POST["message"];
  if (isset($_name) AND isset($_tel) AND isset($_email)) {
    echo 'le message est bien reçu';
  }
?>