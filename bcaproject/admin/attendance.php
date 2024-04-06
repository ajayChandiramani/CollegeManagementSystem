//attendance.php

<html>
	<head>
		<style>

body
{

   background-image: linear-gradient(#b993d6,#8ca6db);
}

.header {
   background-color: darken(#398B93, 5%);
   color: black;
   font-size: 1.5em;
   padding: 1rem;
   text-align: center;
   text-transform: uppercase;
}

img {
   border-radius: 50%;
   height: 70px;
   width: 70px;
}

.table-users {
   border-radius: 10px;
   
   border: 1px solid #4ECDC4;
   background-color:whitesmoke ;
   box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
   max-width: calc(100% - 2em);
   margin: 1em auto;
   overflow: hidden;
   width: 1200;
}

table {
   width: 100%;
  border-collapse: collapse;
  text-align: left;
  overflow: hidden;
  border-radius: 10px;
  
   }
   
   th { 
    background-color: #4ECDC4;
   }
   td
   {

      border-left: 1px solid #4ECDC4;
    border-right:1px solid #4ECDC4;
   }
   .input:hover,tr:hover
   {
      
      background-color: rgba(50, 25, 255, 0.302);        
   }
   tr 
   {
      border: 1px solid #4ECDC4;
   }
   tr:nth-child(2)
   {
      background-color: lighten(#4E5DC4, 35%);
   }
   .ap
   {
      width: 30px;
      height:30px;
      font-size:21px;
      text-align: center;
      margin-left: 50px;
      background-color:#368a15;
      color: white;
      text-transform: capitalize;
   }
   .input
   {
       background-color: #e8f5ff;
       width: 100px;
       border: none;
       text-align: center;
       font-size: 15px;
   }
   .savebtn
   {
         cursor: pointer;
         font-size: 20px;
         border-radius: 10px;
         height: 40px;
         width: 100px;
         margin-top: 20px;
         margin-left: 350px;
         background-color: #663399;
         color: white;
  }
  .view
  {
     margin-left: 70%;
     font-size: 20px;
     margin-right: 10px;
  }
  .gobtn
  {
         cursor: pointer;
         font-size: 20px;
         border-radius: 10px;
         height: 40px;
         width: 100px;
         margin-top: 20px;
         margin-left: 80%;
         background-color: #663399;
         color: white;
  }
  h2
  {
     margin-left: 850px;
  }

		</style>
      <script>
         
         function course()
         {
            alert("g");
            
         }
         function chechap(i)
         {
            var ap=document.getElementById("txt"+i).value;
            if(ap=='A'||ap=='a')
            {
               document.getElementById("txt"+i).style.backgroundColor="red";
            
            }
            else
            {
               
               document.getElementById("txt"+i).style.backgroundColor="green";
            }
         }
         
         
</script>   
	</head>
<body>

        <?php include "./head.php"?>
<div class="table-users">
   <div class="header"><u>Today's attendance</u></div>
   <form action='attendance.php' method="post">
      Course:--<select name="course">
         <option>BCA</option>
         <option>BCOM</option>
         <option>BBA</option>
      </select>
      <input type="submit" name="sub">
   </form>
   <?php
   $course="";
   if(isset($_POST['sub']))
   {
      $course=$_POST['course'];
      echo $course;
   }
   
    $con=mysqli_connect("localhost","root","","bcapro");
    $sql="select *from stud where course='$course'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0)
    {
        $i=1;
        
        $count=mysqli_num_rows($run);
       echo "<form action='attendperform.php?count=$count&course=$course' method='post'>";
       echo "<table>";
          echo "<tr>";
               echo "<th>Picture</th>"; 
               echo "<th>Date</th>"; 
               echo "<th>Eno. Number</th>";
               echo "<th>Name</th>";
               echo "<th>Course</th>";
               echo "<th>Semester</th>";
               echo "<th>Phone</th>";
               echo "<th>present/absent</th>";
      echo "</tr>";
      echo "<tr>";
         
      while($row=mysqli_fetch_assoc($run))
      { 
            $date=date("Y-m-d");
            //echo $date;
            $enno=$row['enno'];
            $fname=$row['fname'];
            $course=$row['course'];
            $sem=$row['sem'];
            $contno=$row['contno'];
            $ok="<img src=".$row['studphoto'].">";
            echo "<td>".$ok."</td>";  
            echo "<td><input type='text' name='date[]' value='$date' class='input' readonly='true'>  </td>";  
            echo "<td><input type='text' name='enno[]' value='$enno' class='input' readonly='true'>  </td>";  
            echo "<td><input type='text' name='fname[]' value='$fname' class='input' readonly='true'>  </td>";
            echo "<td><input type='text' name='course[]' value='$course' class='input' readonly='true'>  </td>";
            echo "<td><input type='text' name='sem[]' value='$sem' class='input' readonly='true'>  </td>";
            echo "<td><input type='text' name='contno[]' value='$contno' class='input' readonly='true'></td>";
            echo "<td><input type='text' required='true' id='txt$i' class='ap' onblur='chechap($i)' pattern='[A|P|a|p]{1}' title='You can Only Enter A(absent) or P(Present)' name='txtab[]' value='P'>
           
            </td>";
      
            $i++;

            echo "</tr>";
        }   
    }
    else
    {
       echo "<h2>No Student Found!!</h2>";
    }

   echo "</table>";
   ?>

   
   <input type="submit" value="Save" class="savebtn">
   </form>
   <form action="viewattendance.php" method="post">
      <h2>View attendance</h2>
      <label class="view">Date:-</label>
      <input type="date" class="date" required name="date">
      
      <label class="view">Course:-</label>
      <select name="course">
         <option>BCA</option>
         <option>BCOM</option>
         <option>BBA</option>
      </select>
      <input type="submit" value="Go" class="gobtn"></a>
   
   </form>
</div>

<footer>
            <div class="footer">
                <?php include "../footer.php";?>
            </div>
        </footer>
</body>
</html>