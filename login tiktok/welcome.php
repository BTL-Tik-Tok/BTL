<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lamlancuoi1/login/stylesindex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

</head>
<body>
    <div id="main">
    <!-- header-->
    <div id="header">
        <a class="navbar-brand" href="#">
            <img id="img" src="/lamlancuoi1/login/img/tiktok.jpg" alt="TikTok" href="" >
        </a>  
        <!-- tìm kiếm -->
        <span class="search-bt">
            <span id="input-group">
                <input class="search" type="text"  placeholder="tìm kiếm tài khoản và video" >
                <!-- <div class="input-group-text" id="btnGroupAddon"><i class="bi bi-search"></i></div> -->
                <button class="img">
                    <img src="/lamlancuoi1/login/img/seach.png" alt="" height="15px">
                </button>
            </span>
        </span>
        <!-- tải lên -->
        <span class="lookup">
            <a class="tai" href="/lamlancuoi1/upload/upload.php">Tải lên</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>
            <span class="bt-set">
                <i id="menu" class="bi bi-three-dots-vertical"></i>
                <ul class="nav">
                <li><a href="">Tiếng Việt</a></li>
                <li><a href="">Phản hồi và trợ giúp</a></li>
                <li><a href="">Phím tắt bàn phím</a></li>
                </ul>
            </span>              
        </span>



    </div>
    <!-- slider -->
    <div id="slider">
        <div class="top">
            <button class="bt-home" >
                <a class="home" href=""><i id="img" class="bi bi-house"></i><h1 class="font">Dành cho bạn</h1></a>
            </button>
                <button class="bt-home" >
            <a class="follow" href=""><i class="bi bi-people"></i><h2 class="font">Đang Follow</h2></a>
        </button>
            <button class="bt-home" >
            <a class="live" href=""><i class="bi bi-camera-video"></i><h2 class="font">Live</h2></a>
        </button>
        </div>
        
        <div class=end>
            <a class="end-fon">Giới thiệu</a>
            <a class="end-fon">bảng tin</a>
            <a class="end-fon">Liên hệ</a>
            <a class="end-fon">Sự nghiệp</a>
            <a class="end-fon">ByteDance</a>
            <a class="end-fon">Quảng cáo</a>
            <a class="end-fon">Trợ giúp</a>   
        
        </div>
        <span class="tt">
            <a class="end-bt">© 2022 TikTok</a>
        </span>
        
    </div>

<!-- content -->
    <div id=content>
        <div>
            
        </div>

    </div>
</div>
    
    
</body>
</html>