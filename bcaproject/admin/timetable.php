//timttable.php
<html>
    <head>
        <title>admin page</title>
        <style>
            .tt
            {
                background-color: #47c9af;
                font-size: 20px;
                height: 50px;
                width: 250px;
                font-family: Open Sans;
                box-shadow: 1px 2px;
                cursor: pointer;
                margin-top: 50px;
                margin-left: 300px;
                border-radius: 5px;
            }
            p
            {
                font-family: 'Dancing Script', cursive;
                margin-left: 40%;
                font-size: 30px;
            }
            hr
            {
                color: gray;
                height: 1px;
                background-color: gray;
                margin-left: 200px;
                margin-right: 200px;
                margin-top: -30px;
                opacity: 30%;
            }
            body{
      background-image: url(image3.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    table
    {
      border: 2px solid black;  
      border-radius: 20px;
      padding: 20px;
      margin-top: 100px;
      margin-left: 450px;
      border-collapse: collapse;

    }
    th
    {
        background-color: black;
        color: white;
        font-size: 18px;
        padding: 15px;
    }
    tr:nth-child(odd)
    {
    	background-color: #47c9af;
    }
    td
    {
      padding: 12px;
      border-right: 1px solid black;

    }
    
    .btndel
        {
            background-color:red;
            border-radius: 8px;
            cursor:pointer;
            margin-left: 5px;
            color:white;    
            
        }


        </style>
    </head>
    <body>
        <?php include "./head.php"?>
        <a href="creatett.php"><input class="tt" type="button" value="Create New TimeTable"></a>
        <p>Curren't TimeTable</p>
        <hr>
        <div class="tbody">
            <table class="table">
          <tr>
            <thead>
            <th>Day</th>
            <th>Teacher Name</th>
            <th>Subject Name</th>
            <th>Class Name</th>
            <th>Starting Time</th>
            <th>Ending Time</th>
            <th>Remove</th>
            </thead>
          </tr>
        <?php
        $con=mysqli_connect("localhost","root","","bcapro");  
      $sql = "Select * from tt";
      $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)) {
              echo "<tr><td>" . $row["day"]. "</td><td>" . $row["tname"]. "</td><td>" . $row["subject"] . "</td><td>" . $row["classnm"] . "</td>
              <td>". $row["starttime"] . "</td><td>" . $row["endtime"]. "</td>";
              echo "<td><a href='deletetimetable.php?id=$row[id]'><input class='btndel' type='button' value='Delete'></a>
              </td>";
          
          }
          echo "</table>";
      }
      ?>
        </tbody>
      </table>
          </div>
        </div>
       </body>
      </html>
        
    </body>
</html>