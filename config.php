<?php 
$username="root";
$password='';
$conn= mysqli_connect("localhost",$username,$password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "connected";
}

?>