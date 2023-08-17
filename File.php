<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File store</h1>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="userProfile">
        <br>
        <input type="submit" value="Save" name="storeProfile">

    </form>
    <?php
        if(isset($_POST["storeProfile"]))
        {
            $imgName=$_FILES["userProfile"]["name"];
            $tmpName=$_FILES["userProfile"]["tmp_name"];
            $target_file="image/".$imgName;
            move_uploaded_file($tmpName,$target_file);
            echo "success uploading....";
        }
    ?>
</body>
</html>