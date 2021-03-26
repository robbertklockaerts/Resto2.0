<?php

////////////////////// contact form ///////////////////////////


if(ISSET($_POST['submit']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($message))

    {
        header('location:contact.php?error');
    }
}


// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO visiteurs (firstname, lastname, email, message) VALUES(?, ?,?,?)');
$req->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['message'] ));



// Redirection du visiteur vers la page du minichat
header('Location:contact.php');


/////////////////// logbook form ////////////////////////////////


if(ISSET($_POST['submit2']))
{
    $name = $_POST['name'];
    $resto = $_POST['resto'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    if (empty($name) || empty($resto) || empty($date) || empty($comment))

    {
        header('location:guestbook.php?error');
    }
}


// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=logbook;charset=utf8', 'root', '');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO guest (name, resto, date, comment) VALUES(?, ?,?,?)');
$req->execute(array($_POST['name'], $_POST['resto'], $_POST['date'], $_POST['comment'] ));



// Redirection du visiteur vers la page du guestbook
header('Location:guestbook.php');



?>