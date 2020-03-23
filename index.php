<?php 
var_dump($_GET);

//$souspage = (isset($_GET["souspage"]))? $_GET["souspage"] : "entree1";

$page = isset($_GET["page"])? $_GET["page"] : "home";

switch ($page) {
    case "home":
        $input="recettes/home.html";
        break;
    case "entree":
        $input="recettes/entree.html";
        break;
    case "plat":
        $input="recettes/plat.html";
        break;
    case "dessert":
        $input="recettes/dessert.html";
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