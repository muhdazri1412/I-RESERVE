<?php

$con= mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");



$name = mysqli_real_escape_string($con, $_REQUEST['name']);
$capacity = mysqli_real_escape_string($con, $_REQUEST['capacity']);
$area = mysqli_real_escape_string($con, $_REQUEST['area']);
$rate = mysqli_real_escape_string($con, $_REQUEST['rate']);
$facility = mysqli_real_escape_string($con, $_REQUEST['facility']);
//Attempt insert query execution

$sql = "INSERT INTO venue (name,capacity,area,rate,facility) VALUES 
('$name','$capacity','$area','$rate','$facility' )";
//Execute query
if(mysqli_query($con, $sql))
{
    echo "alert('New record created successfully')";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);
?>