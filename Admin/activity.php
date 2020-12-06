<?php $title="Add Activity";

require ("headerA.php");  
   ?>
<style>    
 #wrapper{margin: 0 auto; max-width: 1400px}
 h2{color: white;text-align: center}
 fieldset{ margin-left: 270px; margin-right: 300px; background-color:beige;padding: 70px;border: 2px solid black }
legend{border: 2px solid black ;background-color: beige;font-size: 25px;font-family: fantasy; color: mediumvioletred; text-align: center}
button{background-color: mediumvioletred;color: white;height: 30px;text-align: center;} 
 body{background-image: url("../oooo (2).png")}

input,textArea,select{margin-left: 0; background-color:thistle}
label{font-size: 17px;font-family: monospace;}

  .error{
background-color: red;
      color: white;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }

        </style>
        <div id="wrapper" >
           <h2> Welcome Back!..Fill the following to add your activity to the user</h2>  
            <hr>
            <form>
        <fieldset>
          <legend><strong>Activity Page</strong></legend>
           <table>    
               <tr><td  ><label for="name"><strong><em>Activity Name :*</em></strong></label></td> 
               <td><input type="text" name="name" id= "nm"/></td></tr>
               <tr><td ><label for="add"><strong><em> Add Activity :*</em></strong></label></td> <td><input type="file" name="add" id= "ad"/></td> </tr>
             <tr><td ><label for="type" ><strong><em>Type Of The Activity :*</em></strong></label></td> 
            <td>
                       <select name="type" id="tp" >
                       <option value="Select">Select</option>
                       <option value="ca"> Cario</option>
                       <option value="lg"> Lecs & Glutes</option>
                       <option value="fb"> Full Body</option>
                       <option value="ab"> Upper Body & Abs</option>
                        </select>
                          
                           </td></tr>
              <tr><td colspan="2" ><label for="short" ><strong><em>Short Description :*</em></strong></label></td> </tr>
              <tr><td colspan="2"><textarea rows="4" cols="50" id ="sh">The Goal Of This Activity</textarea></td></tr>

             <tr>
                 <td class="error" id="er">Please fill out all the filed with *</td>
             </tr>

            </table>

          <button name="submit" onclick="return validate()">  <strong>Save</strong> </button>
                      
            <button name="submit">  <strong>Cancel</strong> 
                      </button>
           
            </fieldset>
                </form>
        </div>
               <script>
        function validate(){

            var name=document.getElementById("nm");
            var add=document.getElementById("ad");
            var type=document.getElementById("tp");
            var short =document.getElementById("sh");
            var er= document.getElementById("er");

        if(name.value===""|| add.value===""|| type.value==="Select"|| short.value==="The Goal Of This Activity"){
                er.style.visibility="visible";
        }
                else{
            er.style.visibility="hidden";
        }
        if(name.value===""){
            name.style.borderColor="red";
        }
        else{
            name.style.borderColor="blue";
        }
                if(add.value===""){
            add.style.borderColor="red";
        }
        else{
            add.style.borderColor="blue";
        }
        
        if(type.value==="Select"){
            type.style.borderColor="red";
        }
        else{
            type.style.borderColor="blue";
        }
         if(short.value==="The Goal Of This Activity"){
         short.style.borderColor="red";
        }
        else{
            short.style.borderColor="blue";
        }
      return false;
    }
    </script>
    <?php include ("footer.php"); ?>