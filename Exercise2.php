<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <form action="Exercise2.php" method="get">
        color :   <input type="text" name="color">
    plural noun:  <input type="text" name="pluralNoun">
    Celebrity:    <input type="text" name="celebrity">
    <input type="submit">
    </form>
    <br>
    <?php
        $color=$_GET["color"];
        $pluralNoun=$_GET["pluralNoun"];
        $Celebrity=$_GET["celebrity"];
        echo "Roses are $color";
        echo "$pluralNoun are blue";
        echo "I Love $Celebrity";
    ?>
</body>
</html>