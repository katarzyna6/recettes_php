<?php 
var_dump($_GET);

//$souspage = (isset($_GET["souspage"]))? $_GET["souspage"] : "entree1";

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch ($page) {
    case "home":
        echo "$page";
        break;
    case "entree":
        echo "$page";
        break;
    case "plat":
        echo "$page";
        break;
    case "dessert":
        echo "$page";
        break;
    default : echo "$page";
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

        <article>
            <?php require "recettes/home.html"; ?>
        </article>
     
    </body>

</html>