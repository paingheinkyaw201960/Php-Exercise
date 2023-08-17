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
                    <div class="alert alert-success" role="alert">
                    <b>Logout Success</b>
                    </div>
                    
                    </div>  
                </div>
        </div>
        </div>
    </div>
    <?php
        session_start();
        session_destroy();
    ?>
</body>
</html>