<?php
    date_default_timezone_set("America/Los_Angeles");
    echo date("D h:i:s A");
    $t = date("H");

    if ($t < "20") {
        echo " Have a good day!";
    }

    else
    {
        echo "Have a good night.";
    }

    if ("2" < "10") {
        echo " less";
    } else {
        echo " greater";
    }
?>