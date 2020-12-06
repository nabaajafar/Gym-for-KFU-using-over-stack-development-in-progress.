<?php 

$title="Add / View Coach";
require ("headerA.php");
include ("../connect.php");
 $message='';
if (isset($_POST["add"])){
$Name=$_POST['Name'];
$ID=$_POST['ID'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$skillS=$_POST['skills'];
$Salary=$_POST['Salary'];

$query="INSERT INTO coach(full_name,coach_id, coach_email,coach_phone,skils,salary) VALUES ('$Name',$ID,'$Email',$Phone,'$skillS',$Salary)"; 
$result = mysqli_query($con, $query) ;
       if($result) {
        $message="Add user complete";  
       }
	    
        else
$message="Username added before"; } 
        ?> 

<style>    
 #wrapper{margin: 0 auto; max-width: 1400px}
fieldset{ margin-left:400px; margin-right: 370px; background-color:white;padding: 60px;border: 2px solid black }
legend{border: 2px solid black ;background-color: white;font-size: 25px;font-family: fantasy; color: mediumvioletred; text-align: center}
 button{border-radius: 12px;margin-left:90px;width: 150px;height: 50px;background-color: mediumvioletred;color: white;}
 body{background-image: url("../oooo (2).png")}
label{font-size: 17px;font-family: monospace;}

               .b-container{
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                text-align:center; 
                margin-top: 60px;
                margin-left:170px;
                width: 150px;
                 height: 50px;
            }
            #button{
                background:mediumvioletred;
                padding:15px 15px;
                text-decoration: none;
                text-transform: uppercase;
                font-weight: bold;
                 cursor: pointer;
                 color: white;
                 border-radius: 12px;
                 width: 150px;
                 height: 50px;
            }
            #button:hover{
                background: #34495e;
                color:#fff;
                
            }
            
            .popup{
             background: rgba(0,0,0,0.50);
             width:500px;
             height: 300px;
             margin-top: 100px;
            
             display:none;
             justify-content:center;
             align-items:center;
             
             
            }
            .pop-content{
             height: 400px;
             width:500px;
             background:gainsboro;
             padding:20px;
             border-radius: 10px;
             text-align: center;
             border: 1px solid grey;
             position: absolute;
            }
                .close{
                position:absolute;
                background-color:#fff; 
                top:-15px;
                right:-15px;
                border-radius: 10px;
                box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
                cursor: pointer;
            }
            
            
            #myInput {
                background-color: white;
                width: 19%;
                font-size: 16px; 
                padding: 12px 20px 12px 40px;
                border: 1px solid #FAA12F;
                float: left;
                margin-left: 100px;
            }
            
            #myUL {
                list-style-type: none;
                padding: 0;
                margin: 70px 10px;
                width: 70%;
            }
            
            #myUL li a {
                border: 1px solid #ddd;
                margin-top: -1px;
                background-color: #f6f6f6;
                padding: 12px;
                text-decoration: none; 
                font-size: 18px;
                color: black;
                width: 30%;
                display: inline-block
            }
            
            #myUL li a:hover:not(.header) {
                background-color: #eee;
            }
            .error
            {
                color: red;
                font-style: italic;
                font-size: 15px;
                visibility: hidden;
            } 
  
        </style>
        <div id="wrapper" >
            <form name="myForm" action="coach.php" method="post">
        <fieldset>
          <legend><strong>Add/View Coach</strong></legend>
        
        <table cellspacing="10px">
            <tr><td colspan="3"> <img src="coh.png" alt="" style="width: 120px; height: 120px;max-height: 120px;max-width: 120px;margin-left: 100px"/> </td></tr>
            <tr><td  colspan="3" ><label for="welcome"><strong>Fill the following to add new coach</strong></label></td></tr>

            <tr><td  ><label for="Name">Full Name:*</label></td> <td><input type="text" name="Name" placeholder="Type Your Name"/><span class="error" id="inname">This is required</span></td></tr>
            <tr><td ><label for="ID">ID:*</label></td> <td ><input type="text" name="ID" placeholder="Type Your ID"/><span class="error" id="innid">This is required</span></td></tr>
            <tr><td ><label for="Email">Email:*</label></td > <td ><input type="Email" name="Email" placeholder="Type Your Email"/><span class="error" id="inemail">This is required</span></td></tr>
            <tr><td ><label for="Phone">Phone:*</label></td> <td><input type="text" name="Phone" placeholder="Type Your Phone"/><span class="error" id="inphone">This is required</span></td></tr>
            <tr><td><label for="skills">Skills:*</label></td> 
             <td>
                 <select name="skills" style="width:165px;">
                       <option value="select">Select</option>
                       <option value="Yoga"> Yoga</option>
                       <option value="Boxing">Boxing</option>
                       <option value="CAA">Cardio and Aerobic</option>
                       <option value="Resistance">Resistance</option>
                       <option value="Other">Other</option>
                       </select>
                 <span class="error" id="inskill">This is required</span>
                           </td>
            
            
            
            </tr>
            <tr><td><label for="Salary">Salary:*</label></td><td ><input type='number' name="Salary" max="3000" min="1000" style="width:165px;" /><span class="error" id="insalary">This is required</span></td></tr>
          
         
 </table> 
           <button name="add" onclick="return validateForm()"><strong>Add</strong></button>
           
           
           
                   <div class="b-container">
            <a id="button" name="view">View Coach</a>
        </div>
                  <div  class="popup">
            <div class="pop-content" >
               
                <img src="../img/close-480.png" alt="CLOSE"  class="close" style="width:30px; height:30px">  
                 <a id="button">View the list of coach</a>
                    
                    
                    <hr>
                     <table style="text-align: left">
                         <INPUT id="myInput" onkeyup="myFunction()" type="text" placeholder="Search.." value="">
                         <UL id="myUL">
    <?php 
  $query="SELECT * from coach";
    $coach=array();
  if($result = mysqli_query($con, $query)){
while($row= mysqli_fetch_assoc($result)){
$coach[$row['coach_id']]=array("name"=>$row['full_name']);
  } 
}
  ?>
  <?php foreach($coach as $i){ ?>
  <LI><A href="#"><?php echo $i['name']; ?></A></LI>
<?php } ?> 
                         </UL>
                </table>
                <br>
                
               
            </div> 
            
            
        </div>
              </fieldset>
                </form>
        </div>
            <script>
            
         document.getElementById("button").addEventListener("click",function(){
         document.querySelector(".popup").style.display="flex";
         })
         
          document.querySelector(".close").addEventListener("click",function(){
             document.querySelector(".popup").style.display="none";
         });
            
            
            function myFunction() {
         var input, filter, ul, li, a, i, txtValue;
         input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

       for (i = 0; i < li.length; i++) {
           a = li[i].getElementsByTagName("a")[0];
           txtValue = a.textContent || a.innerText;
           if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 li[i].style.display = "";
          } else {
                 li[i].style.display = "none";
    }
  }
}


