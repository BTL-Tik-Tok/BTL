<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tải lên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/BTL/upload/style.css">
</head>
<body>
<div id="main">
    <div id="header">
        <a class="navbar-brand" href="">
            <img id="img" src="/BTL/img/tiktok.jpg" alt="/BTL/index.html" href="/BTL/index.html" >
        </a>  
        <span class="search-bt">
            <span id="input-group">
                <input class="search" type="text"  placeholder="tìm kiếm tài khoản và video" >
                <!-- <div class="input-group-text" id="btnGroupAddon"><i class="bi bi-search"></i></div> -->
                <button class="img">
                    <img src="/BTL/img/search.png" alt="">
                </button>
            </span>
        </span>
        <span class="lookup">
            <a class="tai" href="#">Tải lên</a>
        </span>
    </div>
    <div id="conten">
        <h2>Tải video lên</h2>
        <h3 class="net">Đăng video vào tài khoản của bạn</h3>
        <div class="tai-len">
            <!-- <div class="tai-text">Chọn tệp tin tải lên</div>
            <div>MP4 Hoặc webM</div>
            <div>Tối đa 180 giây</div>
            <div>ít hơn 1GB</div> -->
            <div class="chon">
                <form method="post" action="" enctype='multipart/form-data'>
                <input type='file' name='file' />
                <input type='submit' value='Upload' name='upload'>
                </form>
                <?php require 'action.php';?>

                <?php require 'view.php';?>
            </div>
            
        </div>
         <button  class="tai" href="/BTL/index.html">Đăng</button>
    </div>


    <div class="text-secondary p-3" style="background-color: black;">
        <div class="dropdown col-md-2  ">
          <a class="btn btn-secondary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>      
          </ul>
        </div>
        <p class="text-end cls1">
           @ 2021 TikTok
        </p>
    </div>
</div>    
</body>
</html>
