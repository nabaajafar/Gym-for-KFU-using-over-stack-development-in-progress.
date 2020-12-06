<?php  $title="MY ACCOUNT|KFU Gym";
session_start();
if(!isset($_SESSION['member_id'])){
    header("Location:error.php");
    exit();
}
else{
include("headerU.php");  

?>  
        <link rel="stylesheet" href="CSS01.css" TYPE="text/css"/>
  
        <div id="wrapper">
    
<!--        <div id="bodyPhoto">
            <img src="img/girl-gym.jpg" alt="girl gym">
        </div>-->

<div class="display-container">
 
  <img class="mySlides" src="e.jpeg" alt="girl02 gym" >
   <img class="mySlides" src="m.jpg" alt="girl03 gym" >
    <img class="mySlides" src="a.jpg" alt="girl03 gym" >


<!--  <button class="display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="display-right" onclick="plusDivs(1)">&#10095;</button>-->
</div>
        </div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>







        
        <div id="footer">
            
            <div id="col2">
                <h2>WHATS NEXT</h2>
                <P>Upcoming classes</P><br>
                <ul>
                    <li>
                    <dl>
                        <dt><a href="#"> Yoga</a></dt>
                        <dd>Ms.Amera 10AM - 11Am</dd>
                    </dl>
                    </li>
                    <li>
                    <dl>
                        <dt><a href="#">Zumba</a></dt>
                        <dd>Ms.Alaa 1PM - 2:30PM</dd>
                    </dl>
                    </li>
                    <li>
                    <dl>
                        <dt><a href="#"> Lunge</a></dt>
                        <dd>Ms.Noor 1:30PM - 2:15PM</dd>
                    </dl>
                    </li>
                </ul>
            </div>
            
            <div id="col3">
                <h2>personal training</h2>
                <p>Sign up today</p>
                <p>Pick your personal trainer now</p>
                <form id="coachForm">
                    <select name="coach">
                        <option value="D">Default</option>
                        <option value="Ab">Ms.Abeer</option>
                        <option value="RA">Ms.Rawan</option>
                        <option value="ZA">Ms.Zainab</option>
                        <option value="LA">Ms.Layla</option>
                    </select>
                    <br><br>
                     <button><strong>Confirm</strong></button>
                </form>
                
                
            </div>
                 <div id="col1">
                <img class="img" src="img/setting.png" alt="Setting">
                <h2><a href="update.php">Update Your Information</a></h2>
                <p>Make sure your information is correct</p>
                <p>You can share with us your comments to enhance our services</p>
                <form>
                    <textarea name="comment" cols="40" rows="6" placeholder="Your feedbacks are our inspiration"></textarea>
                    <button><strong>Send</strong></button>
                </form>
            </div>
        </div>
<hr/>
<?php include("footerU.php"); } ?> 
        
