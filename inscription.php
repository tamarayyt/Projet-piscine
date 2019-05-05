<?php
if(!empty($_POST['pseudo']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");


// Je mets aussi certaines sécurités ici…
$psw = mysql_real_escape_string(htmlspecialchars($_POST['psw']));
$psw2 = mysql_real_escape_string(htmlspecialchars($_POST['psw2']));

if($psw == $psw2)
{
 <?php
if(!empty($_POST['pseudo']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");

// Je mets aussi certaines sécurités ici…
$psw = mysql_real_escape_string(htmlspecialchars($_POST['psw']));
$passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));
if($psw == $passe2)
{
$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
// Je vais crypter le mot de passe.
$psw = sha1($psw);

mysql_query("INSERT INTO validation VALUES('', '$pseudo', '$psw', '$email')");
}
 
else
{
echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
}

}
?>
