<?php

var_dump($_POST);

$verif = isset($_POST["check"])? "a" : "n'a pas";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires utilisateur</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <?php require "html/menu.php" ?>
    </header>


   <section class="fig-menu bg-light">
        
        <table class="tabl">
        <tr>
        <td colspan ='2'><h2>Commentaires</h2></td>
        </tr>
        <tr>
        <td>Vous êtes:</td><td><p>[<strong><?= $_POST['select'] ?></strong>] </td>
        </tr>
        <tr>
        <td>Votre nom:</td><td><?= $_POST['nom'] ?></td>
        </tr> 
        <tr>
        <td>Votre prénom:</td><td><?= $_POST['prenom'] ?></td> 
        </tr>
        <tr>
        <td>Votre e-mail:</td><td><?= $_POST['email'] ?></td> 
        </tr>
        <tr>
        <td>Note:</td><td><?= $_POST['note'] ?> /5</td> 
        </tr>
        <tr>
        <td>vous a laissé le commentaire suivant :<td><p><?= $_POST['comment'] ?></p></td>
        </tr>
        <tr>
        <td colspan ='2'><p>L'utilisateur <?= $verif ?> accepté les conditions générales</p>
        </tr>
        
        </table>
    </section> 

    <p><a href="index.php">Back to Homepage</p>
    
</body>
</html>
