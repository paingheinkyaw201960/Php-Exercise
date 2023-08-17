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
<body>
    <?php
        $errorName=$errorAddress=$errorEmail=$errorPhone="";
        $name=$email=$address=$phone="";
        if(isset($_POST["submitbtn"]))
        {
            if($_POST["name"]==null||$_POST["name"]==""||empty($_POST["name"]))
            {
                $errorName="Please Enter Name";
            }else{
                $name=$_POST["name"];
            }
            if($_POST["email"]==null||$_POST["email"]==""||empty($_POST["email"]))
            {
                $errorEmail="Please Enter Email";
            }else{
                $email=$_POST["email"];
            }
            if($_POST["phone"]==null||$_POST["phone"]==""||empty($_POST["phone"]))
            {
                $errorPhone="Please Enter Phone Number";
            }else{
                $phone=$_POST["phone"];
            }
            if($_POST["address"]==null||$_POST["address"]==""||empty($_POST["address"]))
            {
                $errorAddress="Please Enter Address.";
            }else{
                $address=$_POST["address"];
            }
            if($name!=""&&$phone!=""&&$address!=""&&$email!="")
            {
                echo $name."<br>";
                echo $email."<br>";
                echo $address."<br>";
                echo $phone."<br>";

            }
        }
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow ">
                <form method="POST">
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" placeholder="Enter Your Name.">
                        <span class="text-danger"><?php echo $errorName?></span>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" name="email" id="" placeholder="Enter Your Email.">
                        <span class="text-danger"><?php echo $errorEmail?></span>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" name="phone" id="" placeholder="Eg. 09xxxxxxxx">
                        <span class="text-danger"><?php echo $errorPhone?></span>
                    </div>
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <input type="text" name="address" id="" placeholder="Enter Your Address.">
                        <span class="text-danger"><?php echo $errorAddress?></span>
                    </div>
                    <div class="my-3 px-5">
                        <input type="submit" class="bg-primary text-white "value="Submit" name="submitbtn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>