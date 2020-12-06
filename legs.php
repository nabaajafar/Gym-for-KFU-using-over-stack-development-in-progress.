<?php $title="Legs and Glutes";
session_start();
if(!isset($_SESSION['member_id'])){
    header("Location:error.php");
    exit();
}
else{
include("headerU.php");  ?>
        
        <style>
#wrapper{max-width: 1400px; margin: 0 auto}
  
    #p{margin-left:50px; font-size: 25px;color:blueviolet; background-color: gainsboro; display: inline-block; padding: 15px}
    #yt {margin-left:50px;}
body{background-image: url("oooo (2).png")}
td img{width: 30%; margin-top: 8px}
h1{margin-left:50px;color: midnightblue; background-color: gainsboro; display: inline-block }
 
        </style>
   
        <div id="wrapper">

        <h1>Learn how to do Legs exercise </h1><br>
        
        <iframe id="yt" width="560" height="315" src="https://www.youtube.com/embed/GPMgPYi8Zzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
        <!--<iframe id="yt" width="560" height="315" src="https://www.youtube.com/embed/Tz9d7By2ytQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>-->
         
        <h1>Benefit: </h1>
        <p id="p">Your glutes help control the movement of the pelvis, hips, legs, and torso.
The glutes help slow down the flexion of your hips which helps counteract the downward pull of gravity.
This helps prevent your lumbar spine from over-rounding forward.
Your glutes help to stabilize the pelvis and movement in the hip joint.</p>

        </div>
<?php include("footerU.php");} ?>