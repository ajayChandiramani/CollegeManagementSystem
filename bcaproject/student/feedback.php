<?php

include "./head.php"; 
session_start(); 
$uname=$_SESSION['unm'];
if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
}

$course="";
    $a=$_SESSION['unm'];
    $name=$_SESSION['unm'];
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select *from stud where unm='$a'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        while($row=mysqli_fetch_assoc($run))    
        {
            $lname=$row['lname']; 
            $name=$row['fname'];
            $course=$row['course'];
            $no=$row['contno'];
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student page </title>
  <style>


*{
  padding: 0;
  font-family: 'Josefin Sans';
}

body{
    background-image: linear-gradient(to right,#2e3192,#1bffff);
}

.wrapper{
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%,-50%);
  height:500px;
  width: 550px;
  background: #fff;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px rgb(17, 128, 255); 
}

.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 30px;
}

.wrapper .input_field input[type="text"],
.wrapper textarea{
  border: 1px solid #66dbff;
  border-radius: 5px;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}
.plus
{
    background-image:linear-gradient(to right,#ff61d2,#fe9090);
    border: 1px solid white;
    height: 20px;
    width: 20px;
    color: black;
    font-size: 20px;
    font-weight: bolder;

}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #00a2ff;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
}
#s
{
    color: red;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}
  </style>
  <script>
      function showval(x)
      {
          document.getElementById("slid").innerHTML=x;

      }
      function add_range()
      {

        var b=document.getElementById("s");
        var x=b.value;
        document.getElementById("s").value=parseInt(document.getElementById("s").value)+1;
       showval(x);
      }
      function sub_range()
      {

        var b=document.getElementById("s");
        var x=b.value;
        document.getElementById("s").value=parseInt(document.getElementById("s").value)-1;
       showval(x);
      }
      
   

    </script>
</head>
<body>

<div class="wrapper" style="background-image:linear-gradient(to right,#ff61d2,#fe9090);">
  <h2>Feedback Form</h2>
  <div id="error_message"></div>
  <form method="post" action="submit.php">
    <div class="input_field">
        <?php
               echo "<input type='text' placeholder='First Name' readonly='true' name='fname' value='$name'> ";
        ?>
    </div>
    <div class="input_field">
        <?php
               echo "<input type='text' placeholder='last Name' readonly='true' name='lname' id='lname' value='$lname'> ";
        ?></div>
    <div class="input_field">
        <?php
               echo "<input type='text' placeholder='phone' readonly='true' name='cont' id='phone' value='$no'> ";
        ?>
    </div>
   
    <div class="input_field">
        <textarea placeholder="Your Feedback" name="feed" id="yourfeedback"></textarea>
    </div>
    <div class="input_field">
        <span style="font-weight: bolder;">Rate us:-</span>
        <span id="slid" style="color: blue;margin-left: 80px;font-weight: bolder;"></span><br>
        <input type="button" class="plus" value="-" onclick="sub_range()">
        <input type="range" id="s"   min="0" max="10" step="1" name="slid" value="5" onchange="showval(this.value)">
        
        <input type="button" class="plus" value="+" onclick="add_range()">
        <?php 
        echo "<input type='hidden' name='unm' value='$uname'>";
        ?>
        <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>

</body>
</html>