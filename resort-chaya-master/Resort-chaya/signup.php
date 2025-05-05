<?php 
include('dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
echo "<script>alert('This email or Contact Number already associated with another account');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FullName, MobileNumber, Email,  Password) value('$fname', '$contno', '$email', '$password' )");
    if ($query) {
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href ='login.php'</script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
       echo "<script>window.location.href ='index.php'</script>";
    }
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up Page</title>
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
color:rgb(248, 244, 244);
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
nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline-block;
}

nav ul li a {
    text-decoration: none;
    color:black;
    font-size: 16px;
    padding: 5px 10px;
    transition: background-color 0.3s, color 0.3s;
}

.header nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    height: 25px;
}

.header nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}
.header .logo img {
    width: 60px;
    height: 60px;
}

.header ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.header ul li {
    margin-right: 20px;
    display: flex; 
    align-items: center; 
}

nav ul li a:hover {
  border:none;
    background-color: black;
    color:white;
    padding: 8px;
    border-radius: 10px;
    transition: 0.3s ease;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        align-items: flex-start;
    }

    nav ul {
        flex-direction: column;
        gap: 10px;
    }

    nav ul li {
        display: block;
    }
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
        <h3>SIGNUP</h3>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" name="fname" required="true">

        <label for="mobileno">ContactNo</label>
        <input type="text" placeholder="Mobile Number" name="contactno" required="true" maxlength="10" pattern="[0-9]+">
        
        <label for="Email">Email</label>
        <input type="text" placeholder="Email Address" name="email" required="true">

        <label for="password">Password</label>
        <input type="password" placeholder="password" name="password" required="true">

        <button type="submit" name="submit">Sign up</button>
        <div class="social">
            <a href="login.php">Already have an account? Login</a>
            
        </div>
        <div class="link">
            <a href="index.php">Home</a>
        </div>
    </form>
    
</body>
</html>

