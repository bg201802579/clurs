<html>
    <head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./media/wmsulogo.png" type="imageIcon" >
    <title>Register Page</title>
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
</style>






</head>

    <body>
                <video src="./media/bg1.mp4" autoplay loop playsinline muted></video>
                
                <header class="viewport-header">
                <div class="fill">
                        <div class="formsPos">
                        <form action="profile.php" method ="POST">
                           <p class="txtReg">CLURS Super Administrator</h1></p>
                         
                          <label for="Email">E-mail <br>
                          <input type="text" name="Email" placeholder="youremail@email.com"  ></label><br>
                          <label for="psd">Password<br>
                          <input type="password" name="psd" placeholder="Password"></label><br>
                          <button class="regBut">Register</button>
                        </form>
                        </div>

                    </div>
                   
            </header>
                   
                       

            
    </body>



    <script>

            





    </script>
</html>