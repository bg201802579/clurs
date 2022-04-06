<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    
    <style>

     body{
        background-image: url("./media/1wmsu.png");
        background-color: #333026;
        height: 102%; 
        background-position: center; 
        background-repeat: no-repeat;
        background-size: cover;
        margin-top: 50px;
        margin-left: 120px; 
        font-size: 28px; 
        padding: 0px 10px;
     }   
      
  .fill{
   background-color: #e4dfdf;
   padding: 30px 10px;
   margin-right: 50%;
   border: 2px solid #444791;
   
   z-index: 1;
 }


 .no{
     padding: 13px 20px;
     background-color: #050a30;
     color: white;
 }
 .no:hover{
    padding: 13px 20px;
     background-color: #454b6c;
     color: white;
 }


 .yes{

    padding: 20px 20px;
     background-color: green;
     color: white;
     border: none;
 }

 .yes:hover{
     padding: 20px 20px;
     background-color: red;
     color: white;
 }

    </style>
</head>
<body>
    <div class="fill">
        <div class="container-fluid">
           <?php include './includes/supdeletecoladmin.php'?>
                
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Are you sure you want to delete this Admin?</p> <br>
                            <p>
                                <input type="submit" class="yes" value="Yes" >   <a href="supoverview.php" class="no">No</a>
                                
                            </p>
                        </div>
                    </form>
            
                  
        </div>
    </div>
</body>
</html>