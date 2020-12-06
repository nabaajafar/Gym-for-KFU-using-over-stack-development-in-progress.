 <?php $title="KFU GTM|SEARCH";
include("headerA.php");    
include("../connect.php");

?>
<STYLE>
 #wrapper{margin: 0 auto; max-width: 1400px}
  body{background-image: url("../oooo (2).png")}
 .img{width: 50px;}
            p{color:black; font-size:39px;margin-left: 440px}
           h1{color: darkred; margin-left: 200px;}
            
            #myInput {
                background-color: white;
                width: 19%;
                font-size: 16px; 
                padding: 12px 20px 12px 40px;
                border: 1px solid #FAA12F;
                float: left;
                margin-left: 500px;
            }
            
            #myUL {
                list-style-type: none;
                padding: 0;
                margin: 70px 500px;
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
        </STYLE>
  
    <DIV id="wrapper">

    <p><STrong>Take a look of the members</STRONG></p>
<H1>You can search about specific member</H1><INPUT id="myInput" onkeyup="myFunction()" type="text" placeholder="Search by names.." value=""> 
<UL id="myUL">

    <?php 
  $query="SELECT * from member";
    $member=array();
  if($result = mysqli_query($con, $query)){
while($row= mysqli_fetch_assoc($result)){
    //echo "alter(hello)";
$member[$row['member_id']]=array("name"=>$row['member_name']);
  } 
}
?>
<?php foreach($member as $i){ ?>
  <LI><A href="#"> <?php echo $i['name']; ?></A></LI>
<?php } ?> 
    </UL>
<SCRIPT>
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
</SCRIPT>

    </div>
<?php include("footer.php") ?>
