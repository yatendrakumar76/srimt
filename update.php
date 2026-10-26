<?php 
include('connection.php');
if(!isset($_GET['id']));
$id=$_GET['id'];


$sql="SELECT * FROM blind where id='$id'";
    $result=mysqli_query($connect,$sql);
    

    $row=mysqli_fetch_assoc($result);

?>
<?php 
if(isset($_POST['update_student'])){
    if(isset($_GET['id_new'])){
        $idnew=$_GET['id_new'];
    }
    $name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$college=$_POST['college'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$result1= "UPDATE blind  set name='$name',fname='$fname',mname='$mname',address='$address',college='$college',mobile='$mobile',password='$password' where id=$idnew";
$result2=mysqli_query($connect,$result1);
if($result2){
    echo "update successfull";
}
else{
    echo "not update";
}
echo '
    <Script>
    window.location="../interview/dashboard.php";
    </Script>
    ';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php?id_new=<?php echo $id;?>" method="post">
        <label>name</label><br>
        <input type="text" name="name" placeholder="enter your name" value="<?php echo $row['name']?>"><br>
        <label>father name</label><br>
        <input type="text" name=" fname" placeholder="enter your father name" value="<?php echo $row['fname']?>"><br>
        <label> mother name</label><br>
        <input type="text" name=" mname" placeholder="enter your mother name" value="<?php echo $row['mname']?>"><br>
        <label>address</label><br>
        <input type="text" name="address" placeholder="enter your address" value="<?php echo $row['address']?>"><br>
        <label>college</label><br>
        <input type="text" name="college" placeholder="enter your college name" value="<?php echo $row['college']?>"><br>
        <label>mobile</label><br>
        <input type="number" name="mobile" placeholder="enter mobile number" value="<?php echo $row['mobile']?>"><br>
<label>password</label><br>
        <input type="password" name="password" placeholder="enter password" value="<?php echo $row['password']?>"><br><br><br>
        <input type="submit"  name="update_student" value="update data">
    </form>

</body>

</html>