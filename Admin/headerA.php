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
#nav{background-color:  slategrey;max-width: 1400px;font-family:fantasy;margin-bottom: 55px}
#nav a{text-decoration: none;color: black;float: left}
#nav ul{list-style: none;display: table-cell;height: 90px;vertical-align: middle;}
#nav li{margin-left:80px;border-right: 3px solid;padding-right: 5px;border-right: 0; font-size: 25px; float: left}

header img{width: 1400px;height:250px }

        </style>
    </head>
    <body>
              <header>
                <img  src="../img/logo (2).png" alt="kfu"/>   
                <div id="nav">
                <ul>
<!--                <li><a href="../Homepage.php">Home</a></li>-->
                <li><a href="Adminpage.php">Admin page</a></li>
                <li><a href="../Homepage.php">Log out</a></li>
                </ul>
        </div>
        </header>