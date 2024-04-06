<?php
$a=$_GET['id'];
$con=mysqli_connect("localhost","root","","bcapro");
$sql="select *from stud where id=$a";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: #e8f5ff;
    font-family: Arial;
    overflow: hidden;
}

/* NavbarTop */
.top {
    background-color: #fff;
    border-radius: 15px;
    color: #333;
    box-shadow: 0px 4px 8px 0px grey;
    height: 70px;
}

.title {
    font-family: 'Dancing Script', cursive;
    position: absolute;
    left: 45%;
}



.main {
    margin-top: 2%;
    margin-left: 29%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

h2 {
    color: #333;
    font-family: 'Segoe UI';
    font-size: 24px;
    margin-bottom: 10px;
}
tr
{
    padding: 20px;
}

.info{
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

table{
    border: none;
    font-size: 20px;
    height: 470px;
    width: 80%;
}
.img
{
    
    height: 200px;
    margin-left: 150px;
    padding-top: 20px;
    position: absolute;
    top:25%;
    width: 250px;
}
.stimg
{  
    height: 200px;
    width: 200px;
    border-radius: 100px; 
}


</style>

    </head>
<body>
    <!-- Navbar top -->
    <div class="top">
        <div class="title">
            <h1>Profile</h1>
        </div>

    </div>
    <div class="main">
        
        <h2>IDENTITY</h2>
        
        <div class="info">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                <tr>
                            <td>First Name</td>
                            <td>:</td>
                            <td><?php echo $row['fname'];?></td>
                        </tr>
                        <tr>
                            <td>Middle Name</td>
                            <td>:</td>
                            <td><?php echo $row['mname'];?></td>
                        </tr>
                        <tr>
                            <td>last Name</td>
                            <td>:</td>
                            <td><?php echo $row['lname'];?></td>
                        </tr>
                        
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $row['addr'];?></td>
                            
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $row['gender'];?></td>
                        </tr>
                        <tr>
                            <td>Birthdate</td>
                            <td>:</td>
                            <td><?php echo $row['birthdate'];?></td>
                        </tr>
                        <tr>
                            <td>Age</td>
                            <td>:</td>
                            <td><?php echo $row['age'];?></td>
                        </tr>
                        <tr>
                            <td>Mobile Number:</td>
                            <td>:</td>
                            <td><?php echo $row['contno'];?></td>
                        </tr>
                        <tr>
                            <td>Course</td>
                            <td>:</td>
                            <td><?php echo $row['course'];?></td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>:</td>
                            <td><?php echo $row['sem'];?></td>
                        </tr>
                        
                        
                    
                </table>
            </div>
        </div>
    </div>
    <div class="img">
        <img src="<?php echo $row['studphoto'];?>" class="stimg">      
    </div>
        
    <!-- End -->
</body>
</html>