<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <P>This is a <?php echo"hoho "; ?>paragraph</P>
    <?php echo"This is the second"; ?> -->
    
    <!-- variable -->
     <?php /*
     $fullName = "Dani Ceballos";
     echo $fullName;
     */
     ?>


    <!-- datatypes -->
    <?php 
    /*
    // Scalar types
    $string = "Dani";
    $int = 15;
    $float = 12.5;
    $boolean = true;

    //Array type
    $myArr = array("Hello", "world", "bad", "day");
    $myOtherArr = ["Hello", "world", "bad", "day"];

    //Object types
    @object = new Car();

    //Default
    $string = "";
    $int = 0;
    $float = 0;
    $boolean = false;

    $arr = [];
    $object = null;
    */
    ?>

    <!-- Pre-define variable (global variable) -->
    <?php
    // echo $_SERVER["DOCUMENT_ROOT"]; 
    // echo "<br>";
    // echo $_SERVER["PHP_SELF"];
    // echo "<br>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_METHOD"];

    //get data from url, ex: http://localhost/mywebsite/index.php?name=alex
    echo $_GET["name"];
    //http://localhost/mywebsite/index.php?name=alex&color=blue
    echo $_GET["color"];
    // $_POST[];
    // echo $_REQUEST[] //for get, post cookie
    // echo $_FILES[] // check uploaded file
    echo $_SESSION["username"] = "Kroos";
    echo $_SESSION["username"];
    //$_ENV[] //for env

        ?>

</body>
</html>