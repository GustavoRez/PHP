<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<!--Or can be used it's own name in action, like "input_Upgrade.php"-->
  Name: <input type="text" name="fname">
  Name2: <input type="text" name="gname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars don't let the navigator use what was typed in input as an HTML element, i.e., user can't use HTML codes inside this area.
    $name = htmlspecialchars($_REQUEST['fname']);
    $name2 = htmlspecialchars($_REQUEST['gname']);
    if (empty($name)) {
        echo "Name missing";
    } else {
        echo $name;
    }
    echo " ";
    if (empty($name2)) {
        echo "Second name missing";
    } else {
        echo $name2;
    }
}
?>

</body>
</html>