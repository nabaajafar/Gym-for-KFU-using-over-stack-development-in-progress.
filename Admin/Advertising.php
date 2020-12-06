<?php 
    $title="Add advertising";
    include("headerA.php");
 include ('../connect.php');
       if(isset($_POST['submit'])){            
            $title=$_POST['title'];
            $logo=$_POST['logo'];
            $start=$_POST['start'];
            $end=$_POST['end'];
            $goals=$_POST['goals'];
            $query = "INSERT INTO advertising SET title_name='$title', logo='$logo',start_time='$start', end_time='$end',goals='$goals'";
            $result = mysqli_query($con,$query);
           // mysql_close($con);
        }
        ?>
        <style>
            #wrapper{margin: 0 auto; max-width: 1400px}
   body{background-image: url("../oooo (2).png")}
        h2{text-align: left}
        fieldset{ margin-left: 200px; margin-right: 200px; background-color: beige;padding: 70px }
        input,textArea{margin-left: 0; background-color:  thistle}
        button{height: 30px; width: 70px; text-align: center; background-color: mediumvioletred; margin-top: 30px; color: whitesmoke}
        legend{font-size: 25px;font-family: fantasy; color: mediumvioletred; text-align: center}
        img{width:10%}
        label{font-size: 17px;font-family: monospace;}
        
  .error{
background-color: red;
      color: white;
      font-style: italic;
      font-weight: bold;
      visibility: hidden;
  }
        </style>
  
        <div id="wrapper">
        
            <form name="form" method="post">
        <fieldset>
            <legend><img src="adve.png" alt="advertising" >Advertising Information</legend>
            <h3 class="error" id="er">Please fill out all * filed</h3>
                        <h2>Fill the following to add your advertising:</h2>
<?Php if(isset($result) and $result) { ?>
<p>Advertising added successfully to the Database <p/>

<?Php } 
else if(isset ($result) and !$result) { ?>
<p> Sorry advertising was not added to the Database <p/>

<?Php }?>

                        <table cellspacing="9px">
            <tr>
                <td><label for="title"> <strong>Enter the advertising title:*</strong></label></td>
                <td><input type="text" name="title"/><br></td>
            </tr>
             <tr>
            <td><label for="logo"><strong>Enter the advertising logo:*</strong></label></td>
            <td><input type="file" name="logo"/><br></td>
             </tr>
              <tr>
            <td><label for="start"><strong>Enter when it is start:*</strong></label></td>
            <td><input type="date" name="start"/><br></td>
             </tr>
              <tr>
            <td><label for="end"><strong>Enter when it is end:*</strong></label></td>
            <td><input type="date" name="end"/><br></td>
             </tr>
            <br/>
            <tr id="area">
                <td><label for="goals"><strong>Enter the goals of that:</strong></label><br></td>
            </tr>
            <tr><td colspan="2"><textarea rows="8" cols="90" name="goals"> The goal of that advertising</textarea></td></tr>
            </table>
          <div id="action">
              <button name="submit" onclick="return validate()">Add</button>
        <button name="reset">Reset</button>
        <button name="back" formaction="Adminpage.html">Back</button>
        </div>
        </fieldset>
        </form>
        </div>

    <script>
        function validate(){
            var vaild=true;
        var title=document.form.title;
        var logo=document.form.logo;
        var start=document.form.start;
        var end=document.form.end;
        var er= document.getElementById("er")
        if(title.value==""|| logo.value==""||start.value==""||end.value==""){
alert("* felid must be filled out *");
        }
        if(title.value==""){
            title.style.borderColor="red";
            vaild=false;
        }
        else{
            title.style.borderColor="blue";
            vaild=true;
        }
                if(logo.value==""){
            logo.style.borderColor="red";
            vaild=false;
        }
        else{
            logo.style.borderColor="blue";
            vaild=true;
        }
                if(start.value===""){
            start.style.borderColor="red";
            vaild=false;
        }
        else{
            start.style.borderColor="blue";
            vaild=true;
        }
                if(end.value===""){
            end.style.borderColor="red";
            vaild=false;
        }
        else{
            end.style.borderColor="blue";
            vaild=true;
        }
         if(vaild){
      return true;
  }
  else{
        return false;}
    }
    
    </script>
<?php include("footer.php");?>