<?php
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="select *from stud where id=$a";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
?>
<html>
    <head>
        <title>admin page</title>
    </head>
    <style>
        .pt
        {
            font-size: 40px;
            margin-top: 30px;
            margin-bottom: 50px;
            font-family:MS UI Gothic;
            text-align: center;
            font-weight: 1000;
        }
        .hr
        {
            color: gray;
            height: 1px;
            background-color: gray;
            margin-left: 200px;
            margin-right: 200px;
            margin-top: -30px;
            opacity: 30%;
        }
        .tab
        {
            font-size: 20px;
            font-weight: bold;
            margin-left: 150px;
            margin-top: 40px;
            font-family: MS UI Gothic;
        }
        td
        {
            padding-left: 50px;
        
        }
        tr
        {
             height: 45px;

        }
        input
        {
            border: 1px solid #d1cfcf;
            
        }
        input:hover
        {
            border: 2px solid #47c9af;
            font-size: 18px;
        }
        .ll
        {
            padding-left: -100px;
        }
        .indesign
        {
            height: 30px;
            width: 500px;
            
            text-transform: uppercase;
        }
        .savebtn
        {
            margin-left:200px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            margin-bottom: 100px;
            background-color: #663399;
            color: white;
        }
        .divs
        {
            position: absolute;
            border: 3px solid #663399;
            width: 1000px;
            height: 1100px;
            margin-top: 15px;
            margin-bottom: 50px;
            margin-left: 270px;
            border-radius: 50px;
            background-image:linear-gradient(to right, #B2fef1,#0ed2f7);        

        }
        .gobtn
        {
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            margin-top: 20px;
            background-color: #663399;
            color: white;
        }
        .stimg
        {
            margin-bottom: 0px;;
            height: 150px;
            width: 150px;
            border-radius: 50%;
        }

        </style>
        <script>    
        function check()
        {
            var gen= "<?php echo $row['gender'];?>";    
            if(gen=="Male")
            {
                document.getElementById("m").checked=true;
                
            }
            if(gen=="Female")
            {
                document.getElementById("f").checked=true;
                
            }

        }


    </script>
    <body onmouseenter="check()">
        
    <?php include "./head.php"?>
        <p class="pt">Update Student</p>
        <hr class="hr">
        <div class="divs">
            <form method="post" enctype="multipart/form-data" action="edit.php">

        <table class="tab">

             <tr>
                 <td><img src="<?php echo $row['studphoto'];?>" class="stimg"></td>
             </tr>
                
        <tr>
                <td>Username Name</td>
                <td><input type="text" class="indesign" required="true" name="unm" 
                    value="<?php echo $row['unm'];?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" class="indesign" required="true" name="pass" 
                value="<?php echo $row['pass'];?>"5+3></td>
            </tr>
        
            <tr>
                <td></td>
                <td  height= "30px" width= "500px" ><input type="text" name="enno" class="indesign" required="true" 
                value="<?php echo $row['enno'];?>"></td>
                </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" class="indesign" required="true" name="fname" 
                value="<?php echo $row['fname'];?>"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" class="indesign" required="true" name="lname" 
                    value="<?php echo $row['lname'];?>"></td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td><input type="text" class="indesign" required="true" name="mname"
                    value="<?php echo $row['mname'];?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" style="width:500px;height:100px" required="true" name="addr"
                    value="<?php echo $row['addr'];?>"></td>
        </tr>
        <tr>
        <tr>
                <td>Gender</td>
                <td><label class="ll"><input id="m" type="radio" value="Male" name="gen">Male</label>
                <label class="ll"><input type="radio" id="f" value="Female" name="gen">Female</label></td>

        </tr>
        <tr>
            <td>Birthday</td>
                <td><input type="date" min="1900-01-01" max="2005-01-01" name="birdate"
                     placeholder="Enter Birthdate" required="true" style="height: 30px; width: 165px;"></td>
        </tr>
        <tr>
                <td>Age</td>
                <td><input type="number" required="true" name="age" min="15" max="25" value="<?php echo 
                    $row['age'];?>" required="true" name="age" ></td>
        </tr>
        <tr>
                <td>Mobile Number:</td>
                <td><input type="text"  required="true" name="mob" require="true" name="mob" 
                    pattern="[6-9]{1}[0-9]{9}" value="<?php echo $row['contno'];?>" ></td>
        </tr>
        <tr>
                <td>Course:</td>
                <td><select style="width:130px;height:25px;" required="true" name="course"> 
                    <option>BCA</option>
                    <option>BBA</option>
                    <option>BCOM</option>
                </select>
                </td>
        </tr>
        <tr>
                <td>Semester</td>
                <td><input name="sem" value="<?php echo $row['sem'];?>" required="true" type="number" min="1" max="6" style="width: 130px;"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="image" required></td>
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        </tr>
        
        <tr>
            <td>
            <input type="submit" class="gobtn" value="Update">
            </td>
        </tr>
        </table>
        </form>
        </div>
    </body>
</html>
                
           
            
           