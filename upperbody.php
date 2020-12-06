
        <?php $title="Upper Body";
        session_start();
if(!isset($_SESSION['member_id'])){
    header("Location:error.php");
    exit();
}
else{
include("headerU.php"); ?> 
        
        <style>
#wrapper{max-width: 1400px; margin: 0 auto}
    #content{margin: 0 auto;  display: inline-block; margin-top: 10px }
    #p{margin-left:50px; font-size: 25px;color:blueviolet; background-color: gainsboro; display: inline-block; padding: 15px}
    #yt {margin-left:50px;}
body{background-image: url("oooo (2).png")}
td img{width: 30%; margin-top: 8px}
h1{margin-left:50px;color: midnightblue; background-color: gainsboro; display: inline-block }
 
        </style>
  
        <div id="wrapper">

        <h1>Learn how to do Upper Body exercise </h1><br>
        
        <iframe id="yt" width="560" height="315" src="https://www.youtube.com/embed/acp77RhVzMM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>

        <h1>Benefit: </h1>
        <p id="p">If you haven’t gotten enough aerobic exercise, you may use your entire aerobic capacity while walking up a flight of stairs.<br>You'll realize this when you get to the top and feel out of breath.<br> But if you're fit, you'll have no problem because your aerobic capacity is greater.<br> That’s just one example of how you can benefit from cardio exercise.</p>

        </div>
<?php include("footerU.php");} ?>