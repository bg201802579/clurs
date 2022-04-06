<html>
    <head><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <link rel="stylesheet" href="css/style2.css">
    <script src="jquery-2.1.4.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Wmsu homepage</title>
</head>

    <body>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                <header class="viewport-header">
                    <h1>
                        About Us
                        
                    </h1>
                  
                    <div class="content">
                        <div id="imgPos">
                        <img class="logo" src="./media/wmsulogo.png" alt="wmsulogo"></div>
                         <div class="topnav" id="myTopnav">
                            <a onclick="document.getElementById('id01').style.display='block'" >Login</a>
                            <a href="Register.php">Register</a>
                            <a href="AboutUs.php" class="active">About Us</a>
                            
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                <i class="fa fa-bars"></i>
                             </a>
                    </div> </div>
            </header>
                        
                        <div id="id01" class="modal">
            
                        <form class="modal-content animate" action="/action_page.php" method="post">
                        
                            <div class="imgcontainer">
                                
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img src="./media/5397570.png" alt="Avatar" class="avatar">
                            </div>

                            <div class="container">
                            <h2 class="portal">Login Portal</h2>
                            <label for="uname"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                                
                            <button type="submit">Login</button>
                            <label class="create">
                                <a href="register.php">Create an Account</a>
                            </label>
                            </div>

                            <div class="containers" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </form>
                        </div>
                       

            
    </body>
    <footer>
        <div class="fotr">
       
      <p class="fttxt">The Computer Labolatory Utilization Reserve System  or the CLURS is made Posible by Supreme Dev
        of institue of Computer Studies to Serve only for the crimson students to help them to get in 
        thouchec in technology need with thier studies.
        <br><br> <a href="" target="_blank">How to use?</a>
      </p>
       
    </div>
        </div>
    </footer>


    <script>

            


        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }



    </script>
</html>