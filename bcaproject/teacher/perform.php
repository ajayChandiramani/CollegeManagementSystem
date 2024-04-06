<?php
$uniq=time().uniqid(rand()).'.jpg';
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$folder="studentpic/".$uniq;
move_uploaded_file($file_tmp,"../admin/studentpic/".$uniq);
?>