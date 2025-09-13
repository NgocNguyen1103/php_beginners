<?php

// var_dump($_SERVER["REQUEST_METHOD"]);




// if (isset) {
//     # code...
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $favouritePet = htmlspecialchars($_POST["favouritepet"]);

    if(empty($firstName)){
        header("Location: ../index.php");
        exit();
        
    }
    if(empty($lastName)){
        header("Location: ../index.php");
        exit();
        
    }
    

    echo "User subbmited data: <br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favouritePet;

    
} else{
    header("Location: ../index.php");
    exit();
}  
