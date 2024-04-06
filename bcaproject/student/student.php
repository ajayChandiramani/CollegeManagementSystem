<?php include "./head.php";
session_start(); 
if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .main
            {   
                width: 600px;
                height: 400px;
                margin-bottom: 250px;
                margin-top: 150px;
            }
            .time
            {
                margin-left:600px;
                margin-top: -500px;
            }
            .dd
            {
                border-radius: 10px;
                height: 100px;
                margin-top: 200px;
                text-shadow: 3px 2px 3px #47c9af;
                background:rgb(196, 196, 196);
                font-size: 25px;
                font-weight: 500;
                text-align: center;
                font-family: 'Dancing Script', cursive;
                padding-top: 40px;
            }
            .content
            {
                height: 400px;
                width: 400px;
            }
            .sub
            {
                width: 150px;
                height: 50px;
                transform: skew(30deg);
                background-color: rgb(54, 54, 155);
                margin-left: 130px;
                margin-top: 20px;
                border-radius: 5px;
                font-weight: bolder;
                font-size: 40px;
                text-align: center;
                box-shadow: 5px 5px 30px black;
                color: white;
                
            }
        </style>


    </head>
    <body style="background-image: linear-gradient(to right,#2e3192,#1bffff);">
        <div class="main">
           <p style="padding-left: 70px;
            padding-top: 70px;
            font-family: courier new;
           font-size: 100px;
           font-weight: bolder;
           color: white;"> AHK University</p>

        </div>
        <div class="time">
        <?php include "../admin/clock.php";?>
        </div>
        <div class="img">
        </div>
        <div class="dd">
            <span>AHK University provides a harmonious environment and learning opportunities  to its students 
                regardless of their gender, socioeconomic background, religious beliefs and regional differences :)</span>
        </div>
            <p style="
            text-align: center;
            font-size: 40px;
            font-weight: 600;
            font-family: 'Dancing Script', cursive;"> Courses Provide By Us</p>
        <div style="padding: 10px;
                height: 355px;
                width: 400px;
                border-radius: 10px;
                background-color: rgb(196, 196, 196);
                margin-left: 50px;">
                <div class="sub">BCA</div>
                <p style="font-size: 22px;
                        padding:15px;
                        ">
                Bachelor of Computer Applications (B.C.A.)
                Bachelor of Computer Applications is a three year undergraduate degree 
                program for candidates wishing to develop into the world of Computer 
                languages. It's cover basic and advanced programming language, 
                Software Engineering, Object Oriented Programming, World-Wide-Web
                 and many more.</p>
        </div>
        <div style="padding: 10px;
            height: 355px;
            width: 400px;
            border-radius: 10px;
            margin-left: 550px;
            background-color: rgb(196, 196, 196);
            margin-top: -370px;">
                <div class="sub">BBA</div>
                <p style="font-size: 22px;
                        padding:15px;
                        ">
                Bachelor of Business Administration (B.B.A.)
                Bachelor of Business Administration degree is professional undergraduate
                 course in Business Management and it's a one of the most popular bachelor degree programs.
                  Help to develop the student's practical, managerial and communication skills,
                   and business decision-making capability.</p>
        </div>
        <div style="padding: 10px;
            height: 355px;
            width: 400px;
            border-radius: 10px;
            margin-left: 1050px;
            background-color: rgb(196, 196, 196);
            margin-top: -380px;">
                <div class="sub">BCOM</div>
                <p style="font-size: 22px;
                        padding:15px;
                        ">
                    Bachelor of Commerce (B.Com.)
                    The Bachelor of Commerce degree provides wide range of managerial skills, while building competence in a particular area of business. Students are exposed to general business principles, taking courses in accounting, finance, income tax, investment banking, etc.
                </p>
        </div>
     </body>
     <footer>
         
        <?php include "./footer.php"?>
        
                
             </footer>
            

</html>

