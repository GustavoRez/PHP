<?php
//idk if this one is very useful, but...

$word = "Computer";
$phrase = "The wall is green";

echo 'The word "' . $word . '" has "' . strlen($word) . '" letters.<br><br>';

echo 'The phrase "' . $phrase . '"- has "' . str_word_count($phrase) . '" words.<br><br>';

echo 'The phrase "' . $phrase . '" got like this "' . strrev($phrase) . '" when is inverted.<br><br>';

echo 'The phrase "' . $phrase . '" has the word green in its "' . strpos($phrase, "green") . '" position.<br><br>';

echo 'The phrase "' . $phrase . '" turning green into yellow "' . str_replace("green", "yellow", $phrase) . '".<br><br>';
?>