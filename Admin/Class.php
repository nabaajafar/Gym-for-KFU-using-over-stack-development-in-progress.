<?php 
$title="Add Class";
require ("headerA.php");
 include '../connect.php';
       if(isset($_POST['add'])){            
            $name=$_POST['name'];
            $id=$_POST['id'];
            $start=$_POST['start'];
            $end=$_POST['end'];
  
            $query = "INSERT INTO class(class_name,coach_id,time_start,time_end) VALUES ('$name',$id,'$start','$end')";
                    $result = mysqli_query($con,$query);
        }
?>
<style> 
 #wrapper{margin: 0 auto; max-width: 1400px}
 body{background-image: url("../oooo (2).png")}
label{font-size: 17px;font-family: monospace;}
#contect{position:absolute;transform: translate(30%, -117%);}
#content  table{float:left;display: inline-block;margin-top: 80px;margin-left: 20px}
#content  img{float:right;display: inline-block; margin-right: 20px}  
#topic{font-size: 25px;color: darkslateblue}
button{width: 60px;height: 40px; background-color: #ddd}
  .error{

      color: red;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }
        </style>

        
        <div id="wrapper" >
            <form  method="POST" action="Class.php" name="myform" >
             <div id=content>          
            <table cellspacing="9px" >
            <tr>
                <td colspan="2" id="topic"><strong>Class information:</strong></td>            
            </tr>
            <tr>
                  
                <td><label for="name"> <strong>Enter the class Name:</strong></label></td>
                <td><input type="text" name="name" id="nn"/><span class="error" id="namer">This is required</span></td></tr><br></td>
            </tr>
             <tr>
            <td><label for="id"><strong>Enter the ID coach:</strong></label></td>
            <td><input type="text" name="id" id="ii"/><span class="error" id="idr">This is required</span></td></tr><br></td>
             </tr>
              <tr>
            <td><label for="start"><strong>Enter when it is start:</strong></label></td>
            <td><input type="time" name="start" id="ss"/><span class="error" id="startr">This is required</span></td></tr><br></td>
             </tr>
              <tr>
            <td><label for="end"><strong>Enter when it is end:</strong></label></td>
            <td><input type="time" name="end" id="ee"/><span class="error" id="endr">This is required</span></td></tr><br></td>
             </tr>
            
                  </table>      
               <img src="class.png" alt="class"/>
        <button name="add" onclick="return validateForm()">Add</button>
        <button type="reset">Reset</button>
        </div>
            </form>
        </div>
         <script>
        function validateForm(){
            
            var vaild=true;
             var name = document.forms["myform"]["name"];
             var id = document.forms["myform"]["id"];
            var start = document.forms["myform"]["start"];
             var end = document.forms["myform"]["end"];
        if(name.value==""|| id.value==""||start.value==""||end.value==""){
            
          alert("* felid must be filled out *");
    
  }
  if(name.value==""){
      namer.style.visibility="visible";
      name.style.borderColor="red";
      vaild=false;
  }
  else{
      namer.style.visibility="hidden";
      name.style.borderColor="green";
       vaild=true;
  }
  if(id.value==""){
      idr.style.visibility="visible";
      id.style.borderColor="red";
       vaild=false;
  }
  else{
      idr.style.visibility="hidden";
      id.style.borderColor="green";
       vaild=true;
  }
      if(start.value==""){
      startr.style.visibility="visible";
      start.style.borderColor="red";
       vaild=false;
  }
  else{
      startr.style.visibility="hidden";
      start.style.borderColor="green";
       vaild=true;
  }
        if(end.value==""){
      endr.style.visibility="visible";
      end.style.borderColor="red";
       vaild=false;
  }
  else{
      endr.style.visibility="hidden";
      end.style.borderColor="green";
       vaild=true;
  }
  if(vaild){
      return true;
  }
  else{
        return false;}
    }
    </script>
    <?php include ("footer.php"); ?>
