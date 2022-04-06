<?php


require_once "config.php";
 
$coll_firstname = $coll_lastname =  $coll_collname = $col_username = $password = $confirm_password = "";
 $coll_firstname_err  = $coll_lastname_err = $coll_collname_err = $col_username_err = $password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  
    if(empty(trim($_POST["col_username"]))){
        $col_username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["col_username"]))){
        $col_username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
       
        $sql = "SELECT id FROM college WHERE col_username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
          
            mysqli_stmt_bind_param($stmt, "s", $param_col_username);
            
            
            $param_col_username = trim($_POST["col_username"]);
            
           
            if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
               if(mysqli_stmt_num_rows($stmt) == 1){
                    $col_username_err = "This username is already taken.";
                } else{
                    $col_username = trim($_POST["col_username"]);
                }
            } else{
                echo " Your Request cannot be procced, Please try again.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }








    if(empty(trim($_POST["coll_firstname"]))){
        $coll_firstname_err = "Please enter a first Name.";

    } else{
        
        $sql = "SELECT id FROM college WHERE coll_firstname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
           
            mysqli_stmt_bind_param($stmt, "s", $param_coll_firstname);
            
         
            $param_coll_firstname = trim($_POST["coll_firstname"]);
            
          
            if(mysqli_stmt_execute($stmt)){
            
                mysqli_stmt_store_result($stmt);
                
            } else{
                echo " Your Request cannot be procced, Please try again.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }


    if(empty(trim($_POST["coll_lastname"]))){
        $coll_firstname_err = "Please enter a last Name.";

    } else{
       
        $sql = "SELECT id FROM college WHERE coll_lastname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_coll_lastname);
            
     
            $param_coll_lastname = trim($_POST["coll_lastname"]);
            
          
            if(mysqli_stmt_execute($stmt)){
              
                mysqli_stmt_store_result($stmt);
                
            } else{
                echo " Your Request cannot be procced, Please try again.";
            }

          
            mysqli_stmt_close($stmt);
        }
    }


    
    if(empty(trim($_POST["coll_collname"]))){
        $coll_collname_err = "Please enter a College Name.";

    } else{
       
        $sql = "SELECT id FROM college WHERE coll_collname = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
        
            mysqli_stmt_bind_param($stmt, "s", $param_coll_collname);
          
            $param_coll_collname = trim($_POST["coll_collname"]);
            
           
            if(mysqli_stmt_execute($stmt)){
            
                mysqli_stmt_store_result($stmt);
                
            } else{
                echo " Your Request cannot be procced, Please try again.";
            }

            
            mysqli_stmt_close($stmt);
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
    
    
    if(empty($coll_firstname_err) && empty($coll_lastname_err) && empty($coll_collname_err) &&  empty($col_username_err) && empty($password_err) && empty($confirm_password_err)){
        
      
        $sql = "INSERT INTO college (coll_firstname , coll_lastname ,coll_collname, col_username, password) VALUES (?,?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
    
            mysqli_stmt_bind_param($stmt, "sssss",$param_coll_firstname, $param_coll_lastname, $param_coll_collname, $param_col_username, $param_password);
      
            
            $param_col_username = $col_username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
          
            if(mysqli_stmt_execute($stmt)){
             
                header("location: supcreate.php");
            } else{
                echo "Process Cannot be Proceed.";
            }

           
            mysqli_stmt_close($stmt);
        }
    }
 
    mysqli_close($link);
}
?>

