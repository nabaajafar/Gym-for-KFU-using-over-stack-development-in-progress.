<?php
$host="localhost";
$username="root";
$pwd='';
$db='gym';
$con=mysqli_connect($host,$username,$pwd,$db);

if(mysqli_connect_error($con)){
    echo mysqli_connect_error($con);
}
else{
   // echo "no error";
}
?>

