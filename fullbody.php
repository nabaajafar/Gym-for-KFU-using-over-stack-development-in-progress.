
    <?php $title="Full Body";
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
    </head>
    <body>
        <div id="wrapper">

        <h1>Learn how to do Full Body exercise </h1><br>
        
        <iframe id="yt" width="560" height="315" src="https://www.youtube.com/embed/Tz9d7By2ytQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe><br><br>
         
        <h1>Benefit: </h1>
        <p id="p">A full body workout can build muscle mass faster than traditional weight lifting methods.<br> Full body workouts are fantastic because they target multiple muscles simultaneously in every exercise. <br>They are compound movements that do not work a muscle in isolation but work multiple muscles in the same exercise</p>

        </div>
<?php include("footerU.php");} ?>
