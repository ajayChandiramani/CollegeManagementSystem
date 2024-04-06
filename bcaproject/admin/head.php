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
            margin-left: 450px;
            
        }
    </style>
</head>
    <script>
        function ajajj()
        {
            var jv="<?php echo $file;?>";
           if(jv=="admin.php")
            {
                document.getElementById("home").style.backgroundColor="#47c9af";
                document.getElementById("home").style.borderRadius="40px";
                document.getElementById("home").style.color="red";
            }
            if(jv=="student.php")
            {
                document.getElementById("student").style.backgroundColor="#47c9af";
                document.getElementById("student").style.borderRadius="40px";
                document.getElementById("student").style.color="red";
            }
            if(jv=="attendance.php")
            {
                document.getElementById("atten").style.backgroundColor="#47c9af";
                document.getElementById("atten").style.borderRadius="40px";
                document.getElementById("atten").style.color="red";
            }
            if(jv=="upload.php")
            {
                document.getElementById("upload").style.backgroundColor="#47c9af";
                document.getElementById("upload").style.borderRadius="40px";
                document.getElementById("upload").style.color="red";
            }
            if(jv=="timetable.php")
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
                    <a id=home href="admin.php">Home </a>
                </li>
                <li><a  id=student href="student.php">Student</a></li>
                <li><a id=atten href="attendance.php">Attendance</a></li>
                <li><a id=upload href="upload.php">Upload Homework</a></li>
                <li><a id=tt href="timetable.php">Time Table</a></li>
                <li><a id=fd href="feedback.php">Feedbacks</a></li>
                <a href="logout.php"><input type="button" class="out" onclick="out()" value="Logout"></a>
            </ul>
        </nav>   
    </header>
</body>

</html>