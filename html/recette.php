<?php
require "recettes/recettes.php";
var_dump($entree1);
$recette = $entree1;

?>

<h1><?php echo $recette["titre"] ?></h1>
        
<div><img src=" <?php echo $recette["image"] ?>" alt=""></div>

<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ..."</p>

<section class="row bg-light">
    <div class="col-6">
        <table>
            <tr>
                <th><?php echo $recette["temps"] ?></th>
                <th><?php echo $recette["personnes"] ?></th>
                <th><?php echo $recette["difficulte"] ?></th>
                <th><?php echo $recette["cout"] ?></th>
            </tr>

        <h2><?php echo $recette["ingredients"] ?></h2>
    </div>
    
    <div class="col-6">
        <?php echo $recette["etapes"] ?>
        
    </div>
</section>
<hr>
<section>
    <h2>Commentaires</h2>
    <form action="formulaire.php" method="post">
        <p>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom">
        </p>

        <p>
            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prenom">
        </p>

        <p>
            <label for="email">Votre e-mail</label>
            <input type="text" id="email" name="email" placeholder="Votre e-mail">
        </p>

        <p>Note /5 : 
            <label for="rad0">0</label>
            <input type="radio" id="rad0" name="note" value="0">
            <label for="rad1">1</label>
            <input type="radio" id="rad1" name="note" value="1">
            <label for="rad2">2</label>
            <input type="radio" id="rad2" name="note" value="2">
            <label for="rad3">3</label>
            <input type="radio" id="rad3" name="note" value="3">
            <label for="rad4">4</label>
            <input type="radio" id="rad4" name="note" value="4">
            <label for="rad5">5</label>
            <input type="radio" id="rad5" name="note" value="5">
        </p>

        <p>
            <select name="select">
		        <option>Entreprise</option>
		        <option>Particulier</option>
	        </select>
        </p>

        <p> 
            <label for="comment">Laissez-nous un commentaire</label><br>
            <textarea id="comment" name="comment" rows="5" cols="40"></textarea>
        </p>

        <p><input type="checkbox" name="check">J'accepte les conditions d'utilisation</p>
        <p><input type="submit" value="Envoyer"></p>

    </form>
</section>