<?php 
var_dump($_GET);

//$souspage = (isset($_GET["souspage"]))? $_GET["souspage"] : "entree1";

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch ($page) {
    case "home":
        $input="recettes/home.html";
        break;
    case "entree":
        $input="recettes/entree.php";
        break;
    case "plat":
        $input="recettes/plat.php";
        break;
    case "dessert":
        $input="recettes/dessert.php";
        break;
        case "recette":
        $input = "html/recette.php";
        break;
        case "recettes2":
        $input = "html/recette2.php";
        break;
        case "recettes3":
        $input = "html/recette3.php";
        break;
    default : $input="recettes/home.html";
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

        <?php require $input; ?>
       
     
    </body>

</html>