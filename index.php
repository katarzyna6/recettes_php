<?php 
//var_dump($_GET);

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch ($page) {
    case "home":
        $include ="recettes/home.html";
    break;
    case "entree":
        $include="recettes/entree.php";
    break;
    case "plat":
        $include="recettes/plat.php";
    break;
    case "dessert":
        $include="recettes/dessert.php";
    break;
    case "recette":
        $include = "html/recette.php";
    break;
    case "recettes2":
        $include = "html/recette2.php";
    break;
    case "recettes3":
        $include = "html/recette3.php";
    break;
    default : $include ="recettes/home.html";
}

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <?php require "html/menu.php"; ?>     
        </header>
        <section>
            <?php require $include; ?>
        </section>
    </body>

</html>