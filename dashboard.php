<?php 
include('connection.php');
session_start();
if(!isset($_SESSION['$userdata'])){
    header("Location:{$hostname}/dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
     <table border=2>
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>fname</th>
            <th>mname</th>
            <th>address</th>
            <th>college</th>
            <th>mobile</th>
        </tr>
        </thead>
        <tbody>
  
    <?php 
    $limit=3;
    if(isset($_GET['page'])){
    $page=$_GET['page'];

    }
    else{
$page=1;
    }
    $offset=($page-1)* $limit;
    $sql="SELECT * FROM blind ORDER BY id ASC LIMIT {$offset},{$limit}";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_array($result)){
        $id=$row["id"];
        $name=$row["name"];
        $fname=$row["fname"];
        $mname=$row["mname"];
        $address=$row["address"];
        $college=$row["college"];
        $mobile=$row["mobile"];
        echo "<tr>
        <th scope='row'>$id</th>
        <td>$name</td>
        <td>$fname</td>
        <td>$mname</td>
        <td>$address</td>
        <td>$college</td>
        <td>$mobile</td>
        <td><a href='update.php?id=".$row['id']. "' class='update'>update here</a></td>
        <td><a href='delete.php?id=". $row['id']."' class='delete'>delete here</a></td>

        </tr>";
    }
    ?>
    
    </tbody>
      </table><br><br>
      <?php 
    $sql1="SELECT * FROM blind";
    $result1=mysqli_query($connect,$sql1);
    if(mysqli_num_rows($result1)>0){
        $total_record=mysqli_num_rows($result1);
        $limit=3;
        $total_page=ceil($total_record/$limit);
        echo '         <ul class="paging">
';
if($page>1){
echo '<li><a href="dashboard.php?page='.($page-1).'">prev</a></li>';

}
        for($i=1;$i<=$total_page;$i++){
            if($i==$page){
                $active="active";

            }
            else{
                $active="";

            }
echo '<li  class="'.$active.'"><a href="dashboard.php?page='.$i.'">'.$i.'</a></li>
';
        }
        if($total_page> $page){
echo '<li><a href="dashboard.php?page='.($page+1).'">next</a></li>';

}
       

        echo '    </ul>
';

    }
    ?>
 

    
      <button><a href="index.html" class="new">New User ?</a></button>
            <button><a href="logout.php" class="logout">logout here</a></button>

      
   
</body>
</html>