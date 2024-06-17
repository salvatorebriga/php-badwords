<?php 

$paragafo = $_GET['paragraph'];
$bad_word = $_GET['badWord'];

$bad_word = str_replace($bad_word ,'***' , $bad_word);

echo $paragafo . ' è lungo ' . strlen($paragafo) . ' caratteri. <br><br>';

echo var_dump($paragafo) . '<br><br>';

echo 'Bad Word: ' . $bad_word;

?>