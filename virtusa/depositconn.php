<?php
session_start();
if(isset($_POST['dept']))
{
    include 'config.php';
    if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
    }else{
        $accno=$_SESSION['accno'];
        $amount=$_POST['withdraw'];
        
        $timestamp = date('Y-m-d H:i:s');
        $query1="SELECT phone FROM userdetails WHERE accno=".$accno;
        $result1=mysqli_query($conn,$query1);
        // $row = mysqli_fetch_row($result1);
        $type="deposit";
        // echo "Hi";
        echo $accno." ".mysqli_fetch_row($result1)[0]."  ".$amount."  ".$type."  ".$timestamp;
        // $mob=var_dump(mysqli_fetch_row($result1)[0]);
    //     $mob = mysqli_fetch_row($result1);
    //     $mob = $mob[0];
    //     $query="INSERT INTO transactions(accno,amount,date1,mobileno,type1) VALUES('$accno','$amount','$timestamp','$mob','$type')";
    //     $result=mysqli_query($conn,$query);
    //     echo $result;
    //     if(($result)>0)
    //     {
    //         // echo "Success";
    //         // session_start();
    //         // $_SESSION['accno']=$username;
    //         echo '<script type="text/javascript">'; 
    //         echo 'alert("success");'; 
    //         echo 'window.location.href = "deposit.php";';
    //         echo '</script>';
    //         // header('location:deposit.php');
    //     }else{
    //         echo '<script type="text/javascript">'; 
    //         echo 'alert("Failed");'; 
    //         echo 'window.location.href = "deposit.php";';
    //         echo '</script>';
    //         // header('location:deposit.php');
    //     }
    // }
}
?>
