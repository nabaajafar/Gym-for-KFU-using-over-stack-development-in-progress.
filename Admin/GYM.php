<?php  $title="KFU GYM";
//echo phpinfo();
include("headerA.php");
include("../connect.php");

//Udating Member Status
if ($_POST){
$qq="UPDATE member SET member_act = not member_act where member_id= '" .$_POST["member_id"]. "'";
     $rq = mysqli_query($con, $qq);
}
         //$result="";
            ?>
        <style>
            #wrapper{width: 1600px;height:1000px; }
               body{background-image: url("../oooo (2).png")}
#info{width: 600px; height: 300px; color: black;margin-left: 300px;float: left; background-color:#e4afd4;text-align: center}
.ac{background-color: #ffff66;width: 90px;height: 40px;font-weight: bold}
.deac{background-color:  #cc0066;width: 90px;height: 40px;font-weight: bold}
            #myInput {
                margin-top: 80px;
                background-color: white;
                width: 19%;
                font-size: 16px; 
                padding: 12px 20px 12px 40px;
                border: 1px solid black;
                float: left;
                margin-left: 400px;}
            th{background-color: darkmagenta}
             .img{width: 50px;}
        </style>
        
        <div id="wrapper">
            <form method="POST" name="FORM">
<input type="hidden" id="member_id" name="member_id" placeholder="Search for names.."></td>
            <div id="bodyi">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="info" border="1px solid white" >
                    <tbody>
  <?php 
  $query="SELECT * from member";
 $result = mysqli_query($con, $query)?>
                        <tr>
                        <th>Name &nbsp; </th>
                        <th>ID &nbsp; &nbsp;</th>
                        <th>Phone&nbsp; &nbsp;</th>
                        <th>Email&nbsp; &nbsp;</th>
                        <th>Current Status</th>
                        <th>Change Status</th>
                    </tr>
     <?php
  // $member=array();
while($row= mysqli_fetch_assoc($result)){
//$member[$row['member_id']]=array("name"=>$row['member_name'],"id"=>$row['member_id'] , "phone"=>$row['member_phone'],  "email"=>$row['member_email'],"act"=>$row['member_act']); 
?>
                    <tr style="">
                        <td><?php echo $row['member_name']; ?></td>
                        <td><?php echo $row['member_id']; ?></td> 
                        <td><?php echo $row['member_phone']; ?></td>
                        <td><?php echo $row['member_email']; ?></td>
<td>
<?php      
if($row['member_act']==0){
echo '<p id=stra'.$row["member_id"].'>Active</p>';
        }
else{
echo '<p id=strd'.$row["member_id"].'>Disactive</p>';
}
?>
<td><?php
if($row['member_act']==1){
?>
    <button name="activate" class="ac" value="" onclick="document.getElementById('member_id').value ='<?=$row["member_id"]?>';">Activate</button>
<?php
}else{
?>
    <button name="deactivate" class="deac" value ="" onclick= "document.getElementById('member_id').value ='<?=$row["member_id"]?>';">deactivate</button>
<?php }?>
</td>
</tr> 

                        <?php } ?>
                    </tr>
                </tbody></table>
            </div>
            </form>
        </div> 
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script type="text/javascript">
             function myFunction() {
             var input, filter, table, tr, td, i, txtValue;
             input = document.getElementById("myInput");
             filter = input.value.toUpperCase();
             table = document.getElementById("info");
             tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                 td = tr[i].getElementsByTagName("td")[0];
                 if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                         tr[i].style.display = "";
                  } else {
                     tr[i].style.display = "none";
                    }
                 }       
              }
        }

//function active_disactive(val,member_id) {
//$.ajax({
//type:'post',
//url:'change.php',
//data: {val:val ,member_id: member_id},
//success: function(result){
//if(result==0){
//$('#stra'+member_id).html('active');
//}
//else{
//$('#strd'+member_id).html('deactive');
//}
//}
//});


//}

        </script>
        
<?php include("footer.php")?>