<?php
include 'connection.php';

$log = $_POST['id']; 
// $dept = $_POST['dept'];
// $subject = $_POST['subject'];
// $description = $_POST['description'];
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

$image = $_FILES['pic']['name'];
    if ($image != "") {
        $filearray = pathinfo($_FILES['pic']['name']);
        // var_dump($filearray);exit();

        $file = rand();
        $file_ext = $filearray["extension"];




        $filenew = $file . "." . $file_ext;
        // var_dump($filenew);exit();
        move_uploaded_file($_FILES['pic']['tmp_name'], "../assets/img/" . $filenew);
        //var_dump($filenew);exit();
    }


   $sql= mysqli_query($con, "INSERT INTO add_rental_vehicles(name,price,type_of_vehicle,type_of_gear,color_of_vehicle,seats_of_vehicle,fuel_of_vehicle,location,RC,insurance,driving_licence,upload_photo)VALUES('$name','$price','$vehicle','$gear','$color','$seat','$fuel','$location','$RC','$insurance','$dl','$uploadphoto')");


if ($sql) {

    $myarray['message'] = 'added';

    // $myarray['login_id'] = $row['login_id'];

    // $myarray['type'] = $row['type'];

} else {

  $myarray['message'] = 'failed';
}
echo json_encode($myarray);

?>