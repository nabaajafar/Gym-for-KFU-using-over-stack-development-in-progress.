<!DOCTYPE html>
<?php 
$title="Admin Page";
include("headerA.php"); ?>

        <style>
     #wrapper{margin: 0 auto; max-width: 1400px}
    .but {width: 250px; height: 150px; background-color: gainsboro;font-size: 17px; text-align: center; font-family: cursive}
    #content{ margin-left: 280px; display: inline-block; margin-top: 10px }
    body{background-image: url("../oooo (2).png")}
legend img{width: 7%}
legend{font-size: 25px}
td img{width: 30%; margin-top: 8px}
h1{margin-left:290px;color: midnightblue; background-color: gainsboro; display: inline-block }

        </style>
  
        <div id="wrapper">

        <h1>Welcome ! Have a nice day </h1>
        <fieldset id="content">
            <legend><img src="Admin.png" alt="admin imge"/><strong> Admin services</strong></legend>
            <form>
                
            <table>
                <tr>
                    <td><button class="but" formaction="search.php"><strong>View students registration</strong><br/><img src="veiw.png" alt="veiw imge"/></button></td>
                       <td><button class="but" formaction="../Register.php"><strong> Add students</strong><br/><img src="add.png" alt="add imge"/></button></td>
                       <td><button class="but" formaction="Advertising.php"> <strong>Add Advertising</strong><br/><img src="adve.png" alt="add imge"/></button></td>
                </tr>
                <tr>
<td><button class="but" formaction="Coach.php"><strong> Add/View coaches</strong><br/><img src="coi.png" alt="coach imge"/></button></td>
       <td><button class="but" formaction="activity.php"><strong>Add new activity</strong><br/><img src="activity.png" alt="add imge"/></button></td>
       <td><button class="but" formaction="GYM.php"><strong>Update membership</strong><br/><img src="upd.png" alt="update imge"/></button></td>                     
                </tr>
            </table>
            </form>

        </fieldset>

        </div>
 <?php include("footer.php"); ?>
