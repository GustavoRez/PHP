<html>
<body>

<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i"; // "/" is the delimeter and 'i' makes the search case-sensitive.
echo preg_match($pattern, $str);  //Search for the first in the second.
//Output 1.
?>

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); //Search for ALL words that has the pattern.
//Output 4.
?>

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); //Use basically an 'if' to replace a word.
// Outputs "Visit W3Schools!"
?>

</body>
</html>
