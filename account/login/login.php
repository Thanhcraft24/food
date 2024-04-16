<!DOCTYPE html>
<html lang="en">
<head>
<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/doan/Lam/css/csslogin.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body>
  <a href="../../Khoa/trang chủ.html"></a>
  <div class="container">
    <div class="toggle">
        <div class="toggle-button" onclick="AnimatedToggle()"></div>
    </div>
</div>

    <div class="login__container">
    <input type="hidden" id="action" value="login">
      <div class="hdangnhap">SIGN IN</div>
      <form method='post' action=''>
        <div class="thongtin">USERNAME:</div>

        <span class="icon" id="usern"><i class="fa-solid fa-user"></i></span>
        
        <input type="text" class="inputusername" size="50px" name="username">

        <div class="thongtin">PASSWORD:</div>
        <span class="icon" id="icon-lock"><i class="fa-solid fa-lock" onclick="change()" ></i></span>
        <span class="icon icon-hidden" id="icon-hidden"><i class="fa-solid fa-lock-open" onclick="change()"></i></span>
        <div><input type="password" class="inputpassword" size="50px" name="pass"></div>

        <div id="check"></div> 
        <div class="none">
          <label><input type="checkbox" required >Remember me</label>
          <a href="/Lam/html/forgotpass.html" class="forgotpass">Forgot your password</a>
        </div>
        </form>
      <br>
      <div class="footer">
        <button name="login__signInButton" class="btnlogin">LOGIN</button>
        <div class="link">Don't have an account?<a href="/doan/account/register/register.php" class="an">Register</a></div>
        <?php require 'script.php'; ?>
      </div>

    </div>

</body>
<script src="/doan/Lam/js/jslogin.js"></script>
</html>