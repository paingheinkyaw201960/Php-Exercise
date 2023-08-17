<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ArrayEx.php" method="post">
        Apple:<input type="checkbox" name="fruits[]" value="apple"><br>
        Orange:<input type="checkbox" name="fruits[]" value="orange"><br>
        Pear:<input type="checkbox" name="fruits[]" value="pear"><br>
        <input type="submit">
        
    </form>
    <?php
       $fruit= $_POST["fruits"];
        echo $fruit[2];
    ?>
</body>
</html>