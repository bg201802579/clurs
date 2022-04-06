<!DOCTYPE html>
<html lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #050A30;
}
.wrapper{
  display: flex;
}
.wrapper .static-txt{
  color: #fff;
  font-size: 60px;
  font-weight: 400;
}
.wrapper .dynamic-txts{
  margin-left: 15px;
  height: 90px;
  line-height: 90px;
  overflow: hidden;
}
.dynamic-txts li{
  list-style: none;
  color: #FC6D6D;
  font-size: 60px;
  font-weight: 500;
  position: relative;
  top: 0;
  animation: slide 8s steps(4) infinite;
}
@keyframes slide {
  100%{
    top: -360px;
  }
}
.dynamic-txts li span{
  position: relative;
  margin: 5px 0;
  line-height: 90px;
}
.dynamic-txts li span::after{
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background: #050A30;
  border-left: 2px solid #FC6D6D;
  animation: typing 2s steps(13) infinite;
  animation-iteration-count: 2.8;
}
@keyframes typing {
  60%, 40%{
    left: calc(100% + 30px);
  }
  100%{
    left: 0;
  }
}



@media only screen and (min-device-width:225px) and (max-device-width: 980px ){

    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #050A30;
}
.wrapper{
  display: flex;
}
.wrapper .static-txt{
  color: #fff;
  margin-left: 60px;
  font-size: 55px;
  font-weight: 400;
}
.wrapper .dynamic-txts{
  margin-left: 15px;
  height: 90px;
  line-height: 90px;
  overflow: hidden;
}
.dynamic-txts li{
  list-style: none;
  color: #FC6D6D;
  font-size: 50px;
  font-weight: 500;
  position: relative;
  top: 0;
  animation: slide 8s steps(4) infinite;
}
@keyframes slide {
  100%{
    top: -360px;
  }
}
.dynamic-txts li span{
  position: relative;
  margin: 5px 0;
  line-height: 90px;
}
.dynamic-txts li span::after{
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background: #050A30;
  border-left: 2px solid #FC6D6D;
  animation: typing 2s steps(13) infinite;
  animation-iteration-count: 2.8;
}
@keyframes typing {
  60%, 40%{
    left: calc(100% + 30px);
  }
  100%{
    left: 0;
  }
}




}

</style>



  <meta charset="UTF-8">
  <title>WMSU CLURS </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <div class="static-txt">Wmsu</div>
    <ul class="dynamic-txts">
      <li><span>Computer Labolatory </span></li>
      <li><span> Ulization Reserve System . . .</span></li>
      <li><span>Super Admin</span></li>
      
    </ul>
    <li>
  </div>

  <script>
    setTimeout(function(){
       window.location.href = 'index_s.php';
    }, 5000);
    </script>f
</body>
</html>