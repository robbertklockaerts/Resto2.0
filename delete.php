<?php


/*
include("backmessages.php");
error_reporting(0);

$id = $_GET('id');
$query = "DELETE FROM VISITEURS WHERE ID = '$id'";

$data =mysqli_query($conn,$query);

if ($data)
{
echo " Deleted";
}
else{
echo "Failed to delete";
}



try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Insertion du message à l'aide d'une requête préparée
$id = $_GET('id')
$req = $bdd->prepare('DELETE FROM visiteurs WHERE ID = '$id'";
$req->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['message'] ));



// Redirection du visiteur vers la page du minichat
header('Location:backmessages.php');
*/

$conn = mysqli_connect("localhost", "root", "", "contact");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}




$sql = "DELETE FROM visiteurs WHERE ID='$_GET[id]'";
//$result = $conn->query($sql);

if (mysqli_query($conn,$sql))
{
header("refresh:1; url=backmessages.php");
}
else
{
echo "not deleted";
}



$conn = mysqli_connect("localhost", "root", "", "foto");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}




$sql = "DELETE FROM images WHERE ID='$_GET[id]'";
//$result = $conn->query($sql);

if (mysqli_query($conn,$sql))
{
header("refresh:1; url=backgallery.php");
}
else
{
echo "not deleted";
}
?>


