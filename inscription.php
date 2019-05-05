<?php
if(!empty($_POST['email_a']))
{
// D'abord, je me connecte à la base de données.
mysql_connect("localhost", "root", "");
mysql_select_db("nom_db");


// Je mets aussi certaines sécurités ici…
$psw = mysql_real_escape_string(htmlspecialchars($_POST['psw']));
$psw2 = mysql_real_escape_string(htmlspecialchars($_POST['psw2']));

if($psw == $psw2)
{
	// D'abord, je me connecte à la base de données.
	mysql_connect("localhost", "root", "");
	mysql_select_db("Acheteur");

	// Je mets aussi certaines sécurités ici…
	$psw = mysql_real_escape_string(htmlspecialchars($_POST['psw']));
	$psw2 = mysql_real_escape_string(htmlspecialchars($_POST['psw2']));
		if($psw == $psw2)
		{
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email_a']));
		// Je vais crypter le mot de passe.
		$psw = sha1($psw);

		mysql_query("INSERT INTO validation VALUES('', '$email', '$psw', '$email_a')");
		}
		else
		{
		echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas…';
		}

	   $uname = isset($_POST["uname"]) ? $_POST["uname"] : "";
       $psw = isset($_POST["psw"]) ? $_POST["psw"] : "";

}
?>
