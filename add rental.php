<?php
include 'connection.php';
$name=$_POST['name'];
$price=$_POST['price'];
$vehicle=$_POST['type_of_vehicle'];
$gear=$_POST['type_of_gear'];
$color=$_POST['color_of_vehicle'];
$seat=$_POST['seats_of_vehicle'];
$fuel=$_POST['fuel_of_vehicle'];
$location=$_POST['location'];
$RC=$_POST['RC'];
$insurance = $_POST['insurance'];
$dl=$_POST['driving_licence'];
$uploadphoto=$_POST['upload_photo'];
$sql = mysqli_query($con, "INSERT INTO add_rental_vehicles(name,price,type_of_vehicle,type_of_gear,color_of_vehicle,seats_of_vehicle,fuel_of_vehicle,location,RC,insurance,driving_licence,upload_photo)VALUES('$name','$price','$vehicle','$gear','$color','$seat','$fuel','$location','$RC','$insurance','$dl','$uploadphoto')");

if ($sql)
{
   
    $myarray['message'] = 'successfully added';

} else {
    $myarray['message'] = 'failed';
}
echo json_encode($myarray);
?>