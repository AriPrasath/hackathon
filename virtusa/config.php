<?php
// Here change variables with your own settings
$mysqlhost='localhost';
$mysqlusername='root';
$mysqlpassword=''; 
$mysqldb='virtusa';
$conn=mysqli_connect($mysqlhost,$mysqlusername,$mysqlpassword,$mysqldb);
if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
// }else{
//     return $this->conn;
// }
?>