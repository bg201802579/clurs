<html>
    <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <title>CLURS Super Admin </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  


video {
    object-fit: cover;
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
  }
  
  html, body {
    height: 100%;
  }
  html {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 150%;
    line-height: 1.4;
  }
  body {
    margin: 0;
  }
  
  .viewport-header {
    position: relative;
    height: 100vh;
  
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
 .fill{
   background-color: #e4dfdf;
   padding: 30px 50px;
   border: 2px solid 444791;
 }




 input{
   padding: 10px 3px;
  transition: padding 1s;
 }

 input:hover{
  padding: 10px 40px;
 }



 .regBut{
   margin-top: 10px;
   padding: 5px 7px;
 }



 .invalid-feedback{
     font-size:13px;
     color : red;

 }
</style>



<body>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                <?php include './includes/supresetpassword.php'?>
                <header class="viewport-header">
                <div class="fill">
                        <div class="formsPos">
                        <h3><?php  echo htmlspecialchars($_SESSION["username"]) ?> Reset Password</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group">
                <label>New Password</label><br>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                <br><span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label><br>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <br><span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group"><br>
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link ml-2" href="supprofile.php">Cancel</a>
            </div>
        </form>
                        </div>

                    </div>
                   
            </header>
                   
                       

            
   
</body>
</html>