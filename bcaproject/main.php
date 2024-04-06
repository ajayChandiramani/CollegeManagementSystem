<html>
    <head>
        <title>home page </title>
        <script>
            function checkup()
            {
               var s1=document.getElementById("sub1").style.border="3px solid black";
               
    
            }
            function rcheckup()
            {
                var s1=document.getElementById("sub1").style.border="1px solid black";
            }
            function capchack()
            {
                var cap=document.getElementById("cap").value;
                var capck=document.getElementById("capcheck").value;
                //alert(cap);
                //alert(capck);
                if(cap==capck)
                {
                   // alert("m");
                    document.getElementById("sub1").disabled=false;
                }
                if(cap!=capck)
                {
                   // alert("f");
                    document.getElementById("sub1").disabled=true;
                    alert("Plese Enter Valid Captcha!!!");
                }
                
            }
        </script>
    </head>
    <body style="margin-top: 0px;
        margin-bottom: 0px;
        margin-left: 0px;
        margin-right: 0px;">
    <style>
        .cap
        {
            font-size: 25px;
            color: white;
            width: 120px;
            margin-left: 150px;
            margin-top: -55  px;

        }
    </style>
        <img src="mark.png" style="position: absolute;
        display: flex;
        margin-top: 50px;
        height: 100px;
        margin-left: 300px;
        opacity: 80%;">
        <form method="post" action="process.php">

    
        <div style="height: 80px;
            width: 100%;
            background-color: black;
           color: white;">

            <p style="font-family: Perpetua Titling MT;
                font-size: 30px;
                padding-top: 25px;
                padding-bottom: 0px;
                padding-left: 600px;">
                AHK university
            </p>
        </div>
        <div style="height: 660px;
            width: 27%;
            
            margin-left: 10px;
            border-right: 3px solid goldenrod;
            background-color: lightgoldenrodyellow;
            ">
            <p style="
                font-family:Segoe Marker;
                font-size: 40px;
                padding-top: 20px;
                padding-left: 40px;
                color: blue;
                margin-top: 2px;
                margin-bottom: 5px;">Login
            </p>
            <hr style="height: 1px;
                background-color: black;
                position: relative;
                padding-top: 0px;
                margin-top: 0px;"
            >
            <p style="font-family: ms ui Gothic;
                font-size: 30px;
                padding-top: 0px;
                padding-bottom: 0px;
                padding-left: 40px;">Login As...
            </p>
            <select 
                name="list" 
                style="background-color: darkmagenta;
                margin-top: -10px;
                height: 40px;
                width: 300px;
                margin-left: 40px;
                color: yellow;
                font-size: 20px;
                cursor: pointer;
                border-radius: 10px;" >
                    <option  style="font-size: 18px;">Admin</option>
                    <option style="font-size: 18px;">Teacher</option>
                    <option  style="font-size: 18px;">Student</option>
            </select>
            <p style="font-family: Lucida Handwriting;
                padding-left: 40px;
                font-size: 23px;
                ">Username:
            </p>
            <input type="text" name="username" required="true" 
                placeholder="Enter username" style="height: 50px;
                width: 300px;
                margin-left: 40px;
                margin-top: -10px;
                border-radius: 10px;
                font-size: 25px;
                background-color:whitesmoke; "
            >
            <p style="font-family: Lucida Handwriting;
                padding-left: 40px;
                font-size: 23px;">Password:
            </p>
            <input type="password" name="password" required="true"
             placeholder="Enter your password" style="height: 50px;
                width: 300px;
                margin-left: 40px;
                margin-top: -10px;
                border-radius: 10px;
                font-size: 25px;
                background-color:whitesmoke ">
            <?php
                $a = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $str = '';
                $b=rand(0,255);
                $c=rand(0,255);
                $d=rand(0,255);
                for($i=1;$i<=6;$i++)
                {
                    $str = $str.substr($a,rand(0,35),1);
                }
            ?>
             <p  style="font-size: 25px; padding-left:40px;width: 50px">Captcha:</p>
             <input id="cap" type="text" value="<?php echo $str;?>" class="cap" disabled="true">
             <input id="capcheck" type="text" name="captchen" required="true" onblur="capchack()"
            placeholder="Enter Captcha Code" style="height: 50px;
            width: 160px;
            font-size: 16px;
            height: 35px;
            margin-left: 40px;
            margin-top: -10px;
            border-radius: 10px;
            background-color:whitesmoke">
            <input type="submit" 
                    name="submit"
                    id="sub1"
                    onmouseenter="checkup()"
                    onmouseleave="rcheckup()"
                    style="position: absolute;
                   margin-top: 60px;
                    height: 50px;
                    width: 130px;
                    color: white;
                    margin-left: -160px;
                    font-size: 30px;
                    cursor:pointer;
                    background-image:linear-gradient(to right, #4e91e3 0%,#58d9d7 51%,#77a1d3 100%);"
                    value="Submit" >

            
            </div>
        <img src="student.jpg" style="position: absolute;
            display: flex;
            margin-top: -662px;
            margin-left: 426px;
            height: 665px;
            width: 1092px;">
    </form>

    </body>  
</html>