function validateForm() {
  var name = document.forms["myForm"]["Name"];
  var id = document.forms["myForm"]["ID"];
  var email = document.forms["myForm"]["Email"];
  var phone = document.forms["myForm"]["Phone"];
  var skile = document.forms["myForm"]["skills"];
  var Salary = document.forms["myForm"]["Salary"];
  if (name.value == "" || id.value=="" || email.value=="" ||phone.value==""||skill.value==""||Salary.value=="") {
    alert("* felid must be filled out");
    
  }
  if(name.value==""){
      inname.style.visibility="visible";
      name.style.borderColor="red";
  }
  else{
      inname.style.visibility="hidden";
      name.style.borderColor="green";
  }
  if(id.value==""){
      innid.style.visibility="visible";
      id.style.borderColor="red";
  }
  else{
      innid.style.visibility="hidden";
      id.style.borderColor="green";
  }
  if(email.value==""){
      inemail.style.visibility="visible";
      email.style.borderColor="red";
  }
  else{
      inemail.style.visibility="hidden";
      email.style.borderColor="green";
  }
    if(phone.value==""){
      inphone.style.visibility="visible";
      phone.style.borderColor="red";
  }
  else{
      inphone.style.visibility="hidden";
      phone.style.borderColor="green";
  }
    if(skile.value==="select"){
      inskill.style.visibility="visible";
      skile.style.borderColor="red";
  }
  else{
      inskill.style.visibility="hidden";
      skile.style.borderColor="green";
  }
      if(Salary.value===""){
      insalary.style.visibility="visible";
      Salary.style.borderColor="red";
  }
  else{
      insalary.style.visibility="hidden";
      Salary.style.borderColor="green";
  }

return false;}

        </script>
        <?php include ("footer.php"); ?>