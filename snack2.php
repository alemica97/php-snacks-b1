<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
negato” -->

<?php
    $name = $_GET['nome'];
    $mail = $_GET['mail'];
    $age = $_GET['eta'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack2</title>
</head>
<body>

    <?php
        if( (strlen($name) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age))){
            ?>
            <p>Nome: <?php echo $name; ?></p>
            <p>Email: <?php echo $mail; ?></p>
            <p>Età: <?php echo $age; ?></p>
            <?php
        }else{
            ?>
            <p>I dati inseriti non sono corretti</p>
            <?php
        }
    ?>
</body>
</html>