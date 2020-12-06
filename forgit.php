 <?php $title="Forgot password";
 include("headerL.php") ?> 
        <style> 
#content{background-color: beige ; padding: 30px ; width: 300px ; margin-left: 450px;display: inline-block;border: 2px solid black;}
#wrapper{margin: 0 auto; max-width: 1400px}
 body{background-image: url("oooo (2).png")}
button{border-radius: 12px;margin-left:15px;width: 250px;height: 50px;background-color: mediumvioletred;color: white}
input{margin-left :-230px;width: 210px;}
h2,p{text-align: center}
.error{background-color: red;color: white;font-style: italic;visibility: hidden; text-align: center}

             
        </style>
  <?php
        use PHPMailer\PHPMailer\PHPMailer;
        require_once 'PHPMailer/PHPMailer.php';
        require_once 'PHPMailer/SMTP.php';
        require_once 'PHPMailer/Exception.php';
        include("connect.php");
        
        if(isset($_POST['forgit'])){
            $email= $_POST['paa'];
            $query = "SELECT * FROM member WHERE member_email='$email'";
            $result = mysqli_query($con,$query);
                        if($result){
                            $mail = new PHPMailer;
            $mail->IsSMTP();                            // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = 'gym.kfu@gmail.com';          // SMTP username
            $mail->Password = 'gymgym@kfu'; // SMTP password
            $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port = /*'587';*/'465';                          // TCP port to connect to

            $mail->setFrom($email , 'Reset The Password');
            $mail->addAddress( $email );   // Add a recipient


            $mail->IsHTML(true);  // Set email format to HTML
            $bodyContent = '<h1>Dear, Member</h1>';
            $bodyContent .= '<h3>welcome in KFU GYM website You can change your password through this link /n http://localhost/GYM_KFU/Updateemail.php</h3>';

            $mail->Subject = 'Email from KFU GYM suppuort system';
            $mail->Body    = $bodyContent;
            $mail->send();
            header("Location: reset.php");
            exit();
        }
        else{
            echo '<script>alert("Are you sure you have an account?")</script>';
        }
        
                        }
        
 ?>
        <div id="wrapper">
 
            <div id="content">
                <form method="POST" action="forgit.php" onsubmit="return validate()">
            <table cellspacing="10px">
                <tr>
                <td colspan="2"> <img src="pass.png" alt="" style="width: 80px;height: 80px;margin-left: 100px"/></td>
                </tr>
                <tr><td colspan="2"><h2>Forgot Password?</h2></td></tr>
                <tr><td colspan="2"><p><em><strong>You can reset your password here.</strong></em></p></td></tr>
                <tr><td><img src="em.png" alt="" style="width: 25px;height: 25px;margin-left: 20px"/></td> <td><input type="email" name="paa" placeholder="Enter Your Email " id="passi"/></td></tr>
                <tr><td> <span class="error" id="err">**Please Enter Your Email!!** </span></td></tr>
                <tr><td><a href="reset.php"><button name="forgit"  method="POST" action="forgit.php"><strong>Reset Password</strong></button></a></td></tr>  
               
            </table></form>
            </div>
  
            </div>
        <script>
        function validate(){
             var error=0;
            var pass=document.getElementById("passi");
            var err=document.getElementById("err");
            
             if(pass.value===""){
            pass.style.borderColor="red";
            err.style.visibility="visible";
            error=1;
        }
        else{
            err.style.visibility="hidden";
            error=0;     
        }
         if (error==1){
            return false;
        }else{
            return true;
        }
            }
            </script>
<?php include("footerU.php") ?> 
