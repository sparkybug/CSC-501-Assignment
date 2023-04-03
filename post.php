<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of PHP POST method</title>
</head>
<body>
    <?php 
        if(isset($_POST["name"])) {
            echo "<p>Hi, ". $_POST["name"] . "</p>";
        }
    ?>

    <form method="post" action="post.php">
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>