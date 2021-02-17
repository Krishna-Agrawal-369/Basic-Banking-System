<?php
$servername="localhost";
$username="root";
$password="";
$dbname="indian_Bank";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect to the data base because of the error-------> ".mysqli_connect_error());
}
?>
