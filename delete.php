<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM std WHERE id= $id";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location:show.php");
    }
   
}
?>