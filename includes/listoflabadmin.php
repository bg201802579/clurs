<?php 
include_once 'config3.php';
$collegess = $_SESSION["collename"];
$sqlis = "SELECT * FROM  dkalab where dkalab_collname like '$collegess%';";
$resultColls = mysqli_query($link2, $sqlis);
$resultCollChecks = mysqli_num_rows($resultColls);
                    if($resultCollChecks > 0 ){
                      echo '<table class="table table-bordered table-striped">';
                      echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
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
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" .'<i class="fa fa-desktop" style="font-size:24px"></i> '. $row['dkalab_username'] . "</td>";
                            echo "<td>" . $row['dkalab_collname'] . "</td>";
                            echo "<td>" . $row['dkalab_firstname'] . "</td>";
                            echo "<td>" . $row['dkalab_lastname'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>";
                            echo '<a href="deletelabadmin_coll.php?id='. $row['id'] .'" title="Deactivate"  data-toggle="tooltip"><i class="fa fa-times-circle-o" style="font-size:24px"></i></a>';
                                       
                               echo "</td>";
                        echo "</tr>";}
                        echo "</tbody>"; 
                        echo "</table>";
                    }else{
                        echo "<p style='font-size='12px''> No Labolatory Admin Existing to Clurs </p> " ;
                    }

?>

