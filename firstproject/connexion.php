<?php 
 $host="localhost";
 $password="";
 $user="root";
 $dbname="utilisateur";
 $conn=mysqli_connect($host,$password,$user,$dbname);
 if (!$conn) {
    die("connexion faile:". mysqli_connect_error());
 }
?>