<?php include_once 'config.php'?>
<html>
    <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style1.css"><title>Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                <header class="viewport-header">
                    <h1>
                        
                       Register
                    </h1>
                  
                    <div class="content">
                        
                         <div class="topnav" id="myTopnav">
                           
                            <a href="index.php">Home</a>
                            
                           
                    </div> 
                </div>
            </header>
                    <div class="fill">
                    <div id="imgPos">
                        <img class="logo" src="./media/wmsulogo.png" alt="wmsulogo"></div>
                        
                        <div class="formsPos">
                        <form action="profile.php" method ="POST">
                            <p class="txtReg"> Create an Account</h1></p>
                          <label for="fname">First Name  <br>
                          <input type="text" name="fname" placeholder="Jhon"></label><br>
                          <label for="lname">Last Name <br>
                          <input type="text" name="lname" placeholder="Doe"></label><br>
                          <select class="optn" name="coll_collname" class="form-control <?php echo (!empty($coll_collname_err)) ? 'is-invalid' : ''; ?> value="<?php echo $coll_collname;?>">
        
                         <option value=''>Select Collage Course</option>
                                    <?php

                                    
                                    $sql = mysqli_query($link, "SELECT cre_name FROM crsunitde ORDER BY crs_id DESC");
                                    while ($row = mysqli_fetch_array($sql)) {
                                        $crs_id = $row['crs_id'];
                                        $cre_name = $row['cre_name'];
                                        ?>
                                        <option value = "<?php echo $cre_name; ?>"><?php echo $cre_name; ?></option>
                                    <?php } ?>
                            
                            </select> <br>
                          <label for="uid">User Name<br>
                          <input type="text" name="uid" placeholder="jhondoe123"></label><br>
                          <label for="Email">E-mail <br>
                          <input type="text" name="Email" placeholder="youremail@email.com"></label><br>
                          <label for="psd">Password<br>
                          <input type="password" name="psd" placeholder="Password"></label><br>
                          <button class="regBut">Register</button>
                        </form>
                        </div>

                    </div>
                       

            
    </body>



    <script>

            





    </script>
</html>