<?php
session_start(); 

if(!isset($_SESSION['unm']))
{
    header("Location:/bcaproject/index.php");
}
?>
<html>
    <head>
        <title>admin page</title>
    </head>
    <style>
        
    .message
    {
        background-color: #d2efba;
        margin-left: 200px;
        margin-right: 200px;
        border-radius: 8px;
        font-size: 20px;
        padding-left: 50px;
        padding-top: 20px;
        padding-bottom: 20px;
        opacity: 90%;
    }
    .button
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
    .img
    {
        height: 400px;
        width: 400px;
        margin-top: 120px;
        margin-left: -450px;
        position: absolute;
    }
    body
    {
   background-image: linear-gradient(#b993d6,#8ca6db);
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }
    .footer
    {
        margin-top: 60px;
    }


    </style>
    <body>
        <?php include "./head.php" ?>
        <div  class="message"><?php echo "Hello ".$_SESSION["unm"]." You login as Admin!!! :)";?>
            
        </div>
        	
        <input type="submit" class="button" value="Today's attendance">
        <img src="/bcaproject/statten.jpeg" class="img">

        </div>
        <div style="
            height: 300px;
            width: 700px;
            margin-left: 600px;">
            <?php include "./clock.php" ?>

        </div>
        <footer>
            <div class="footer">
                <?php include "../footer.php";?>
            </div>
        </footer>
        
    </body>
</html>