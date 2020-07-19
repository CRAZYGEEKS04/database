<?php
$servername='localhost';
$username='root';
$password='Hrithik@2002';
$dbname = "email";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>