<?php
/* Param�tres de la connexion */
$id = mysqli_connect("localhost", "root", "", "vcheikh");

/* Param�tres de la connexion 
//Declaration et initialisation des variables de connexion

$host     = "localhost"; // Nom du serveur
$user     = "root";      //Nom d'utilisateur
$password ="";           //Mot de  passe
 */
$dbname   ="vcheikh";//Nom de la base de donn�es

//connexion au serveur da la base de donn�es
$iid = mysqli_connect("localhost", "root", "");


//Selection de la base de donn�es 
$db = mysqli_select_db($iid,$dbname);

//Test de la connexion
/*
if($iid > 0)
   $erreur = " ";
   else
       $erreur = "Echec de la connexion au serveur de la base de donn�es !";
       */	   
if($db == true)
  $erreur = " ";
  else
       $erreur = "S�lection de la base de donn�es impossible !";

?>