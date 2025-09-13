<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Declare
    // $fruits = array("Apple", "Banana", "Cherry");
    // $fruits = ["Apple", "Banana", "Cherry"];
    // echo $fruits[2];

    //add element at the end
    // $fruits[] = "Orange";
    // echo $fruits[3];

    //Replace element
    // echo $fruits[1];
    // $fruits[1] = "Orange";
    // echo $fruits[1];

    //empty index
    // unset($fruits[1]);

    //remove element
    //array_slice($fruits, 0, 1) //(array, start, No of delete)
    
    //print arrau
    //print_r($fruits);
    ?>

    <?php 
    //label array
    // $task =  [
    //     "laundry" => "Dan", 
    //     "wash" => "Pri", 
    //     "trash" => "Bas", 
    //     "Dish" => "Bel"
    // ];
    // // echo $task["wash"];
    // print_r($task);
    // echo "<br>";
    // echo count($task);
    // // sort($task);
    // print_r($task);

    //add element
    // $task["nothing"] = "me";
    // print_r($task);
    
    ?>

    <?php 
    
    $fruits = ["Apple", "Banana", "Cherry"];
    $test = ["Mango", " Strawberry"];
    //merger array
    // array_splice($fruits, 2, 0, $test); //(arr, start, No of delete, new data)
    // print_r($fruits)
    
    ?>


    <?php
    //multi-dimention array


    $fruits = [
        array("Apple", "Strawberry"),
        "Banana",
        'Cherry',
    ];

    // echo $fruits[0][1]; //Strawberry
    // echo $fruits[1]; //Banana


    $food = [
        "fruits" => ["apple", "banana"],
        "meat" => ["chicken", "fish"],
        "vegetable" => ["cucumber", "carrot"],
    ];
    echo $food["vegetable"][0];
    ?>
    
</body>
</html>