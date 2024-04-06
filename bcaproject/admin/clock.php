<!DOCTYPE html>
<html lang="en">
 
<head>  

 
    <style>
        #clock {
            font-size: 120px;
            width: 900px;
            margin: 100px;
            margin-left:0px;
            color:black;
            text-shadow: 5px 4px 5px #47c9af;
            text-align: center;
        }
    </style>
</head>
 
<body>
    <div id="clock">8:10:45</div>
 
    <script>
        setInterval(showTime, 1000);
        function showTime() {
            let time = new Date();
            let hour = time.getHours();
            let min = time.getMinutes();
            let sec = time.getSeconds();
            am_pm = "AM";
 
            if (hour > 12) {
                hour -= 12;
                am_pm = "PM";
            }
            if (hour == 0) {
                hr = 12;
                am_pm = "AM";
            }
 
            hour = hour < 10 ? "0" + hour : hour;
            min = min < 10 ? "0" + min : min;
            sec = sec < 10 ? "0" + sec : sec;
 
            let currentTime = hour + ":"
                + min + ":" + sec + am_pm;
 
            document.getElementById("clock").innerHTML = currentTime;
        }
 
        showTime();
    </script>
</body>
 
</html>