<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="num01" placeholder="Number one"><br>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br>
        <input type="text" name="num02" placeholder="Number two"><br>
        <button type="submit">Calculate</button>
    </form>    

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"]);
            $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
            
            //Error handler
            $error = false;
            if(empty($num01) || empty($num02) || empty($operator)){
                echo "Fill in all field<br>";
                $error = true;
            }
            
            if(!is_numeric($num01) || !is_numeric($num02)){
                echo "can only work with number <br>";
                $error = true;
            }

            //Calculate if no error
            
            if(!$error){
                $value = 0;
                switch($operator){
                    case "add":
                        $value = $num01 + $num02;
                        break;
                    case "subtract":
                        $value =  $num01 - $num02;
                        break;
                    case "multiply":
                        $value =  $num01 * $num02;
                        break;
                    case "divide":
                        $value =  $num01 / $num02;
                        break;
                    default:
                        echo "Error at something <br>";
                        break;
                    }
                echo $value;
            }
        }
    ?>

</body>
</html>