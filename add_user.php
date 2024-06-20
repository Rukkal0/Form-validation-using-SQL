<?php
require("connection.php");
$studen_name=$_POST['name'];
$class=$_POST['class'];
$age=$_POST['age'];
$address=$_POST['address'];
$contact_number=$_POST['contact'];

$sql='INSERT INTO student (Name,Class,Age,Address,contact_number) VALUES (?,?,?,?,?)';
$stmt=$conn->prepare($sql);
$stmt->bind_param('siiss',$studen_name,$age,$class,$address,$contact_number);
if($stmt->execute()){
    header('Location: ../views/index.php');
}
else{
    $stmt->error;
}
?>