<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- String operator -->
    <?php  

    //concatinate
    $a = "Hello";
    $b= "World!<br>";
    $c = $a . " " . $b;
    echo $c;
    ?>

    <!-- Arithmetic operator -->
    <?php
    echo 1 + 2 . "<br>";
    echo 1 * 2 . "<br>";
    echo 10 % 3 . "<br>";
    echo 10 ** 3 . "<br>" //power
    ?>

    <!-- Comparison -->
    <?php
    $a = 2;
    $b = "2";
    if($a === $b){ //type and value
        echo "true";
    } else{
        echo 'false';
    }

    echo $a == $b;  //compare value
    echo "<br>";
    ?>

    <!-- Logical -->
    <?php
    //&&: and
    //||: or
    ?>

    <?php 
    $a = 2;
    echo ++$a; //add -> echo
    echo $a++; //echo -> add
    echo $a
    ?>

</body>
</html>