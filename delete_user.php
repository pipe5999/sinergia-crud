<?php
include("connection.php");
$con = connection();

$id=$_GET['id'];

$sql = " DELETE FROM users WHERE id ='$id'";

if($query){
    Header("Location: index.php");
}else{

}


?>