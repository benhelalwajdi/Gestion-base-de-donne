
<?php
mysql_connect('localhost', 'root', 'wbh') or die('Erreur'.mysql_error());
mysql_select_db("stage");

//ajouter le nom de societer
if(isset($_POST['ns']))      $ns=$_POST['ns'];
else      $ns=" ";
if(isset($_POST['adresse']))      $ncin=$_POST['adresse'];
else      $ad=" ";

$sql = "INSERT INTO societe(nomS, adresse) VALUES('$ns', '$ad')";
    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

//----------------------------------------------------------
    //----------------Societe---------------------------
//----------------------------------------------------------

//ajouter directeur generale
if(isset($_POST['ndg']))      $nom=$_POST['ndg'];
else      $nomdg=" ";
if(isset($_POST['ncindg']))      $ncin=$_POST['ncindg'];
else      $ncindg=" ";
$sql = "INSERT INTO directeurG(ncin, nom) VALUES('$nom', '$ncin')";
    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

//----------------------------------------------------------
    //----------------DirecteurG---------------------------
//----------------------------------------------------------


//ajouter sous directeur
if((isset($_POST['optionsList']))&($_POST['optionsList']=='option1'))
	{

	};


if(isset($_POST['ncindg']))      $ncin=$_POST['ncindg'];
else      $ncindg=" ";


    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';

    mysql_close();  // on ferme la connexion 
?>
