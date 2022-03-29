<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->


<!-- genero un numero casuale
controllo che il numero non sia contenuto nell'array 
se non c'è lo pusho
tutto finché non si arriva a 15 elementi -->

<?php
    $array_numeri_casuali = [];

    do{
        $numero_casuale = rand(1, 100);
        if(!in_array($numero_casuale, $array_numeri_casuali)){
            array_push($array_numeri_casuali, $numero_casuale);
        }
    }while(count($array_numeri_casuali) < 15);

    for($i = 0; $i < count($array_numeri_casuali); $i++){
        if($i < (count($array_numeri_casuali) - 1)){
            echo $array_numeri_casuali[$i]. ' - ';
        }elseif($i == (count($array_numeri_casuali) - 1)){
            echo $array_numeri_casuali[$i];
        }
    };
?>

