<?php 

$title="LogIn";
require ("headerL.php");
include 'connect.php';
if(isset($_POST['LOGIN']))
    
{    
    $idm = $_POST['id']; 
    $pwd = ($_POST['pass']);   

    $query = "SELECT * FROM member WHERE member_id=$idm AND member_pass='$pwd'";
    $result = mysqli_query($con, $query);
    
    if($result)
    {
if(mysqli_num_rows($result)==1)//if true 1
{
    $row= mysqli_fetch_array($result);
    $db_act=$row['member_act'];
    if($db_act==0){
        session_start();
                $_SESSION['member_id']=$idm;
                
                //profile member
               // $state=1;
                header("Location: HTML01.php?status=valid");
                //header('Location: LOGIN.php?status=valid');
            }
            else{
                echo '<script>alert("You have to re-new your participation")</script>';
            }
            
    }
    else{
        echo '<script>alert("Your Password or ID not correct")</script>';
    }
    }
    else if($idm=="adm"&&$pwd=="123"){
        header("Location:Admin/Adminpage.php");
    }
    else if($idm==""||$pwd==""){
        echo '<script>alert("Fill all the felid")</script>';
    }
    else{
        echo '<script>alert("Are you sure you have an account?")</script>';
    }
        
 }
?>  
<style> 
 #wrapper{margin: 0 auto; max-width: 1400px}
 #content{background-color: white ; padding: 30px ; width: 230px ; margin-left: 320px;display: inline-block;border: 2px solid black;}
 body{background-image: url("oooo (2).png")}

#infor h3{text-align: center}
#infor{ transform: translate(15%, 150%);background-color: white; border: 2px solid black;display: inline-block; padding: 4px; } 
p{width: 350px;font-size: 18px;}
 #co{width:100px;transform: translate(190%,100%); position: absolute}
  .error{
background-color: red;
      color: white;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }
       </style>

              <div id="wrapper">
                    
         <div id="content">
             <h2 style="text-align: center"><em><strong>Log In</strong></em></h2>
             <form  method="POST" action="LOGIN.php" name="myForm" onsubmit="return validate();">
        <table cellspacing="10px">
            <tbod>
                
            <tr>
                
                <td ><label for="id">ID:</label></td> 
                <td ></td>
                
            </tr>
            <tr>
              
              <td ><input type="text" name="id" id="idd" placeholder="Type Your ID" style="width: 200px" height="12px "/><span class="error" id="usid">complete the blank</span><br></td> 
              <td ></td>
            </tr>
            <tr>
              
                <td > <label for="pass">Password:</label>   </td> 
                <td ></td>
            </tr>
            <tr>  <td ><input id="pass" type="password" name="pass" placeholder="Type Your Password"style="width: 200px" height="12px "/> <span class="error" id="uspass">complete the blank</span> <br></td> <td ></td></tr>
            <tr>  
        
                <td  ><a href="forgit.php" style="text-decoration: none ;margin-left: 115px ;font-size: 11px"><strong>Forget Password?</strong></a></td>
                <td ></td>
            </tr>
            <tr>  
                <td > <button name="LOGIN" method="POST" action="LOGIN.php" style="width: 200px;background-color: #cc99ff;color: white;height: 30px">LOGIN</button> <br></td>
                <td ></td>
            </tr>

            <tr> <td colspan="2"></td></tr>
           <tr>
               <td colspan="2"></td>
            </tr>
            <tr> <td colspan="2"></td></tr>
            <tr> <td colspan="2"></td></tr>
          
            <tr> <td style="text-align: center;font-size: 12px">  Or Sign Up Using >> </td>
                
            </tr>
            <tr><td align="center">  <a href="Register.php" style="text-decoration: none; font-size: 13px;"><strong> Sign Up</strong></a></td> </tr>
          </table> </form> 
         </div>
           <img  id="co" src="login.png" alt="photo"/>
        <div id="infor">
            <h3>Welcome Back!</h3>   
            <p><strong>To keep connected with us please login with your personal information.</strong></p>
        </div>
           
        
        </div>
        <script>
        
     function validate(){
            
             //var vaild=true;
             var error=0;
             var ids= document.forms["myForm"]["id"];
             var passe= document.forms["myForm"]["pass"];
             var uspasss=document.getElementById("uspass");
             var usidd=document.getElementById("usid");
          
     
        if(ids.value==="" || passe.value===""){
            usidd.style.visibility="visible";
            uspasss.style.visibility="visible";
            error=1;
                //vaild=false;
        }
        else{
            useridd.style.visibility="hidden";
            uspasss.style.visibility="hidden";
            error=0;
           // vaild=true;
        }
        if(ids.value===""){
            ids.style.borderColor="red";
             useridd.style.visibility="visible";
             error=1;
            // vaild=false;
        } else{
             useridd.style.visibility="hidden";
            ids.style.borderColor="blue";
            error=0;
           // vaild=true;
        }
        if(passe.value===""){
            passe.style.borderColor="red";
            uspasss.style.visibility="visible";
            error=1;
            // vaild=false;
        }
         else{
            passe.style.borderColor="blue";
            uspasss.style.visibility="hidden";
            error=0;
           // vaild=true;
        }
        if (error==1){
            return false;
        }else{
            return true;
        }
        
            }
        </script>
        <?php include ("footerU.php"); ?>