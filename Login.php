<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Email <input type="email" name="userEmail" >
        <br>
        Password <input type="password" name="userPassword" >
        <br>
        <input type="submit" value="Log in "name="loginbtn1">

    </form>
    <?php
        $email="admin@gmail.com";
        $password="paing";
        $hashPassword=password_hash($password,PASSWORD_BCRYPT);
        if(isset($_POST['loginbtn1']))
        {
            $userEmail=$_POST["userEmail"];
            $userPassword=$_POST["userPassword"];   
            if($email == $userEmail && password_verify($userPassword,$hashPassword))
            {
                echo "Login Success";
            }
            else{
                echo"Login fail Try again.....";
            }
        }
    ?>
</body>
</html>