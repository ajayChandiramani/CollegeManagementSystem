<html lang="en">
<?php
    $file=basename($_SERVER['PHP_SELF']);
?>

<head>  
    
    <script>
        function out()
        {
            
            alert("are you sure!!!")
        }
    </script>
    <style>
        .navbar{

            background-color:black;
            border-radius: 30px;
            
        }
        .navbar ul
        {
            border:1px solid black;
            border-radius: 30px;
           
            overflow:auto;
        }
        .navbar li{
            float:left;
            list-style: none; 
            margin: 13px 20px;
            
        }
        .navbar li a{
            padding: 3px 3px;
            text-decoration: none;
            color: white;
            font-size: 20px;
        }
        .navbar li a:hover{
            color: red
        }
        .navbar li:hover
        {
            border-radius:40px;
            background-color: #47c9af;
        }
        .out
        {
            height: 30px;
            width: 80px;
            background-color: red;
            color: black;
            font-weight: 700;
            font-size: 15px;
            margin-top: 10px;
            border-color: white;
            border-radius: 20px;
            margin-left: 400px;
            
        }
    </style>
</head>
    <script>
        function ajajj()
        {
            var jv="<?php echo $file;?>";
           if(jv=="student.php")
            {
                document.getElementById("dash").style.backgroundColor="#47c9af";
                document.getElementById("dash").style.borderRadius="40px";
                document.getElementById("dash").style.color="red";
            }
            if(jv=="profile.php")
            {
                document.getElementById("profile").style.backgroundColor="#47c9af";
                document.getElementById("profile").style.borderRadius="40px";
                document.getElementById("profile").style.color="red";
            }
            if(jv=="viewspecificattendance.php")
            {
                document.getElementById("atten").style.backgroundColor="#47c9af";
                document.getElementById("atten").style.borderRadius="40px";
                document.getElementById("atten").style.color="red";
            }
            if(jv=="uploadmyhw.php")
            {
                document.getElementById("upload").style.backgroundColor="#47c9af";
                document.getElementById("upload").style.borderRadius="40px";
                document.getElementById("upload").style.color="red";
            }
            if(jv=="viewstudenttimetable.php")
            {
                document.getElementById("tt").style.backgroundColor="#47c9af";
                document.getElementById("tt").style.borderRadius="40px";
                document.getElementById("tt").style.color="red";
            }
            if(jv=="feedback.php")
            {
                document.getElementById("fd").style.backgroundColor="#47c9af";
                document.getElementById("fd").style.borderRadius="40px";
                document.getElementById("fd").style.color="red";
            }
            
            

        }
    </script>

<body onload="ajajj()">
    <header>
        <nav class="navbar">
            <ul>                
                <li>
                    <a id=dash href="student.php">Dashboard </a>
                </li>
                <li><a  id=profile href="profile.php">Profile</a></li>
                <li><a id=atten href="viewspecificattendance.php">Attendance</a></li>
                <li><a id=upload href="uploadmyhw.php">Upload Homework</a></li>
                <li><a id=tt href="viewstudenttimetable.php">Time Table</a></li>
                <li><a id=fd href="feedback.php">Feedback</a></li>

                <a href="logout.php"><input type="button" class="out" onclick="out()" value="Logout"></a>
            </ul>
        </nav>   
    </header>
</body>

</html>