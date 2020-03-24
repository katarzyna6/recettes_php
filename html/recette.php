<?php
require "recettes/recettes.php";
var_dump($recette_test);
$recette = $recette_test;
?>

<h1><?php $recette[$titre] ?></h1>
        
<div><?php $recette[$image] ?></div>

<section class="row bg-light">
    <div class="col-6">
        <table>
            <tr>
                <th><?php $recette[$temps] ?></th>
                <th><?php $recette[$personnes] ?></th>
                <th><?php $recette[$difficulte] ?></th>
                <th><?php $recette[$cout] ?></th>
           
        <h2><?php $recette[$ingredients] ?></h2>
       
    
    <div class="col-6">
        <h2><?php $recette[$etapes] ?></h2>
        
    </div>
</section>
<hr>
<section>
    <h2>Commentaires</h2>
    <form action="../../index.html" method="post">
        <p>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom">
        </p>
        <p>Note /5 : 
            <label for="rad0">0</label>
            <input type="radio" id="rad0" name="nom" value="0">
            <label for="rad1">1</label>
            <input type="radio" id="rad1" name="nom" value="1">
            <label for="rad2">2</label>
            <input type="radio" id="rad2" name="nom" value="2">
            <label for="rad3">3</label>
            <input type="radio" id="rad3" name="nom" value="3">
            <label for="rad4">4</label>
            <input type="radio" id="rad4" name="nom" value="4">
            <label for="rad5">5</label>
            <input type="radio" id="rad5" name="nom" value="5">
        </p>
        <p> 
            <label for="comment">Laissez-nous un commentaire</label><br>
            <textarea id="comment" rows="5" cols="40"></textarea>
        </p>
        <p><input type="submit" value="Envoyer">
        </p>
    </form>
</section>