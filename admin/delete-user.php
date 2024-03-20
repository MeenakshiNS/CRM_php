<?php include('./dbconnection.php');


$id=$_GET['id'];
$delete_query="DELETE FROM user WHERE id='$id'";
$delete_query_run=mysqli_query($conn,$delete_query);
if($delete_query_run){
    echo "user deleted by admin successfully";
    header('location:manage-users.php');
}else{
    echo "user not deleted";
    header('location:manage-users.php');

}


?>