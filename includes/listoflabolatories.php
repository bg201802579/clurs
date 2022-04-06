<?php
                   $collegess = $_SESSION["collename"];
                    require_once "config.php";
                    $sql = "SELECT * FROM crsunitde where cre_name like '$collegess%' ;";
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
                                           
                                            echo '<a class="update" href="update_coll_settings.php?crs_id='. $row['crs_id'] .'"  title="Update" data-toggle="tooltip"><i class="fa fa-wrench" style="font-size:24px"></i> </a>';
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
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    mysqli_close($link);
                    ?>