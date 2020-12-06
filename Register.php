
       <?php $title="Register Page";
       include("headerL.php") ;?>
        
        <style> 
 #wrapper{margin: 0 auto; max-width: 1400px}
        #content{background-color: white; display: inline-block; padding: 40px; border: 2px solid crimson; margin-left: 200px}
        body{background-image: url("Picture1.png")}

 button{width: 86px; height: 33px;background-color: gainsboro}       
 h3{color:black}
 #infor{background-color: white; border: 2px solid crimson; display: inline-block; padding: 40px; transform: translate(15%, 150%);position:absolute} 
 p{width: 350px;font-size: 18;}
 span{font-size: 18px;color: indigo}
 #wel{width: 370px;transform: translate(25%,-1%); position: absolute}

  .error{
background-color: red;
    color: white;
    font-style: italic;
    font-weight: bold;
    visibility: hidden;
  }
  </style>
  <?php
        use PHPMailer\PHPMailer\PHPMailer;
        require_once 'PHPMailer/PHPMailer.php';
        require_once 'PHPMailer/SMTP.php';
        require_once 'PHPMailer/Exception.php';
         include('connect.php') ;
        if(isset($_POST['Regbtn'])){
            $username=$_POST['Name'];
            $id= $_POST['ID'];
            $email= $_POST['Email'];
            $phone= $_POST['Phone'];
            $passw= $_POST['Password'];
            $confi=$_POST['Password1'];
            if($confi===$passw){
  
            $query = "INSERT INTO member(member_name,member_id,member_email,member_phone,member_pass,member_act) VALUES ('$username',$id, '$email',$phone, '$passw',0)";
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

            $mail->setFrom($email , 'Confirm your registeration in gym');
            $mail->addAddress( $email );   // Add a recipient


            $mail->IsHTML(true);  // Set email format to HTML
            $bodyContent = '<h1>Dear, '.$username.'</h1>';
            $bodyContent .= '<h3>welcome in KFU GYM website I hope you enjoy with us DO NOT FORGATE 50 SAR to confirm your particaption.</h3>';

            $mail->Subject = 'Email from KFU GYM suppuort system';
            $mail->Body    = $bodyContent;
            $mail->send();
            echo '<script>alert("Thank you for your register , enjoy")</script>';
        }
        else{
            echo '<script>alert("Depending in your ID you already have account!")</script>';
        }
            }
            else {
                echo '<script>alert("the password and its confirm should be same")</script>';
            }
        
        
                        }
            ?>
    
        <div id="wrapper">
               
     
        <div id="content">
            <form method="POST" action="Register.php" onsubmit="return validate()">
        <table cellspacing="10px">
            <tr><td colspan="2"> <img src="acc.png" alt="" style="width: 100px; height: 100px;max-height: 100px;max-width: 100px;"/> </td></tr>
            <tr><td  colspan="2" ><label for="welcome"><strong>Welcome!<strong></label></td></tr>
            <tr><td  colspan="2"><label for="account">Sign Up To Get An Account</label></td></tr>
            <tr><td ><label for="Name">Name</label></td> <td><input id="name" type="text" name="Name" placeholder="Type Your Name"/></td></tr>
            <tr><td ><label for="ID">ID</label></td> <td><input id="idd" type="text" name="ID" placeholder="Type Your ID"/></td></tr>
            <tr><td ><label for="Email">Email</label></td> <td><input  id="em" type="Email" name="Email" placeholder="Type Your Email"/></td></tr>
            <tr><td ><label for="Phone">Phone</label></td> <td><input id="ph" type="text" name="Phone" placeholder="Type Your Phone"/></td></tr>
            <tr><td ><label for="Password">Password</label></td> <td><input id="pass" type="Password" name="Password" placeholder="Type Your Password"/></td></tr>
            <tr><td ><label for="Password1">Confirm Password</label></td> <td><input id="PR" type="Password" name="Password1" placeholder="Retypr Your Password"/></td></tr>
            <tr><td colspan="2"><button name="Regbtn" method="POST" action="Register.php"><strong>Register</strong></button></tr>
            <tr><td colspan="2"></td></tr>
           <tr>
            <td class="error" id="er">*Please fill out all the blank*</td>
            </tr>            
            <tr><td colspan="2"></td></tr>
            <tr><td ><label for="sign">Or Sign in >> </label></td> <td ><a href="LOGIN.php"> Sign in</a></td></tr>
 </table></form>
            
     </div>
        <img  id="wel" src="img/reg.png" alt="photo"/>
        <div id="infor">
            <h3>Please, Read before you register!</h3>   
            <p>After pressed(Register), you have to pay 50SR cash when you come to GYM.
                <br/><span><strong>Wish you a good time, and a healthy  body</strong></span></p>
        </div>
       
                
        </div>
  
       <script>
     function validate(){
     var name=document.getElementById("name");
     var id=document.getElementById("idd");
     var email=document.getElementById("em");
     var phone=document.getElementById("ph");
     var p=document.getElementById("pass");
     var pr=document.getElementById("PR");
     var er= document.getElementById("er");
     var error=0;
        if(id.value==="" || p.value==="" ||name.value===""||email.value===""||phone.value===""||pr.value===""){
        er.style.visibility="visible";
        error=1;
        }
        else{
            er.style.visibility="hidden";
            error=0;
        }
        if(id.value===""){
            id.style.borderColor="red";
            error=1;
        } else{
            id.style.borderColor="blue";
            error=0;
        }
        if(p.value===""){
            p.style.borderColor="red";
            error=1;
        }
         else{
            p.style.borderColor="blue";
            error=0;
        }
        if(name.value===""){
            name.style.borderColor="red";
            error=1;
        }
         else{
            name.style.borderColor="blue";
            error=0;
        }
        if(email.value===""){
            email.style.borderColor="red";
            error=1;
        }
         else{
            email.style.borderColor="blue";
            error=0;
        }
        if(phone.value===""){
            phone.style.borderColor="red";
            error=1;
        }
         else{
            phone.style.borderColor="blue";
            error=0;
        }
        if(pr.value===""){
            pr.style.borderColor="red";
            error=1;
        }
         else{
            pr.style.borderColor="blue";
            error=0;
        }
                 if (error==1){
            return false;
        }else{
            return true;
        }
                }
        </script>
           <?php 
       include("footerU.php") ;?>
