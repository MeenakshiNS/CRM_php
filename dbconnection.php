<?php

$conn=mysqli_connect("localhost","root","",'smallcrmnew');

if($conn){
    echo "connected successfully";
}else{
    echo "error in connction".mysqli_error( $conn);
}

?>