<?php


session_start();
 
if(!isset($_SESSION["passlogin"]) || $_SESSION["passlogin"] !== true){
    header("location: index_s.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/css_supoverview.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>SupAdmin Overview List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</head>

<body>



<div class="sidenav">
    
<a href="supoverview.php"><i class="fa fa-home" style="font-size:24px"></i> <br><br> Home</a>
    <a href="supcreatelab.php"><i class="fa fa-plus-circle" style="font-size:24px"></i><br> <br>College Labolatory</a>
    <a href="supcreate.php"><i class='fas fa-dice-d20' style="font-size:24px"></i><br> <br>Create Admins</a>
    <a href="supassignpc.php"><i class="fa fa-usb" style="font-size:24px"></i><br> <br>Assign Pc Unit</a>
    <a href="supprofile.php"><i class="fa fa-vcard" style="font-size:24px"></i><br> <br>My Profile</a>
    <a href="logout.php"><i class="fa fa-mail-forward" style="font-size:24px"></i><br> <br>Log out</a>

</div>
<div class="header">
  <p class="headtxt"><i class="fa fa-home" id="icons"></i> CLURS System Overview</p>
</div>

<div class="main">
 
<br><br><button class="accordion"><i class="fa fa-mortar-board" style="font-size:24px"></i> List of College Labolatories</button>
<div class="panel">
  
                    <?php
                    require_once "config.php";
                    
                    $sql = "SELECT * FROM crsunitde;";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Course Name</th>";
                                        echo "<th>Room Destination</th>";
                                        echo "<th>Unit Number</th>";
                                        echo "<th>Time Created</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" .'<i class="fa fa-mortar-board" style="font-size:24px"></i>'. $row['cre_name'] . "</td>";
                                        echo "<td>" . $row['crs_roomnumb'] . "</td>";
                                        echo "<td>" . $row['unit_num'] . "</td>";
                                        echo "<td>" . $row['time_created'] . "</td>";
                                        echo "<td>";
                                           
                                            echo '<a class="update" href="update.php?crs_id='. $row['crs_id'] .'"  title="Update" data-toggle="tooltip"><i class="fa fa-wrench" style="font-size:24px"></i> </a>';
                                            echo '<a href="delete.php?crs_id='. $row['crs_id'] .'" title="Delete"  data-toggle="tooltip"><i class="fa fa-times-circle-o" style="font-size:24px"></i></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo " Your Request cannot be procced, Please try again.";
                    }
                    mysqli_close($link);
                    ?>
             

</div>
<hr>
<button class="accordion"><i class="fa fa-user-circle-o" style="font-size:24px"></i>  List of College Administrators</button>
<div class="panel">

<?php 
include_once 'config2.php';
$sqli = "SELECT * FROM  college;";
$resultColl = mysqli_query($link1, $sqli);
$resultCollCheck = mysqli_num_rows($resultColl);
                    if($resultCollCheck > 0){
                      echo '<table class="table table-bordered table-striped">';
                      echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Username</th>";
                                        echo "<th>College</th>";
                                        echo "<th>First Name</th>";
                                        echo "<th>Last Name</th>";
                                        echo "<th>Date Created</th>";
                                        echo "<th>Actions</th>";
                                    echo "</tr>";
                                echo "</thead><br>";
                                echo "<tbody>";
                          while($row = mysqli_fetch_assoc($resultColl)){ 
                            echo "<tr>";
                            echo "<td>" .'<i class="fa fa-user-circle-o" style="font-size:24px"></i> '. $row['col_username'] . "</td>";
                            echo "<td>" . $row['coll_collname'] . "</td>";
                            echo "<td>" . $row['coll_firstname'] . "</td>";
                            echo "<td>" . $row['coll_lastname'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>";
                            echo '<a href="deletecoll.php?id='. $row['id'] .'" title="Deactivate"  data-toggle="tooltip"><i class="fa fa-times-circle-o" style="font-size:24px"></i></a>';
                                       
                               echo "</td>";
                        echo "</tr>";}
                        echo "</tbody>"; 
                        echo "</table>";
                    }else{
                        echo "<p style='font-size='12px''> No College Admin Existing to Clurs,  <a href='supcreate.php'>Create an College Admin </a></p> " ;
                    }

?>





</div>
<hr>
<button class="accordion"><i class="fa fa-desktop" style="font-size:24px"></i> Lab Administrator</button>
<div class="panel">
  <?php 
include_once 'config3.php';
$sqlis = "SELECT * FROM  dkalab;";
$resultColls = mysqli_query($link2, $sqlis);
$resultCollChecks = mysqli_num_rows($resultColls);
                    if($resultCollChecks > 0){
                      echo '<table class="table table-bordered table-striped">';
                      echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Username</th>";
                                        echo "<th>College</th>";
                                        echo "<th>First Name</th>";
                                        echo "<th>Last Name</th>";
                                        echo "<th>Date Created</th>";
                                        echo "<th>Actions</th>";
                                    echo "</tr>";
                                echo "</thead><br>";
                                echo "<tbody>";
                          while($row = mysqli_fetch_assoc($resultColls)){ 
                            echo "<tr>";
                            echo "<td>" .'<i class="fa fa-desktop" style="font-size:24px"></i> '. $row['dkalab_username'] . "</td>";
                            echo "<td>" . $row['dkalab_collname'] . "</td>";
                            echo "<td>" . $row['dkalab_firstname'] . "</td>";
                            echo "<td>" . $row['dkalab_lastname'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>";
                            echo '<a href="deletelabadmin.php?id='. $row['id'] .'" title="Deactivate"  data-toggle="tooltip"><i class="fa fa-times-circle-o" style="font-size:24px"></i></a>';
                                       
                               echo "</td>";
                        echo "</tr>";}
                        echo "</tbody>"; 
                        echo "</table>";
                    }else{
                        echo "<p style='font-size='12px''> No Labolatory Admin Existing to Clurs</p> " ;
                    }

?>



<br><br><br>
</div>
   

   
</body>
<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });





        
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
    </script>
</html> 
