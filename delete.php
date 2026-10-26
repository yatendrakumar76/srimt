<?php 
include('connection.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE from blind where id='$id'";
    $result=mysqli_query($connect,$query);
    if($result){
        echo " delete successful";

    }
    else{
        echo "not deleted";
    }
    echo '
    <Script>
    window.location="../interview/dashboard.php";
    </Script>
    ';
}
?>