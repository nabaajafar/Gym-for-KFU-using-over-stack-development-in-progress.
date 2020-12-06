 <?php $title="About US";
 session_start();
 //echo $_SESSION['member_id'];
 if(isset($_SESSION['member_id'])){
    include("headerU.php");
}
else{
include("headerL.php");} ?>
        <style>
  #wrapper{margin: 0 auto; max-width: 1400px}
 body{background-image: url("oooo (2).png")}
.about{margin-left: 10px;max-width: 1350px; height: 450px}   
       h1{color: red;}
       p{ width: 500px}
       #ww{background-color: ghostwhite; display: inline-block; padding: 100px;margin-left: 320px}
 
        </style>
   
       <DIV id="wrapper"> 
                        
        <div id="ww">
         <h1>Who We Are?</h1>
         <p>KFU GYM was established in 2018 as a sports club owned and operated by King Faisal University. Our gyms are designed with you in mind,from the way the gym is laid out, to the range of equipment available. From low-cost flexible memberships to quality gym equipment and exercise with trainers. So, there is a lot of reasons make KFU GYM favourites GYM for many students. The most important reason is to help students who want to spend their free time practising sports.</p>
         <h1>Our Goals:</h1>
         <ul>   
             <li>  Reduce worry and effort from the students.</li>
             <li>Enhance student's communication skills and fill their time</li>
             <li>Reduce some common disease like obesity and so on... </li> 
         </ul>
      
        </div>
            </div>
 <?php include("footerU.php"); ?>   
      
