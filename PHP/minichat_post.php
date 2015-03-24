<?php
session_start();

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);


var_dump( $pseudo);
var_dump( $message);
var_dump( $_POST);
$_SESSION['pseudo']=$pseudo;
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $reponse = $bdd->prepare('INSERT INTO messages(pseudo, message, date) values (:pseudo, :message, NOW())');
  $reponse->execute(array('pseudo'=>$pseudo, 'message'=>$message));

  //$reponse->closeCursor(); // Termine le traitement de la requête
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
header('Location: minichat.php');
?>

