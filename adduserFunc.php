
<?php
include ('connect.php');

$wusername=$_POST['wusername'];
$wpassword=$_POST['wpassword'];

$sql="SELECT * FROM wuser WHERE wusername='$wusername'";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$count = $result->num_rows;
}
if ($count > 0) {

    
    header('Location:http://localhost/RegisterWeb/adduser.php');
    exit();
}

$sql="INSERT INTO wuser (wusername , wpassword) 
VALUES('$wusername','$wpassword')";
$result = $conn->query($sql);
header('Location:http://localhost/RegisterWeb/login.php')
?>