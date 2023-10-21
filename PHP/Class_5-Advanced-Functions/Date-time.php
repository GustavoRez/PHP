<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
echo "Today is " . strftime("%d/%m/%Y") . "<br>";
echo "Today is " . strftime("%d.%m.%Y") . "<br>";
echo "Today is " . strftime("%d-%m-%Y") . "<br>";
echo "Today is " . strftime("%A") . "<br>";
echo "This year is " . strftime("%G") . "<br>";
echo "It is " . strftime("%H:%M:%S");// or %T (include all these 3)
?>

</body>
</html>
