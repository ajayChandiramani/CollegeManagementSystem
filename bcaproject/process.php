<?php
session_start(); 
$file=$_POST['list'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","","bcapro");
        
if($file=="Teacher")
{
    $sql="select *from teacher where username='$uname' && password='$pass'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_object($result))
    {
        $u=$row->username;
        echo $u."<br>";
        $p=$row->password;
        echo $p;
    }
    if($uname==$u&&$pass==$p)
    {
        if(empty($uname)&&(empty($pass)))
        {
            header("Location:/bcaproject/index.php");
            
        }
        else
        {
            header("Location:/bcaproject/teacher/teacher.php"); 
        }

    } 
    else
    {
        header("Location:/bcaproject/index.php");
    }
}
else if($file=="Admin")
{
        $sql="select *from admin where username='$uname' && password='$pass'";
        $result=mysqli_query($con,$sql);
        while($row=mysqli_fetch_object($result))
        {
            $u=$row->username;
            echo $u."<br>";
            $p=$row->password;
            echo $p;
               
        }
        if($uname==$u&&$pass==$p)
        {
            if(empty($uname)&&(empty($pass)))
            {
                header("Location:/bcaproject/index.php");
            }
            else
            {
                
                $_SESSION['unm']=$uname;
                header("Location:/bcaproject/admin/admin.php"); 
                  

                
            }

        } 
        else
        {
            header("Location:/bcaproject/index.php?ck=1");
        }
}
else if($file=="Student")
{
    $sql="select *from temp where unm='$uname' && pass='$pass'";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_object($result))
    {
        $u=$row->unm;
        echo $u."<br>";
        $p=$row->pass;
        echo $p;
           
    }
    if($uname==$u&&$pass==$p)
    {
        if(empty($uname)&&(empty($pass)))
        {
            header("Location:/bcaproject/index.php");
  
        }
        else
        {
            $_SESSION['unm']=$uname;
            header("Location:/bcaproject/student/student.php"); 
        }

    } 
    else
    {
        header("Location:/bcaproject/ragistration.php");
    }
}
else
{
    header("Location:/bcaproject/index.php");
}

?>