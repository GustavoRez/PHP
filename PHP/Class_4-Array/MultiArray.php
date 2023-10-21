<?php
  $skin = array (
    array("Dark Star Shaco",1350,18),
    array("Debonair Zed",1820,13),
    array("Battle Academia Katarina",1350,2),
    array("Astronaut Gnar",1350,15)
  );
    
  echo $skin[0][0].": Price: ".$skin[0][1].", Sales: ".$skin[0][2].".<br>";
  echo $skin[1][0].": Price: ".$skin[1][1].", Sales: ".$skin[1][2].".<br>";
  echo $skin[2][0].": Price: ".$skin[2][1].", Sales: ".$skin[2][2].".<br>";
  echo $skin[3][0].": Price: ".$skin[3][1].", Sales: ".$skin[3][2].".<br><br><br>";

  //Yeah. I know i could use a repeat loop here. idk why i didn't.

  for ($i = 0; $i < 4; $i++){
  	echo "<b>Skin " . $skin[$i][0] . "</b><br>";
    for ($k = 1; $k < 3; $k++){
    switch($k){
      case 1: echo "Price: " . $skin[$i][$k] . "<br>";
      break;
      case 2: echo "Sales: " . $skin[$i][$k] . "<br>";
      break;
      }
    } 
    echo "<br>";
  }
  //There it is!
  ?>