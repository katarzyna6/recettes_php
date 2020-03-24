<?php 

    $plat1 = [
        "titre" => "Plat 1",
        "image" => "img/plat1.jpg",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ...",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];

    $plat2 = [ 
        "titre" => "Dessert 2",
        "image" => "img/plat2.jpg",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ...",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];

    $plat3 = [
        "titre" => "Plat 3",
        "image" => "img/plat3.jpg",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ...",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];
        
        
$plats = [$plat1, $plat2, $plat3];

$size = sizeof($plats);
$titre = "";
$image = "";
$description = "";
$temps = "";
$personnes = "";
$difficulte = "";
$cout = "";
$ingredients = "";
$etapes = "";
$liste = "";
$html = "";

for($i = 0; $i < $size; $i++){
    $titre = $plats[$i]["titre"];
    $image = $plats[$i]["image"];
    $description = $plats[$i]["description"];
    $temps = $plats[$i]["temps"];
    $personnes = $plats[$i]["personnes"];
    $difficulte = $plats[$i]["difficulte"];
    $cout = $plats[$i]["cout"];
    //$ingredients = $entrees[$i]["ingredients"];
    //$etapes = $entrees[$i]["etapes"];
    $html .= "<figure class='col-4'>
    <h2 class='text-center'>$titre</h2>
    <div class='img-block'><a href='plats/plat1.html'><img src='$image' alt='Image plat 1'>
    </a></div>
    <p>$description</p>
    </figure>";

    //$ingredients = explode("///", $ingredients);
    //$etapes = explode("///", $etapes);


}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Plats</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
<body>
    <?php echo $html ?>
</body>
</html>