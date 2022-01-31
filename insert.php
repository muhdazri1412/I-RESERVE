
<html>
<head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0 ">
        <title>I-RESERVE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

        @media(max-width: 459px){
        .container .content .category{
          flex-direction: column;
        }
    }


    </style>

    </head>
<BODY class="bookingform">
    <section class = "header">

        <h1 id="bookingform">Booking Form</h1>

        <nav>
            
            <a href="mainpage.html"><img src="img/IIUM.png"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.html">Item List</a></li>
                        <li><a href="kulliyah.html">Kuliyyah</a></li>
                        <li><a href=>Mahallah</a></li>
                        <li><a href=>Stadd</a></li>
                        <li><a  href=>Contact us</a></li>
                </ul>
            </div>     
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>



    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>




<div align="center">
<?php

$con= mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");


$User_fname = mysqli_real_escape_string($con, $_REQUEST['User_fname']);
$User_lname = mysqli_real_escape_string($con, $_REQUEST['User_lname']);
$User_email = mysqli_real_escape_string($con, $_REQUEST['User_email']);
$User_matric = mysqli_real_escape_string($con, $_REQUEST['User_matric']);
$User_phone = mysqli_real_escape_string($con, $_REQUEST['User_phone']);
$User_advisor = mysqli_real_escape_string($con, $_REQUEST['User_advisor']);
$User_address = mysqli_real_escape_string($con, $_REQUEST['User_address']);
$User_org = mysqli_real_escape_string($con, $_REQUEST['User_org']);
$Prog_name = mysqli_real_escape_string($con, $_REQUEST['Prog_name']);
$Prog_type = mysqli_real_escape_string($con, $_REQUEST['Prog_type']);
$part_tot = mysqli_real_escape_string($con, $_REQUEST['part_tot']);
$Prog_cat = mysqli_real_escape_string($con, $_REQUEST['Prog_cat']);
//Attempt insert query execution

$sql = "INSERT INTO form (User_fname,User_lname,User_email,User_matric,User_phone,User_advisor,User_address,User_org,Prog_name,Prog_type,part_tot,Prog_cat) VALUES 
('$User_fname','$User_lname','$User_email','$User_matric','$User_phone','$User_advisor','$User_address','$User_org','$Prog_name','$Prog_type','$part_tot','$Prog_cat' )";
//Execute query
if(mysqli_query($con, $sql))
{
    echo "<br>";
    echo "<br>";
    echo "Booking form submitted successfully. ";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>
  
</div>
</BODY>
</html>