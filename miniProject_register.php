<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
        <div class="col-3">
            <div class="text-center">
                <a href="miniProject_login.php">
                    <button class="btn bg-success text-white mb-3" style="width:200px">Log In</button>
                </a>
            </div>
            <div class="text-center">
                <a href="miniProject_register.php">
                    <button class="btn bg-primary text-white mb-3" style="width:200px">Register</button>
                </a>
            </div>
            <div class="text-center">
                <a href="miniProject_logout.php">
                    <button class="btn bg-danger text-white mb-3" style="width:200px">Log Out</button>
                </a>
            </div>
        </div>
        <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        Register
                        <form method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                             <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirmpassword" class="form-control" >
                            </div>
                            <button type="submit" class="bg-dark text-white float-end" name="register">Register</button>
                        </form>
                    </div>  
                </div>
        </div>
        </div>
    </div>
    <?Php
    session_start();
        function checkStrongPassword($password)
        {
            $upperStatus=false;
            $lowerStatus=false;
            $numberStatus=false;
            $specialStatus=false;

            if(preg_match("/[A-Z]/",$password))
            {
                $upperStatus=true;
            }
            if(preg_match("/[a-z]/",$password))
            {
                $lowerStatus=true;
            }
            if(preg_match("/[0-9]/",$password))
            {
                $numberStatus=true;
            }
            if(preg_match("/[!@#$%*^&]/",$password))
            {
                $specialStatus=true;
            }
            if($upperStatus&&$lowerStatus&&$numberStatus&&$specialStatus)
            {
               return true;
            }
            else{
                return false;
            }
            
           
        }
        

        if(isset($_POST["register"]))
        {
            $username=$_POST["name"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $confirmPassword=$_POST["confirmpassword"];
            if($username!=""&&$email!=""){
                if( strlen($password)>=6&& strlen($confirmPassword)>=6)
                {
                        if($password==$confirmPassword)
                        {   
                           if( checkStrongPassword($password))
                           {

                            $_SESSION["email"]=$email;
                            $_SESSION["password"]=password_hash($password,PASSWORD_BCRYPT);
                            echo "Register Success".$_SESSION["email"];
                           }
                           else{
                            echo "Your password weak!";
                           }
                        }else{
                            echo"Password not same Try Again";
                        }
                }
                    else
                    {
                        echo"Password must be greater than 6";
                    }
            }
        }
    ?>
</body>
</html>