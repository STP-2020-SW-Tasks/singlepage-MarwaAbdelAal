<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$first = $_POST["first"];
$second = $_POST["second"]; 

$conn = new mysqli('localhost','root','','stp');

if ($conn){
    echo "connected";
}

$sql = "INSERT INTO participents (name,email,phone,1st preference,2nd preference) VALUES ('Marwa','ma@ma','123','iot','android')";

if($sql){
    echo "Done data inserted";
}else{
    echo "error in inserting";
}

?>