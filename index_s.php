<?php
session_start();
 
if(isset($_SESSION["passlogin"]) && $_SESSION["passlogin"] === true){
    header("location: supprofile.php");
    exit;
}
?>

<html>
    <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_s.css">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <title>SupAdmin Login Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>


</head>

    <body>
        <?php include './includes/superadminlogin.php'?>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                
                <header class="viewport-header">
                <div class="fill">
                        <div class="formsPos">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method ="POST">
                           <p class="txtReg">CLURS Super Administrator</p>
                         
                           <div class="form-group">
                                    <label>Username</label><br>
                                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                    
                                    <span class="invalid-feedback"><br><?php echo $username_err; ?></span>
                                </div>    
                            <div class="form-group">
                                <label>Password</label><br>
                                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                <span class="invalid-feedback"><br><?php echo $password_err; ?></span>
                            </div>
                            <p class="invalid-feedback"> <?php echo $login_err?></p>
                                <div class="form-group">
                                    <button class="regBut" type="submit" class="btn btn-primary" value="Login">Login</button>
                                </div>
            
                        </form>
                        </div>

                    </div>
                   
            </header>
                   
                       

            
    </body>



    <script>

            





    </script>
</html>