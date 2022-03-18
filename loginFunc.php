<?php
include ('connect.php');
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$sql="SELECT * FROM wuser WHERE wusername='$n1' AND wpassword='$n2'";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$count = $result->num_rows;
}
if ($count > 0) {
    session_start();
    $_SESSION['usernam']= $n1;
 header('Location:http://localhost/RegisterWeb/index.php');
}

else{
    header('Location:http://localhost/RegisterWeb/login.php');
}


?>