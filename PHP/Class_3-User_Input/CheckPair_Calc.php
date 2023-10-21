<?php         
        if($_GET["num"] % 2 == 0)
            echo $_GET["num"], " It's pair!";
        else 
           echo $_GET["num"], " It's not pair...";
           exit();
    ?>