<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
    </style>
</head>
<body> <h2>Sign Up</h2>
        <p>sup admin </p>
        <?php include './includes/supprime.php'?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        
                <label>Firts Name</label>
                <input type="text" name="sup_firstname" <?php echo (!empty($sup_firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sup_firstname; ?>">
                <span class="invalid-feedback"><?php echo $sup_firstname_err; ?></span>
        
                    <br><label>Last name</label>
                <input type="text" name="sup_lastname" <?php echo (!empty($sup_lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sup_lastname; ?>">
                <span class="invalid-feedback"><?php echo $sup_lastname_err; ?></span>
           
                    <br> <label>Username</label>
                <input type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
           
                    <br><label>Password</label>
                <input type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
           
                    <br><label>Confirm Password</label>
                <input type="password" name="confirm_password" <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            
                    <br><input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div> <br><br>
           <a href="index_s.php">Login here</a>
        </form>
 
</body>
</html>