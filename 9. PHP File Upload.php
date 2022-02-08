<!--PROGRAMMING AND DEVELOPMENT BY AKASH KUMAR BASAK-->
<!--move_uploaded_file() function and give its all parameter-->

<form action="9. PHP File Upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="files">
<input type="submit" name="submit">
</form>
<?php
$filename = $_FILES["files"]["name"];
$temp_file = $_FILES["files"]["tmp_name"];
echo $filename.$temp_file;
move_uploaded_file($temp_file, "files/".$filename);
 ?>
