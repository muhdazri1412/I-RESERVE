<style>
            table, th, td {
                
    border: 2px solid black;
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
}

<?php
$con = mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");
$sql = "SELECT * FROM FORM";
$result = $con->query($sql);

header('Content-type: application/vnd-ms-excel');
$filename="user_data.xls";
header("Content-Disposition:attachment;filename=\"$filename\"");

echo "<table><tr><th>User_fname</th><th>User_lname</th><th>User_email</th><th>User_matric</th><th>User_phone</th><th>User_advisor</th><th>User_address</th><th>User_org</th><th>Prog_name</th><th>Prog_type</th><th>part_tot</th><th>Prog_cat</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" .$row['User_fname']. "</td>";
    echo "<td>" .$row['User_lname']. "</td>";
    echo "<td>" .$row['User_email']. "</td>";
    echo "<td>" .$row['User_matric']. "</td>";
    echo "<td>" .$row['User_phone']. "</td>";
    echo "<td>" .$row['User_advisor']. "</td>";
    echo "<td>" .$row['User_address']. "</td>";
    echo "<td>" .$row['User_org']. "</td>";
    echo "<td>" .$row['Prog_name']. "</td>";
    echo "<td>" .$row['Prog_type']. "</td>";
    echo "<td>" .$row['part_tot']. "</td>";
    echo "<td>" .$row['Prog_cat']. "</td>";
    
   
}
echo "</table>";
?>