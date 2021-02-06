<?php
session_start();

$con = mysqli_connect('localhost', 'root');
     if($con){
         echo "connection successful";
     } 
     else{
         echo "no connection";
     }

?>

<!DOCTYPE  html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php ?>
    
</head>
<body>
<header>
        <div class="container center-div shadow">
            <div class ="heading text-center mb-5 text-uppercase text-white"> 
            ADMIN LOGIN PAGE </div>
            <div class="container row d-flex flex-row-justify-content-center">
                <div class= "admin-form shadow p-2 ">
                    <form action= "logincheck.php" method ="POST">
                        <div class+="form-group">
                            <label>Email ID</label>
                            <input type="text" name="adminuser" value= "" 
                            class="form-control" autocomplete="off">
                        </div>
                        <div class= "form-group">
                            <label>Password</label>
                            <input type="text" name="adminpass" value= ""
                            class="form-control" autocomplete="off">
                        </div>
                        <input type="submit" class="btn btn-success" name="">
                    </form>
                </div>

        </div>

</header>

</body>
</hmtl>