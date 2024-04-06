//creatett.php

<!DOCTYPE html>
        <html>
            <head>
                <title>Admin Page</title>
                <style>
                    body {
            background-color: #e8f5ff;
            font-family: Arial;
            overflow: hidden;
                    }
                    .title {
                    font-family: 'Dancing Script', cursive;
                    margin-left: 35%;
                }
                .top {
            background-color: #fff;
            border-radius: 15px;
            color: #333;
            box-shadow: 0px 4px 8px 0px grey;
            height: 70px;
            }
                .hw
                {
                    border: 3px solid #663399;
                    height: 550px;
                    width: 80%;
                    border-radius: 20px;
                    margin-left: 150px;
                background-color: rgba(255, 255, 200,0.200);
                    margin-top: 20px;
                }
                
        label
        {
            font-weight: 700;
            font-size: 18px;
            padding-left: 350px ;
        }
        td
        {
            width: 200px;
            padding: 20px;
        }
                input:focus,textarea:focus
                {
                    background-color: #5bc0de;
                    border: 3px solid #663399;
                }
                .sub
                {
                    margin-left: 80%;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            background-color: #5bc0de;
            color: white;

                }
        
        
        
                </style>
        
                <script>
        
                </script>
            </head>
                <body>
                    
            <div class="hw">
                <div class="title">
                    <h1>Make a New Time Table</h1>
                
            </div>
            <form action="" method="post">
              <table>
                <tr>
                  <td><label>Day</label></td>
                  <td><select name="day" required>
                    <option>Mon</option>
                    <option>Tue</option>
                    <option>Wed</option>
                    <option>Thu</option>
                    <option>Fri</option>
                    <option>Sat</option>
                  </select></td>
                </tr>
                
              <tr>
                <td><label>Teacher&nbspName</label></td>
                <td><input type="text" name="TeacherName"  placeholder="Mr.Shamil" required></td>
              </tr>
              <tr>
                <td><label>Subject&nbspName</label></td>
                <td><input type="text" class="form-control" name="SubjectName" placeholder="Web" required></td>
              </tr>
              <tr>        
                <td><label>Class&nbspName</label></td>
                <td><input type="text" class="form-control" name="ClassName"  placeholder="MCS" required></td>
             </tr>
             <tr>
                <td><label>Starting&nbspTime</label></td>
                <td><input type="text" name="StartingTime"placeholder="24:00:00" required><br></td>
              </tr>
              <tr>
              
                <td><label>Ending&nbspTime</label></td>
                <td><input type="text"  name="EndingTime"  placeholder="24:00:00" required><br></td>
              </tr>
              <tr>
              <td colspan="2"><input type="submit" name="submit" class="sub" value="Submit" /></td>
              </tr>
              
            </form>
      
            </div>
                </body>
        </html>
        <?php
        if(isset($_POST['submit']))
        {
          
          $con=mysqli_connect("localhost","root","","bcapro");
          $day=$_POST['day'];
          $tname = $_POST["TeacherName"];
          $sname = $_POST["SubjectName"];
          $cname = $_POST["ClassName"];
          $st = $_POST["StartingTime"];
          $et = $_POST["EndingTime"];
          //echo $tname." ".$sname." ".$cname." ".$st." ".$et;
          $sql = "INSERT INTO tt VALUES (default,'$day','$tname', '$sname', '$cname', '$st', '$et')";
          if (mysqli_query($con, $sql)) {
            echo "<script type='text/javascript'>
            alert('New record created successfully');
          </script>" ;
          } 
          else {
              echo "Error: " . $sql . "<br>" . mysqli_error($con);
          }
        }  
?>
        