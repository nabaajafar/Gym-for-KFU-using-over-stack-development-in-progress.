
        <?php $title="exersie";
session_start();
if(!isset($_SESSION['member_id'])){
    header("Location:error.php");
    exit();
}
else{
include("headerU.php") ?>
        <style>
            #wrapper{max-width: 1400px;margin: 0 auto}
            #t{margin-left: 325px; margin-right: 325px;margin-bottom: 20px}
    .but1 {width: 750px; height: 200px; background-image: url("Admin/b1.jpeg") }
    .but2 {width: 750px; height: 200px; background-image: url("Admin/b2.jpeg") }
    .but3 {width: 750px; height: 200px; background-image: url("Admin/b3.jpeg") }
    .but4 {width: 750px; height: 200px; background-image: url("Admin/b4.jpeg") }
    body{background-image: url("Admin/Picture1.png")}
table+a{text-decoration: none; color: indigo;margin-left: 550px;font-size: 20px}
 
        </style>
  
        <div id="wrapper">

        
        <table id="t">
            
                <tr>
                    <td><a href="cardio.php"><button class="but1"> </button></a></td>
                </tr>
                <td><a href="legs.php"><button class="but2"> </button></a></td>
                </tr>
                <td><a href="fullbody.php"><button class="but3"> </button></a></td>
                </tr>
                <td><a href="upper body.php"><button class="but4"> </button></a></td>
                </tr>
                
                </table>

        </div>
<?php include("footerU.php");} ?>