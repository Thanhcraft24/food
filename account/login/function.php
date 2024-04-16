

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($connect,"qltk");
// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["pass"];

  if(empty($username) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM taikhoan2 WHERE tentk = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  $query = "INSERT INTO taikhoan2 VALUES('$username', '$password')";
  mysqli_query($conn, $query);
  echo "Registration Successful";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["pass"];

  $user = mysqli_query($conn, "SELECT * FROM taikhoan2 WHERE tentk = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row[1]){
      echo "Login Successful";
      $_SESSION["login"] = true;
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User Not Registered";
    exit;
  }
}
?>