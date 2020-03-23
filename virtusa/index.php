<?php

if(isset($_POST['Login']))
{
    include 'config.php';
    // $mysqlhost='local    host';
    // $mysqlusername='root';
    // $mysqlpassword=''; 
    // $mysqldb='virtusa';
    // $conn=mysqli_connect($mysqlhost,$mysqlusername,$mysqlpassword,$mysqldb);
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }else{
        
        $username=$_POST['accno'];
        $password=$_POST['pass'];
        $query="SELECT * From banklogin where accno='$username' and password='$password'";

        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['accno']=$username;
            // echo '<script language="javascript">';
            // echo 'swal("Successfully")';
            // echo '</script>';
            echo '<script type="text/javascript">'; 
            echo 'alert("success");'; 
            echo 'window.location.href = "home.php";';
            echo '</script>';
           
            // header('location:home.php');
            
        }else{
            // echo '<script language="javascript">';
            // echo 'alert("Fail")';
            // echo '</script>';
            echo '<script type="text/javascript">'; 
            echo 'alert("Failed");'; 
            echo 'window.location.href = "SignIn.php";';
            echo '</script>';
            // header('location:SignIn.php');
        }
    }
}
  

?>