<?php
include 'connection.php';
$sql = mysqli_query($con, "SELECT * FROM add_transportation_vehicle where vehicle ='taxi'	");
$list= array();
if ($sql->num_rows>0){
    while ($row = mysqli_fetch_assoc($sql)){
        $myarray['message'] = 'message';
        $myarray['vehicle'] =$row['vehicle'];
        $myarray['location'] =$row['location'];
        $myarray['RC'] =$row['RC'];
        $myarray['insurance'] =$row['insurance'];
        $myarray['dl'] =$row['dl'];
        $myarray['uploadphoto'] =$row['uploadphoto'];
       

        array_push($list,$myarray);
    }
}
else{
    $myarray['message']= 'failed';
}
echo json_encode($list);