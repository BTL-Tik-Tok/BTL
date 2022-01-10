<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "data";

$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['upload'])){


$maxsize = 104857600; // 5MB


$name = $_FILES['file']['name'];
$target_dir = "videos/";
$target_file = $target_dir . $_FILES["file"]["name"];

$videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$extensions_arr = array("mp4","avi","3gp","mov","mpeg");

if( in_array($videoFileType,$extensions_arr) ){

if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
echo "File quá lớn! Vui lòng upload file nhỏ hơn!";
}else{

if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

$query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

$query = mysqli_query($con,$query);
if($query)
{
echo "Upload thành công.";
}
}
}

}else{
echo "Lỗi định dạng";
}

}
?>
