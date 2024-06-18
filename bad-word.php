<?php 

$paragafo = $_GET['paragraph'];
$bad_word = $_GET['badWord'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad-word</title>
</head>
<body>
    <h2>Paragrafo</h2>

    <p> <?php echo $paragrafo; ?> </p>

    <hr>

    <h2>Parola da censurare</h2>
</body>
</html>