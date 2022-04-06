<?php
include_once 'config2.php';
$dkalab_firstname = $dkalab_lastname =  $dkalab_collname = $dkalab_username = $password = $confirm_password = "";
 $dkalab_firstname_err  = $dkalab_lastname_err = $dkalab_collname_err = $dkalab_username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
    if(empty(trim($_POST["dkalab_username"]))){
        $dkalab_username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["dkalab_username"]))){
        $dkalab_username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
       
        $sql1 = "SELECT dkalab_id FROM dkalab WHERE dkalab_username = ?";
        
        if($stmt1 = mysqli_prepare($link1, $sql1)){
          
            mysqli_stmt_bind_param($stmt, "s", $param_dkalab_username);
            
            
            $param_dkalab_username = trim($_POST["dkalab_username"]);
            
           
            if(mysqli_stmt_execute($stmt1)){
              mysqli_stmt_store_result($stmt1);
               if(mysqli_stmt_num_rows($stmt1) == 1){
                    $dkalab_username_err = "This username is already taken.";
                } else{
                    $dkalab_username = trim($_POST["dkalab_username"]);
                }
            } else{
                echo " Your Request Cannot be Procced.";
            }

            
            mysqli_stmt_close($stmt1);
        }
    }








    if(empty(trim($_POST["dkalab_firstname"]))){
        $dkalab_firstname_err = "Please enter a first Name.";

    } else{
        
        $sql1 = "SELECT dkalab_id FROM dkalab WHERE dkalab_firstname = ?";
        
        if($stmt1 = mysqli_prepare($link1, $sql1)){
           
            mysqli_stmt_bind_param($stmt1, "s", $param_dkalab_firstname);
            
         
            $param_dkalab_firstname = trim($_POST["dkalab_firstname"]);
            
          
            if(mysqli_stmt_execute($stmt1)){
            
                mysqli_stmt_store_result($stmt1);
                
            } else{
                echo " Your Request Cannot be Procced.";
            }

            
            mysqli_stmt_close($stmt1);
        }
    }


    if(empty(trim($_POST["dkalab_lastname"]))){
        $dkalab_firstname_err = "Please enter a last Name.";

    } else{
       
        $sql1 = "SELECT dkalab_id FROM dkalab WHERE dkalab_lastname = ?";
        
        if($stmt = mysqli_prepare($link1, $sql1)){
            
            mysqli_stmt_bind_param($stmt1, "s", $param_dkalab_lastname);
            
     
            $param_dkalab_lastname = trim($_POST["dkalab_lastname"]);
            
          
            if(mysqli_stmt_execute($stmt1)){
              
                mysqli_stmt_store_result($stmt1);
                
            } else{
                echo " Your Request Cannot be Procced.";
            }

          
            mysqli_stmt_close($stmt1);
        }
    }


    
    if(empty(trim($_POST["dkalab_collname"]))){
        $dkalab_collname_err = "Please enter a College Name.";

    } else{
       
        $sql1 = "SELECT dkalab_id FROM dkalab WHERE dkalab_collname = ?";
        
        if($stmt1 = mysqli_prepare($link1, $sql1)){
        
            mysqli_stmt_bind_param($stmt1, "s", $param_dkalab_collname);
          
            $param_dkalab_collname = trim($_POST["dkalab_collname"]);
            
           
            if(mysqli_stmt_execute($stmt1)){
            
                mysqli_stmt_store_result($stmt1);
                
            } else{
                echo " Your Request Cannot be Procced.";
            }

            
            mysqli_stmt_close($stmt1);
        }
    }









    
  
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
 
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    
    if(empty($dkalab_firstname_err) && empty($dkalab_lastname_err) && empty($dkalab_collname_err) &&  empty($dkalab_username_err) && empty($password_err) && empty($confirm_password_err)){
        
      
        $sql1 = "INSERT INTO dkalab (dkalab_firstname , dkalab_lastname ,dkalab_collname, dkalab_username, password) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link1, $sql1)){
    
            mysqli_stmt_bind_param($stmt1, "sssss",$param_dkalab_firstname, $param_dkalab_lastname, $param_dkalab_collname, $param_dkalab_username, $param_password);
      
            
            $param_dkalab_username = $dkalab_username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
          
            if(mysqli_stmt_execute($stmt1)){
             
                header("location: supcreate.php");
            } else{
                echo " Your Request Cannot be Procced.";
            }

           
            mysqli_stmt_close($stmt1);
        }
    }
 
    mysqli_close($link1);
}
?>

