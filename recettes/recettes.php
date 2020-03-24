<?php 

    $entree1 = [
        "titre" => "Entree 1",
        "image" => "img/entree1.jpg",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];

    $entree2 = [ 
        "titre" => "Entree 2",
        "image" => "img/entree2.jpg",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];

    $entree3 = [
        "titre" => "Entree 3",
        "image" => "img/entree3.jpg",
        "temps" => "15sec",
        "personnes" => 8,
        "difficulte" => 1,
        "cout" => 1,
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///branche de céleri///carotte",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///
        Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///
        Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];
        
        
$entrees = [$entree1, $entree2, $entree3];

$size = sizeof($entrees);
$titre = "";
$image = "";
$temps = "";
$personnes = "";
$difficulte = "";
$cout = "";
$ingredients = "";
$etapes = "";
$liste = "";
$html = "";

for($i = 0; $i < $size; $i++){
    $titre = $entrees[$i]["titre"];
    $image = $entrees[$i]["image"];
    $temps = $entrees[$i]["temps"];
    $personnes = $entrees[$i]["personnes"];
    $difficulte = $entrees[$i]["difficulte"];
    $cout = $entrees[$i]["cout"];
    //$ingredients = $entrees[$i]["ingredients"];
    //$etapes = $entrees[$i]["etapes"];
    $html .= "<figure class='col-4'>
    <h2 class='text-center'>$titre</h2>
    <div class='img-block'><a href='entrees/entree1.html'><img src='$image' alt='Image entrée 1'>
    </a></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a dolor justo. ...</p>
    </figure>";

    //$ingredients = explode("///", $ingredients);
    //$etapes = explode("///", $etapes);


}




?>