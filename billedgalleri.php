<?php

$billednavne = array ( "billede_1.jpg", "billede_2.jpg", "billede_3.jpg", "billede_4.jpg", "billede_1.jpg", "billede_2.jpg", "billede_3.jpg", "billede_4.jpg" );

$antalbilleder = count( $billednavne );

$billednummer = 0;

while( $billednummer < $antalbilleder )
{
    echo '<img src="' . $billednavne[$billednummer] . '" >';
    $billednummer++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</html>