<?php 

    $dessert1 = [
        "titre" => "Dessert 1",
        "image" => "img/dessert1.jpg",
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

    $dessert2 = [ 
        "titre" => "Dessert 2",
        "image" => "img/dessert2.jpg",
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

    $dessert3 = [
        "titre" => "Dessert 3",
        "image" => "img/dessert3.jpg",
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
        
        
$desserts = [$dessert1, $dessert2, $dessert3];

$size = sizeof($desserts);
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
    $titre = $desserts[$i]["titre"];
    $image = $desserts[$i]["image"];
    $description = $desserts[$i]["description"];
    $temps = $desserts[$i]["temps"];
    $personnes = $desserts[$i]["personnes"];
    $difficulte = $desserts[$i]["difficulte"];
    $cout = $desserts[$i]["cout"];
    //$ingredients = $entrees[$i]["ingredients"];
    //$etapes = $entrees[$i]["etapes"];
    $html .= "<figure class='col-4'>
    <h2 class='text-center'>$titre</h2>
    <div class='img-block'><a href='desserts/dessert1.html'><img src='$image' alt='Image dessert 1'>
    </a></div>
    <p>$description</p>
    </figure>";

    //$ingredients = explode("///", $ingredients);
    //$etapes = explode("///", $etapes);

}
