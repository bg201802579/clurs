<?php
session_start();
 
if(isset($_SESSION["CollegeLogin"]) && $_SESSION["CollegeLogin"] === true){
    header("location: collprofile.php");
    exit;
}
 ?>

<html>
    <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/index_c.css">
    <title>Log-in College Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






</head>

    <body>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                
                <header class="viewport-header">
                <div class="fill">
                        <div class="formsPos">
                           <?php include './includes/collegelabadminlogin.php'?>
                          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                          <p class="txtReg">CLURS College Administrator</h1></p>
                                <div class="form-group">
                                    <label>Username</label><br>
                                    <input type="text" name="col_username" class="form-control <?php echo (!empty($col_username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $col_username; ?>">
                                    
                                    <br><span class="invalid-feedback"><?php echo $col_username_err; ?></span>
                                </div>    
                                <div class="form-group">
                                    <label>Password</label><br>
                                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                   <br><span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                                <p class="invalid-feedback"> <?php echo $login_err?></p>
                                <div class="form-group"><br>
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