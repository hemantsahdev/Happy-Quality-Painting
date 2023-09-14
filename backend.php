<?php
// set connection variable
$server = "localhost";
$username = "root";
$password = "";

// create database connection
$con = mysqli_connect($server , $username, $password );

// check for connection success
if(!$con){
  die("connection failed".mysqli_connect_error());
}
if(isset($_POST['button'])){
// collect post variables
$type_of_property = $_POST['type-of-property'];
$type_of_area = $_POST['type-of-area'];
$type_of_surface = $_POST['type-of-surface'];
$time= $_POST['time'];

$sql1 =" INSERT INTO `happy quality painting`.`quotation` ( `type-of-property`,  `type-of-surface`, `time`) VALUES ( '$type_of_property',  '$type_of_surface', '$time', );";
$query_run1=mysqli_query($con,$sql1)

foreach ($type_of_area as $area) {
  $sql2 = " INSERT INTO `happy quality painting`.`quotation`(`type-of-area`) VALUES ($`area`)"
  $query_run2=mysqli_query($con, $sql2)
}


}


// closing the database connection
$con->close();
 ?>
