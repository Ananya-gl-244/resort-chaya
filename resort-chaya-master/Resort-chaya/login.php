<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login']))
{
 $emailcon=$_POST['emailcont'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
$ret=mysqli_fetch_array($query);
if($ret>0){
$_SESSION['uid']=$ret['ID'];
echo "<script> window.location.href='index.php'; </script>";
  }else{
 echo "<script>alert('Invalid Details');</script>";
 }}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style media="screen">
*,
*:before,
*:after{
padding: 0;
margin: 0;
box-sizing: border-box;
}
body{
background-color: #080710;
}
.background{
width: 430px;
height: 520px;
position: absolute;
transform: translate(-50%,-50%);
left: 50%;
top: 50%;
}
.background .shape{
height: 200px;
width: 200px;
position: absolute;
border-radius: 50%;
}
.shape:first-child{
background: linear-gradient(
  #1845ad,
  #23a2f6
);
left: -80px;
top: -80px;
}
.shape:last-child{
background: linear-gradient(
  to right,
  #ff512f,
  #f09819
);
right: -30px;
bottom: -80px;
}
form{
height: 520px;
width: 400px;
background-color: rgba(255,255,255,0.13);
position: absolute;
transform: translate(-50%,-50%);
top: 50%;
left: 50%;
border-radius: 10px;
backdrop-filter: blur(10px);
border: 2px solid rgba(255,255,255,0.1);
box-shadow: 0 0 40px rgba(8,7,16,0.6);
padding: 50px 35px;
}
form *{
font-family: 'Poppins',sans-serif;
color: #ffffff;
letter-spacing: 0.5px;
outline: none;
border: none;
}
form h3{
font-size: 32px;
font-weight: 500;
line-height: 42px;
text-align: center;
}

label{
display: block;
margin-top: 30px;
font-size: 16px;
font-weight: 500;
}
input{
display: block;
height: 50px;
width: 100%;
background-color: rgba(255,255,255,0.07);
border-radius: 3px;
padding: 0 10px;
margin-top: 8px;
font-size: 14px;
font-weight: 300;
}
::placeholder{
color: #e5e5e5;
}
button{
margin-top: 50px;
width: 100%;
background-color: #ffffff;
color: #080710;
padding: 15px 0;
font-size: 18px;
font-weight: 600;
border-radius: 5px;
cursor: pointer;
}
.social{
margin-top: 30px;
display: flex;
}
.social div{
background: red;
width: 150px;
border-radius: 3px;
padding: 5px 10px 10px 5px;
background-color: rgba(255,255,255,0.27);
color: #eaf0fb;
text-align: center;
}

.header {
    background-color: white;
    padding: 15px 0;
    border-radius:20px;
}

.header nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.header .logo h4{
    font-size: 20px;
    font-weight: 500;
    color:rgb(17, 16, 16);
}

.header .logo span {
    color:rgb(251, 249, 247);
}

.header nav ul {
    list-style-type: none;
    display: flex;
}

.header nav ul li {
    margin: 0 15px;
}


.header nav ul li a {
    color: rgb(13, 13, 13);
    font-size: 18px;
    text-decoration: none;
    font-weight: 400;
    transition: color 0.3s ease;
}

.header nav ul li a:hover {
    border:none;
    background-color:rgb(181, 183, 181);
    padding: 8px 10px;
    border-radius: 10px;
    transition: 0.3s ease;
}

.link {
    display: inline-block;
    margin: 10px 0;
}

.link a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    font-weight: 500;
    padding: 8px 16px;
    border-radius: 5px;
    transition: all 0.3s ease;
    background-color: #f4f4f4;
    border: 1px solid #ddd;
}

.link a:hover {
    color: #fff;
    background-color: #007BFF;
    border-color: #007BFF;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.link a:active,
.link a:focus {
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>

 </head>
 <body>
 
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
        <h3>LOGIN</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" name="emailcont" required="true">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" required="true">

        <button type="submit" name="login">Log In</button>
        <div class="social">
            <a href="signup.php">Don't have an account ? SIGN UP</a>
        </div>
        <div class="link">
            <a href="index.php">Home</a>
        </div>
    </form>

 </body>
 </html>