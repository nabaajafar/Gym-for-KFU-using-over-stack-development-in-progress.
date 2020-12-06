<?php

include("connect.php");?>
<?php
         $result="";
        if (isset($_POST['submit'])) {
    $idu=$_POST['idu']; 
    if(isset($_POST['userNamech'])){
    $name=$_POST['userName'];   
    $query="UPDATE member SET member_name='$name'where member_id=$idu";
    $result = mysqli_query($con, $query) ;
    }
    if(isset($_POST['Passwordch'])){
    $pass=$_POST['Password'];   
    $query="UPDATE member SET member_pass=$pass where member_id=$idu";
    $result = mysqli_query($con, $query) ;
    }
    if(isset($_POST['Emailch'])){
    $email=$_POST['Email'];  
    $query="UPDATE member SET member_email='$email' where member_id=$idu";
    $result = mysqli_query($con, $query) ;
    }
    if(isset($_POST['Phonech'])){
     $phone=$_POST['Phone']; 
    $query="UPDATE member SET member_phone=$phone where member_id=$idu";
    $result = mysqli_query($con, $query) ;
    }
       if($result) {
           $_SESSION['idl'] = $idu;
         
	    $message="Update information complete.";  
       } 
        }
            ?>
<head>
    <title>Update</title>
</head>

        <style>
        #wrapper{margin: 0 auto; max-width: 1400px}
        #content{margin: 0 auto; margin-left:300px; margin-left:300px;display: inline-block; margin-top: 10px;background-color: white; border: 2px solid black; }
        body{background-image: url("oooo (2).png")}
        button{margin-left: 260px; margin-top: 5px ; width: 150px ;background-color:#cc99ff; border: 2px solid white;height: 30px;border: 2px solid black}
       footer { display: inline-block;margin-top: 50px;margin-bottom: 10px;}
       #end{width: 1400px;height:250px }
       legend{font-size: 22px;text-align: center;border: 2px solid black;background-color: white}
       legend img{width: 3%}
       td {width: 25%;}
   #contect{position:absolute;transform: translate(20%, -100%);}
 .img{width: 50px; }
 .foot1{float:left;margin-right:250px;}
  #con{float: left;transform: translate(130%,-190%)}
  .n{width:27px}
 h5{text-align: right;color: red}
    .error{
      
      color:red;
      font-style: italic;
      font-size: 12px;
      visibility: hidden;

      
  }
  header img{width: 1400px;height:250px }
  #nav{background-color:gray;width: 1400px;font-family:fantasy;}
#nav a{text-decoration: none;color: black;float: left}
#nav ul{list-style: none;display: table-cell;height: 90px;vertical-align: middle;}
#nav li{margin-left:80px;border-right: 3px solid;padding-right: 5px;border-right: 0; font-size: 25px; float: left}
        </style>
        
  
        <div id="wrapper">
                    <header>
        
        <img  src="img/logo (2).png" alt="kfu"/>   
                <div id="nav">
                <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="LOGIN.php">Log in</a></li>
                </ul>
        </div>
        </header>
            <form action="" method="post">
        <fieldset id="content">
            <legend><img src="update.png" alt=""/><em><strong> Update Your Profile</strong></em></legend>

  <table >
      <tr>
          <td rowspan="6"><img src="sp1.png" alt=""  style="width: 100px ;height: 100px ; max-height: 100px ; max-width: 100px"/></td>
          <td><label for="idu">Enter your ID</label></td>
          <td><input type="text" name="idu" id="iduu"  /> <span class="error" id="YUU">Error!!</span></td>
      </tr>
      <tr>
          <td><label for="userName">UserName</label></td>
          <td><input type="text" name="userName" id="usern"  /></td>
          <td><input type="checkbox" name="userNamech" value="user" id="user" /> <span class="error" id="us">complete the blank</span></td>
      </tr>
      <tr>
                 <td><label for="Password">Password</label></td>
          <td><input type="Password" name="Password" id="paa"/></td> 
          <td>  <input type="checkbox" name="Passwordch" value="pass" id="pass"/>  <span class="error" id="pa">complete the blank</span></td>
         
      </tr>
      <tr > <td><label for="Email">Email</label></td>
          <td><input type="Email" name="Email" id="em"/></td>
          <td> <input type="checkbox" name="Emailch" value="em" id="email"/>    <span class="error" id="emu">complete the blank</span></td>
       
      </tr>
      <tr> <td><label for="Phone">Phone</label></td>
          <td><input type="text" name="Phone" id="ph"/></td>
          <td> <input type="checkbox" name="Phone" value="Phonech" id="phone"/>  <span class="error" id="phh">complete the blank</span></td>
         
      </tr>
      
  </table>
    
   <button name="submit" onclick=" return validate()">Update</button> 
   
   
   <h5><strong>Only mark the information you want to change.</strong></h5>
   
   
        </fieldset>
   <footer>
             <img  id="end" src="img/logo (3).png" alt="kfu"/>          
            <div id="contect">
                 <table class="foot1">
                     <tr><td><h3>Connect us:</h3></td></tr>
                     <tr>  <td > <img class="n" src="location.png" alt=""/>King Faisal University 1st,Al Hofuf  </td> </tr>
                     <tr>     <td> <img class="n" src="call.png" alt=""/>+966553378483</td></tr>
                     <tr> <td><img class="n" src="email.png" alt=""/>KFUGYM@gmail.com</td></tr>
                 </table>
             <div id="con">
            <img class="img" src="img/facebook.png" alt="Our Facebooke Account"/>Malk Fasial
            <img class="img" src="img/instagram.png" alt="Our Instagram Account"/>kfugym
            <img class="img" src="img/twitter.png" alt="Our Twitter Account"/>@kfugym

            </div>
            </div>
        </footer>
            </form>
        </div>
        <script>
            
           function validate(){
               var error=0;
               
               var ide=document.getElementById("iduu");
               var id=document.getElementById("YUU");
               var user=document.getElementById("usern");
                var us=document.getElementById("user");
                var usery= document.getElementById("us");
                var pass=document.getElementById("paa");
                var passw=document.getElementById("pass");
                var passy=document.getElementById("pa");
                var em=document.getElementById("em");
                var email=document.getElementById("email");
                var emy=document.getElementById("emu");
                var ph=document.getElementById("ph");
                var phone=document.getElementById("phone");
                var phy=document.getElementById("phh");
            
              if (us.checked==false && email.checked ==false && phone.checked ==false && passw.checked ==false) {
              alert("please select at least one");
              error=1;
          }
          else{
              error=0;
          }
          if(ide.value===""){
                 id.style.visibility="visible";
                   error=1;
               }else{
                   id.style.visibility="hidden";
                   error=0; 
            }
           
                 
                 if (us.checked&&user.value===""){
               usery.style.visibility="visible";
                   error=1;
               }else{
                   usery.style.visibility="hidden";
                   error=0;
               }
               
                 
     if (passw.checked&&pass.value===""){
                passy.style.visibility="visible";
                   error=1;
               }else{
                   passy.style.visibility="hidden";
                   error=0;
               }
            if (email.checked&&em.value===""){
                emy.style.visibility="visible";
                   error=1;
               }else{
                   emy.style.visibility="hidden";
                   error=0;
               }
                if (phone.checked&&ph.value===""){
                phy.style.visibility="visible";
                   error=1;
               }else{
                   phy.style.visibility="hidden";
                   error=0;
               }
              
        if (error){
            return false;
        }else{
            return true;
        }
          

            }
        </script>    
    </body>
</html>

