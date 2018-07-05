<?php
  try {
    $connexion = new PDO('mysql:host=localhost;dbname=afrochic;charset=utf8','root','');
  } catch (\Exception $e) {
    die("Erreur : ".$e->getMessage());
  }

  $query1 = 'INSERT INTO clients(nom, mail) VALUES (?, ?)';
  $query2 = 'INSERT INTO messages(contenu, date_message, mail) VALUES (?, NOW(), ?)';

  $request1 = $connexion->prepare($query1);
  $request2 = $connexion->prepare($query2);

  $nom = htmlspecialchars($_POST['nom']);
  $mail = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $request1->execute(array($nom, $mail));
  $request2->execute(array($message, $mail));

  // Redirection vers index.php
  header('Location: index.php');

 ?>
