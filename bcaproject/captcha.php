<?php
    $temp=false;
    if(isset($_GET['ck'])){
        $temp=$_GET['ck'];
    }
?>
<html>
    <head>
        <title>home page </title>
        <style>
            .cap
            {
                font-size: 25px;
                width: 120px;
                margin-top: -25px;
    
            }
            .hiddendiv
            {
                background-color:#4575db;
                height:300px;
                width:300px;
                margin-left: 20px;
                margin-top: 60px;
                padding-left: 80px;
                border-radius:50px;
                border:2px solid black;
                
            }
        </style>
        <script>
            function checkup()
            {
               var s1=document.getElementById("sub1").style.backgroundColor="black";
               
    
            }
            function rcheckup()
            {
                var s1=document.getElementById("sub1").style.backgroundColor="#57b846";
            }
            function capchack()
            {
                var cap=document.getElementById("cap").value;
                var capck=document.getElementById("capcheck").value;
                if(cap!=capck)
                {
                    alert("Plese Enter Valid Captcha!!!");
                    location.reload()
                }
                else{
                    alert("SUCCESS");
                }
            } 
            function randomcol()
            {
                var x=Math.floor(Math.random()*256);
                var y=Math.floor(Math.random()*256);
                var z=Math.floor(Math.random()*256);
                var bgColor="rgb(" + x +"," + y +"," + z +")";
                var forColor="rgb(" + z +"," + x +"," + y +")";
                console.log(bgColor);
                document.getElementById("cap").style.backgroundColor=bgColor;
                document.getElementById("cap").style.color=forColor;
            }
        </script>
    </head>
    <body onload="randomcol()">
            <div class="hiddendiv">
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
            <p  style="font-size: 25px;width: 50px">Captcha:</p>
            <br/>
            <input id="cap" type="text" value="<?php echo $str;?>"  class="cap" disabled="true">
            <br/><br/><br/>
            <input id="capcheck" type="text" name="captchen" required="true" 
                placeholder="Enter Captcha Code" style="height: 50px;
                width: 160px;
                font-size: 16px;
                height: 35px;
                margin-top: -10px;
                border-radius: 10px;
                background-color:whitesmoke">
            <input type="submit" 
                    name="submit"
                    id="sub1"
                    onmouseenter="checkup()"
                    onmouseleave="rcheckup()"
                    onclick="capchack()"
                    style="position: absolute;
                   margin-top: 60px;
                    height: 50px;
                    width: 130px;
                    color: white;
                    margin-left: -160px;
                    font-size: 30px;
                    border-radius: 5PX;
                    cursor:pointer;
                    background-color: #57b846;"
                    value="Submit" >
        </div>
    </form>
             
    </body> 
</html>