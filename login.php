<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="p.css">

<title>Login</title>
</head>
<style>
* {
margin: 0;
padding: 0;
}
.hero {
height: 100%;
width: 100%;
background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(https://c0.wallpaperflare.com/preview/253/130/347/people-inside-bus.jpg);
background-position: center;
background-size: cover;
position: absolute;
}
.form-box {
top: -50px;
width: 480px;
height: 700px;
position: relative;
margin: 6% auto;
background: transparent;
padding: 5px;
border-radius: 10%;
overflow: hidden;
}
.botton-box {
width: 220px;
margin: 35px auto;
position: relative;
box-shadow: 0 0 5px 5px rgb(56, 56, 56);
border-radius: 30px;
background: linear-gradient(to right, green, WHITE);
}
.toggle-btn {
padding: 10px 30px;
cursor: pointer;
border: 0;
background: transparent;
outline: none;
position: relative;
}
.btn {
top: 0;
left: 0;
position: absolute;
width: 110px;
height: 100%;
background: linear-gradient(to right, green, WHITE);
border-radius: 30px;
transition: .5s;
}
.input-group a{
	color: aqua;
}

.input-group input, textarea{
	color: white;
}

.input-group {
top: 130px;
position: absolute;
width: 280px;
transition: .5s;
padding-left: 50px;
color: white;
font-size: 20px;
}
.input-field {
width: 100%;
padding: 10px 0;
margin: 5px 0;
border-left: 0;
border-top: 0;
border-right: 0;
border-bottom: 1px solid #999;
outline: none;
color: black;
background: transparent;
}
.submit-btn {
width: 85%;
padding: 10px 30px;
cursor: pointer;
display: block;
margin: auto;
background: linear-gradient(to right, green, white);
box-shadow: 0 0 5px 5px rgb(56, 56, 56);
border: 0;
outline: none;
border-radius: 30px;
}
.check-box {

margin: 25px 10px 30px 0;
}
span {
color: #777;
font-size: 12px;
bottom: 68px;
position: absolute;
}
#f {
position: relative;
padding-left: 10px;
color: blue;
top: -15px;
}
#login {
left: 50px;
}
#register {
left: 450px;
top: 90px;
}
#forget-password {
left: -350px;
}
::placeholder{
	color: white;
}
.submit-btn{
	margin-top: 20px;
}
</style>

<body>

<div class="hero">
<div class="form-box">
<div class="botton-box">
<div class="btn"></div>
<button type="button" class="toggle-btn" onclick="login()"> Log In</button>
<button type="button" class="toggle-btn" onclick="register()"> Sign Up</button>

</div>

<form id="login" class="input-group">
<input type="text" class="input-field" placeholder="User name" required><br>
<input type="text" class="input-field" placeholder="Enter Password" required>
<input type="checkbox" class="check-box">Remember Password
<p id="f" onclick="forget()"><a href=""> Forget Password? </a></p>
<button type="submit" class="submit-btn">Log in</button>
</form>

<form action="database.php" id="register" class="input-group" method="POST">

<!-- <input type="text" class="input-field" placeholder="firstname" required><br>

<input type="text" class="input-field" placeholder="lastname" required><br> -->

<input type="text" class="input-field" placeholder="User name" name="name" required><br>

<input type="Phone" class="input-field" placeholder="Phone Number" name="phone" required><br>

<input type="email" class="input-field" placeholder="Email" name="email" required><br>

<input type="password" class="input-field" id="psw_1" placeholder="Enter Password" name="password" required>
<span id="message"></span>
<input type="password" class="input-field" id="psw_2" placeholder="confirm password" name="confirmPassword" required><br>
<span id="message1"></span>

<!-- <input type="text" class="input-field" placeholder="OTP" required> -->
<button type="submit" class="submit-btn" name="submit" id="submit">Register</button>
</form>
<form id="forget-password" class="input-group">

<input type="text" class="input-field" placeholder="Phone Number" required><br>

<input type="password" class="input-field" placeholder="Enter Password" required>

<input type="password" class="input-field" placeholder="re-enter Password" required>

<input type="password" class="input-field" placeholder="confirm password" required><br>

<button type="submit" class="submit-btn">Reset</button>
</form>
</div>
</div>
<script>
var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");
var p = document.getElementById("forget-password");

function register() {
x.style.left = "-400px";
y.style.left = "50px";
p.style.left = "-400px";
}

function login() {
x.style.left = "50px";
y.style.left = "450px";
p.style.left = "-350px";

}

function forget() {
x.style.left = "-400px";

p.style.left = "50px";

}

//Function to check whether both passwords are same or not..?

</script>

</body>

</html>