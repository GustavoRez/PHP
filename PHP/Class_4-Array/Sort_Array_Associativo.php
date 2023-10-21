<?php
//Ok... I can explain it...
$champ = array("Yasuo"=>"Weak", "K'Sante"=>"Very Strong", "Nocturne"=>"Freak", "Veigar"=>"Dwarf", "Dynquedo with Ahri"=>"💀");
ksort($champ);
echo "IN ALPHABETICAL ORDER!<br>";
echo "<b>By the champion name: </b><br>";
foreach($champ as $byKey => $x) {
    echo "Champ = " . $byKey . ", Strength = " . $x;
    echo "<br>";
  }
echo "<br><br><br>";
asort($champ);
echo "<b>By the champion strength: </b><br>";
foreach($champ as $x => $byValue){
  echo "Champ = " . $x . ", Strength = " . $byValue;
  echo "<br>";
}
?>