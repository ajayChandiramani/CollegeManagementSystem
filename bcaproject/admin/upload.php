//upload.php

        <?php include "./head.php"?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <style>
            body {
        background-image: linear-gradient(#b993d6,#8ca6db);
    font-family: Arial;
    overflow: hidden;
            }
            .title {
            font-family: 'Dancing Script', cursive;
            margin-left: 35%;
        }
     
        .hw
        {
            border: 3px solid #663399;
            height: 550px;
            width: 80%;
            border-radius: 20px;
            margin-left: 150px;
    		background-color: rgba(255, 255, 200,0.200);
            margin-top: 20px;
        }
        .had
        {
            font-weight: 700;
            font-size: 18px;
            padding-left: 350px ;
        }
        td
        {
            width: 200px;
            padding: 10;
        }
        textarea
        {
            font-size: 20px;
        }
        b
        {
            font-size: 18px;
        }
        .post
        {
            margin-left: 50%;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            margin-top: 20px;
            background-color: #663399;
            color: white;
        }
        input:focus,textarea:focus
        {
            background-color: #5bc0de;
            border: 3px solid #663399;
        }
        .viewbtn
        {
            margin-left: 80%;
            cursor: pointer;
            font-size: 20px;
            border-radius: 10px;
            height: 40px;
            width: 100px;
            margin-top: 20px;
            background-color: #5bc0de;
            color: white;

        }



        </style>

        <script>

        </script>
    </head>
        <body>
            
        <a href='viewhw.php'><input type="button" value="View all" class="viewbtn"></a>
    <div class="hw">
        <div class="title">
            <h1>Upload HomeWork</h1>
        
    </div>
        <form action="uploadperform.php" method="post">
        <table>
            <?php
            $date=date("d-m-Y");?>
        <tr>
            <td><label class="had">Post Date:- </label></td>
            <td><?php echo "<b>".$date  ."</b>";?><br></td>
        </tr>
        <tr>
            <td><label class="had">Submission&nbspDate:- </label></td>
            <td><input type="date" name="subdate" required="true"></td>
        </tr>   
        <tr>
            <td><label class="had">Course:-  </label></td>
            <td><select name="course">
                    <option>BCA</option>
                    <option>BBA</option>
                    <option>BCOM</option>
            </select>
            </td>
        </tr>
        
        <tr>
            <td><label class="had">Subject:-  </label></td>
            <td><input type="text" name="subject" required="true"></td>
        </tr>
        <tr>
            <td><label class="had">Description:-  </label></td>
            <td><textarea required="true" name="discri" 
                style="width:450px;height:200px"></textarea><br>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" class="post" value="Post"></td>
        </tr>
        </table>
        </form>
    </div>
        </body>
</html>
