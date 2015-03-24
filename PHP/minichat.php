<?php
session_start();

if (!isset($_SESSION['pseudo']))
  $_SESSION['pseudo'] = '';

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mini Chat</title>
<body>
<div align="center">
<form action="minichat_post.php" method="POST">
Pseudo : <input type="text" name="pseudo" maxlength="255" size="15" value="<?php echo $_SESSION['pseudo']; ?>" required><br>
Message : <input type="text" name="message" maxlength="255" size="15" required><br>
<input type="submit" value="Poster">
</form>
</div>
<?php



try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $reponse = $bdd->query('SELECT pseudo, message, DATE_FORMAT(date, "%d/%m/%Y %Hh%imin%ss") AS date FROM messages ORDER BY id DESC LIMIT 0,10');
  //var_dump($reponse);

  echo '<table>';
  while ($donnees = $reponse->fetch())
  {
    echo '<tr><td>['.$donnees['date'].']</td><td>'.$donnees['pseudo'].'</td><td>'.$donnees['message'].'</td></tr>';
  }
  echo '</table>';

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
</body>
</html>
