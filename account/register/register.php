<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/doan/Lam/css/cssregister.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body>
  <div class="header">

    <div class="navi">
      <div class="lienket"><a href="/Khoa/trang chủ.html" class="trangchinh">
        <span class="space">LUMIA</span><br><span class="space-1">ACCOUNT</span></a></div>
    </div>

    <div class="container">
      <div class="toggle">
          <div class="toggle-button" onclick="AnimatedToggle()"></div>
      </div>
  </div>

  </div>
   
            <div class="Login">
          
              <div class="login__container">
                <div class="hdangnhap">SIGN UP</div>
                <form id="formdangky">

                <input type="hidden" id="action" value="register">
                  <div class="username" id="thongtin">USERNAME:</div>
                  <span class="icon" id="usern"><i class="fa-solid fa-user"></i></span>
                  <input type="text" class="nhapEmail" size="50px" id="username">
                  <div id="checkusername" class="warn"></div>

                  <div class="password" id="thongtin">PASSWORD:</div>
                  <span class="icon" id="icon-lock"><i class="fa-solid fa-lock" onclick="change()" ></i></span>
        <span class="icon icon-hidden" id="icon-hidden"><i class="fa-solid fa-lock-open" onclick="change()"></i></span>
                  <input type="password" class="nhapUsername" size="50px" id="password">


                  <div class="checkPass" id="thongtin">Confirm Password</div>
                  <span class="icon" id="icon-lockk"><i class="fa-solid fa-lock" onclick="changee()" ></i></span>
                  <span class="icon icon-hiddenn" id="icon-hiddenn"><i class="fa-solid fa-lock-open" onclick="changee()"></i></span>
                  <input type="password" id="checkPassword" size="50px">
                  <div id="checkconfPass"></div>

                  <div id="check" class="warn"></div> 
                  
                </form><br>
                <div class="footer">
                  <div class="link">Already a account? <a class="right" id="login__signInButton" href="/doan/account/login/login.php">Log in</a></div>
                  <button type="submit" id="buttonDangnhap" class="signin">REGISTER</button>
                  <?php require 'script.php'; ?>
            </div>
          
              </div>
             
              
            
</body>
<script src="/doan/Lam/js/jsregister.js"></script>
</html>