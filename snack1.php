 <!-- Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60 -->

<?php
    // creo un Array che contiene le partite di basket
    $partite_basket = [
        [
            'casa' => 'Basket Milano',
            'ospite' => 'Basket Roma',
            'punti_casa' => 45,
            'punti_ospite' => 21
        ],
        [
            'casa' => 'Basket Torino',
            'ospite' => 'Basket Firenze',
            'punti_casa' => 30,
            'punti_ospite' => 45
        ],
        [
            'casa' => 'Basket Palermo',
            'ospite' => 'Basket Catania',
            'punti_casa' => 45,
            'punti_ospite' => 21
        ],
        [
            'casa' => 'Basket Bologna',
            'ospite' => 'Basket Napoli',
            'punti_casa' => 15,
            'punti_ospite' => 45
        ]
    ];
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snak1</title>
</head>
<body>

    <?php
        
        for($i = 0; $i < count($partite_basket); $i++){
            ?>
                <span><?php echo $partite_basket[$i]['casa']. ' - ' .$partite_basket[$i]['ospite']. ' | ' .$partite_basket[$i]['punti_casa']. ' - ' .$partite_basket[$i]['punti_ospite']; ?></span> <br>
            <?php
        }
    ?>
</body>
</html>