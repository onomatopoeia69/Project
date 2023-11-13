<?php include("db.php"); ?>
<?php include("functions.php"); ?>
<?php

   
   

    $int=date("H:i:s");


     if($int >= 0 && $int < 12){


       echo "GoodMorning";

    }
    elseif($int > 12 && $int < 17 )
    {

        echo "Good Afternoon";

    }else{
        echo "GoodNight";
    }

?>