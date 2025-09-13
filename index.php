<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/formHandler.php" method="post">
        <label for="firstname">First name:</label>
        <input id="firstname" type="text" name="firstname" placeholder="Firstname"><br>
        <label for="lastname">Last name: </label>
        <input type="text" id="lastname" name="lastname" placeholder="Lastname"><br>

        <label for="favoritepet">Favorite Pet?</label>
        <select name="favouritepet" id="favouritepet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Birst</option>
        </select><br>
        <button type="submit" name="submit">Submit</button>

    </form>

</body>
</html>