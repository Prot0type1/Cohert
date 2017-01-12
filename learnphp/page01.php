<!DOCTYPE html>
<html>
<body>

<h1>My second PHP page</h1>

<?php
// This is a comment 

    echo "<h4>Hello World!</h4>";

    $myString = "Hello World 2.";
    $x = 20;
    $y = 3.5;
    $z = $x + $y;

    echo "<p>" . $myString . "</p>";
    echo "<p>" . $z . "</p>";

    $txt = "w3schools.com";
    echo "I love $txt!";

    define ("PI", 3.14159265358979823, false);
    echo "<h1>" . PI . "</h1>";

    echo 0x12;
?>

<!-- PHP scripting stops here-->

</body>
</html>