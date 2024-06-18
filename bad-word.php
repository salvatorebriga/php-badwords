<?php 

$paragafo = $_GET['paragraph'];
$bad_word = $_GET['badWord'];

$new_paragrafo = str_replace($bad_word, '***' , $paragafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad-word</title>
</head>
<body>
    <h2>Paragrafo da censurare</h2>

    <p> <?php echo $paragafo . '<br><br>' . 'Lunghezza: ' . strlen($paragafo) . ' caratteri'; ?> </p>

    <hr>

    <h2>Parola da censurare</h2>

    <p><?php echo $bad_word; ?></p>

    <hr>

    <h2>Paragrafo censurato</h2>

    <p><?php echo $new_paragrafo . '<br><br>' . 'Lunghezza: ' . strlen($new_paragrafo) . ' caratteri'; ?></p>

</body>
</html>