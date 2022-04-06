<?php 
require_once "config.php";
 
$sup_firstname = $sup_lastname = $username = $created_at = $password =  "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, sup_firstname, sup_lastname, username, created_at, password FROM superadmin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){   
                    mysqli_stmt_bind_result($stmt, $id, $sup_firstname, $sup_lastname, $username, $created_at, $hashed_password );
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["passlogin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["sup_firstname"] = $sup_firstname ;
                            $_SESSION["sup_lastname"] = $sup_lastname ;
                            $_SESSION["time"] = $created_at;
                            $_SESSION["username"] = $username;  
                            $_SESSION["password"] = $password;                        
                            
                            header("location: supprofile.php");
                        } else{
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>

<?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

