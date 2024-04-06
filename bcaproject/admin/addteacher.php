<html>
    <head>
        <title>Admin Page</title>
     </head>
        <script>
            function check()
            {
                var pass=document.getElementById("pass").value;
                var cpass=document.getElementById("cpass").value;
                if(pass!=cpass)
                {
                    document.getElementById("btn").style.backgroundColor="red";
                    document.getElementById("cpass").focus();   
                    alert("plese check password");    
                }
                else
                {
                    document.getElementById("btn").style.backgroundColor="#663399"
                    
                }
            }
        </script>
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
        }
        .savebtn
        {
            margin-left:200px;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            background-color: #663399;
            color: white;
        }
        .divs
        {
            position: absolute;
            border: 3px solid #663399;
            width: 1000px;
            height: 600px;
            margin-top: 15px;
            margin-left: 280px;
            border-radius: 50px;
            background-image:linear-gradient(to right, #B2fef1,#0ed2f7);

        }
        input:focus
        {
            background-color: #47c9af;
        }



    </style> 
     <body>
        <p class="pt">Add New Student</p>
        <hr class="hr">
        <div class="divs">
            <form method="post" action="teinsert.php">

        <table class="tab">
           <tr>
                <td>Teacher Name</td>
                <td><input type="text" required="true" name="fname" style="height: 30px;
                    width: 162px; text-transform: uppercase;"   placeholder="First Name">
                    <input type="text" required="true" name="mname" style="height: 30px;
                    width: 162px; text-transform: uppercase;"   placeholder="Middle Name">
                    <input type="text" name="lastname"  required="true"  style="height: 30px;
                    width: 162px; text-transform: uppercase;"   placeholder="Last Name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" class="indesign" required="true" name="addr" style="text-transform:uppercase"; 
                        placeholder="Enter Address"></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" class="indesign" required="true" name="number"
                     placeholder="Enter Phone Number"></td>
            </tr>
            <tr>
                <td>Email Id</td>
                <td><input type="text" class="indesign" required="true" name="email"
                     placeholder="Enter Email Id"></td>
            </tr>
            <tr>
                <td>User name</td>
                <td><input type="text" name="uname"
                     placeholder="Enter Username" required="true" class="indesign"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" required="true" name="pass" class="indesign"
                    id="pass" placeholder="Enter Password" ></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" required="true" name="pass" class="indesign"
                    id="cpass"  placeholder="Enter Again Password" ></td>
            </tr>
            
            </table>
                    <br><br>
                    <input type="submit" value="save" id="btn" onfocus="check()" class="savebtn"></a>
            </form>
            </div>
     </body>
</html>