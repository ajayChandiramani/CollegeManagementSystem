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
            margin-top: 60px;
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
        .divs
        {
            position: absolute;
            border: 3px solid #663399;
            width: 1000px;
            height: 900px;
            margin-top: 15px;
            margin-bottom: 50px;
            margin-left: 250px;
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



    </style>
    <script>
        function checkletter(a)
        {
            var letter=/^[A-Za-z]+$/;
            if(a.match(letter))
            {

            }
            else
            {
                alert("You can only enter letter!!please Remove all letter");
                  
            }
        }

    </script>
    <body>
        <?php include "./head.php"?>
        <p class="pt">Add New Student</p>
        <hr class="hr">
        <div class="divs">
            <form method="post" enctype="multipart/form-data" action="insert.php">

        <table class="tab">
           
        <tr>
                <td>Username Name</td>
                <td><input type="text" class="indesign" required="true" name="unm" 
                        placeholder="Enter user name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" class="indesign" required="true" name="pass" 
                        placeholder="Enter password"></td>
            </tr>
            
            
            <tr>
                <td>En. no.</td>
                <td height= "30px" width= "500px" ><input type="number" name="enno"  class="indesign" required="true" 
                        placeholder="Enter Enrolment number"></td>
                </tr>
            <tr>
                <td>First Name</td>
                <td><input type="text" class="indesign" required="true" name="fname" id="fname"
                        placeholder="Enter First name" onkeyup="checkletter(this.value)"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" class="indesign" required="true" name="lname" onkeyup="checkletter(this.value)"  placeholder="Enter Last Name"></td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td><input type="text" class="indesign" required="true" name="mname"
                     placeholder="Enter Middle Name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea required="true" name="addr" style="width:500px;height:100px"></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><label class="ll"><input checked type="radio" value="Male" name="gen">Male</label>
                <label class="ll"><input type="radio" value="Female" name="gen">Female</label></td>

            </tr>
            <tr>
                <td>Birthday</td>
                <td><input type="date" min="1900-01-01" max="2005-01-01" name="birdate"
                     placeholder="Enter Birthdate" required="true" style="height: 30px; width: 165px;"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" required="true" name="age" min="15" max="25" required="true" name="age" ></td>
            </tr>
            <tr>
                <td>Mobile Number:</td>
                <td><input type="text"  required="true" name="mob" require="true" name="mob" 
                    pattern="[6-9]{1}[0-9]{9}" ></td>
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
                <td><input name="sem" required="true" type="number" min="1" max="6" style="width: 130px;"></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr>
                <td>
                <input type="submit" class="gobtn" value="Add">
                </td>
            </tr>
        </table>
        </form>
        </div>
    </body>
</html>