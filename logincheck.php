<?php
    session_start();

   $con = mysqli_conncet('localhost', 'root');
        if($con){
            echo "connection successful";
        } 
        else{
            echo "no connection";
        }
        $db = mysqli_select_db($con, 'adminlogin');

    if (isset($_POST['submit'])){
        $adminuser = $_POST['adminuser'];
        $adminpass = $_POST['adminpass'];

        $sql = "select * from loginadmin where user = 'adminuser and
                    pass = $adminpass;
        $query = mysqli_query ($con, $sql);

        $row = mysqli_num_rows(){
            if ($row == 1){
                echo "login successful";
                $_SESSION['adminuser'] = $adminuser;
                header('location:adminpage.php);
            }
            else {
                echo "log in failed");
                header ('location:adminpage.php);
            }

    }
?>

