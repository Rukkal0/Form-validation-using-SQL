<?php 
$server_name='localhost';
$username='root';
$password= '';
$database_name= 'crud_operation';

$conn= new mysqli($server_name,$username,$password,$database_name);
if ($conn->connect_error) {
    die('Error'. mysqli_connect_error());
}

?>