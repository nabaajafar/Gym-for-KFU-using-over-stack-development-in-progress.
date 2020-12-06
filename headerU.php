<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title><?php echo $title;?> </title>
        <style>
             body{margin: 0 auto; max-width: 1400px}
       header>img{width: 1400px;height:250px }

li:hover {background: gainsboro;cursor: pointer;}

#nav{background-color: gray;width: 1400px;font-family:fantasy;margin-bottom: 55px}
#nav a{text-decoration: none;color: black;}
#nav ul{list-style: none;display: table-cell;height: 80px;vertical-align:middle;}
#nav li{margin-right:80px;font-size: 25px;float: left;}
#nav ul ul>li{font-size: 19px;font-family:sans-serif;}
ul li ul {background-color: ghostwhite;visibility: hidden;opacity: 0;position: absolute; display: inline-block }

ul li:hover > ul,
ul li:focus-within > ul,
ul li ul:hover {visibility: visible;opacity: 1;}

ul li ul>li {clear: both;width: 80%;}

       </style>
     
    </head>
    <body >
                     <header>
                <img  src="img/logo (2).png" alt="kfu"/>   
                <div id="nav">
                <ul>
                    
                    <li><a href="#"><img  src="page.png" alt="" style="width: 40px"/></a>
                       
                    <ul>
                        
                       <li><a href="Update.php">Update</a></li>
                       <li><a href="logout.php">Log Out</a></li>
                    </ul>
                        </li>
                        
                        <li><a href="HTML01.php">Home</a></li>
                <li><a href="exersie.php">Activity</a></li>
                <li><a href="about.php">About us</a></li>
                </ul>
        </div>
                     </header>