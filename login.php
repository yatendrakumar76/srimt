<?php 
include('dashboard.php');
include('connection.php');
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$query=mysqli_query($connect,"SELECT * FROM blind WHERE mobile='$mobile' && password='$password'");
if(mysqli_num_rows($query)>0){
    $userdata=mysqli_fetch_array($query);
    $_SESSION['$userdata']='$userdata';
    echo '
    <script>
    window.location="../interview/dashboard.php";
    </script>
    ';
}
?>