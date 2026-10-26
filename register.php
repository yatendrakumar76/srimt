<?php 
include("connection.php");
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$data=mysqli_query($connect, "INSERT INTO blind (name,fname,mname,address,college,mobile,password)VALUES('$name','$fname','$mname','$address','$college','$mobile','$password')");
if($data){
    echo "registration successful";
}
else{
    echo "registration not successful";
}
 echo '
    <Script>
    window.location="../interview/dashboard.php";
    </Script>
    ';
?>
