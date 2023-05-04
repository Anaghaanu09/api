<?php
include 'connection.php';
$type  = $_POST['type'];
$first  = $_POST['name'];
$last  = $_POST['lname'];
$street  = $_POST['address'];
$city = $_POST['city'];
$Pin = $_POST['pin'];
$state= $_POST['state'];
$Phone = $_POST['phonenumber'];
$Email = $_POST['email'];
$Password = $_POST['password'];
mysqli_query($con,"INSERT INTO `login`(email,password,type)values('$Email','$Password','$type')");
$log = mysqli_insert_id($con);
$sql = mysqli_query($con, "INSERT INTO register(login_id,name, lname,address,city,pin,state,phonenumber,email,password)VALUES('$log','$first','$last','$street','$city','$Pin','$state','$Phone','$Email','$Password')");

if ($sql)
{

    $myarray['message'] = 'added';

} else {
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>