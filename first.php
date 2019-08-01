<?php 

echo "<pre>";
print_r($_FILES);
$name=$_FILES['pdf_file']['tmp_name'];
move_uploaded_file($name,$_FILES['pdf_file']['name']);
exit;
?>