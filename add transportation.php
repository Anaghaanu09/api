<?php
include 'connection.php';
$vehicle=$_POST['vehicle'];
$location=$_POST['location'];
$RC  =$_POST['RC'];
$insurance = $_POST['insurance'];
$dl = $_POST['dl'];
$uploadphoto= $_POST['uploadphoto'];
$sql = mysqli_query($con, "INSERT INTO add_transportation_vehicle(vehicle, location,RC,insurance,dl,uploadphoto)VALUES('$vehicle','$location','$RC','$insurance','$dl','$uploadphoto')");

if ($sql)
{
   
    $myarray['message'] = 'added';

} else {
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>