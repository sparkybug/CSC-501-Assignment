<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Example of PHP $_REQUEST variable</title>
</head>
<body>
    <?php 
        if(isset($_REQUEST["name"])) {
            echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
        }
    ?>

    <form method="post" action="request.php">
        <label for="inputName">Name:</label>
        <input type="text" name="name" id="inputName">
        <input type="submit" value="submit">
    </form>
</body>
</html>