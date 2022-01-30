

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ireserve";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if (isset($_POST['submit'])) {
    $pdf=$_FILES['pdf']['name'];
    $type=$_FILES['pdf']['type'];
    $data=file_get_contents($_FILES['pdf']['tmp_name']);
    $stmt = $conn->prepare("insert into pdf_file values('',?,?,?)");
    $stmt->bind_param('sss', $pdf, $type, $data);
    $stmt->execute();
    

  }



  
 
?>
