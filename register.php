<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="This website offers the best deals on the
greatest donuts around" name="description">
<meta content="Donuts for sale" name="keywords">
<title>Dabbin Donuts</title>
<link href="donuts.css" rel="stylesheet" type="text/css">

</head>
<div align="center">
<header> <img src="titleimg.png" width="450" height="98" alt="Title"/> </header>
</div>
<nav>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Home</span></a></li>
   <li><a href='#'><span>Menu</span></a>
      <ul>
         <li><a href='store.php'><span>Products</span></a>
         </li>
         <li ><a href='seasonal.php'><span>Seasonal</span></a></li>

      </ul>
   </li>
   <li><a href='order.php'><span>Order</span></a></li>
   <li><a href='Feedback.php'><span>Feedback</span></a></li>
   <li><a href='#'><span>My Account</span></a>
   	<ul>
		<li><a href='register.php'><span>Register</span></a></li>
		<li><a href='login.php'><span>Login</span></a></li>
	</ul>
    <li><a href='logout.php'><span>Logout</span></a></li>
   </li>
      <li><span style="display: block; font-size:smaller; margin-left:100px;   margin-top:10px; ">
     </span></li>
</ul>
</div>
</nav>
<xxxmain>
<h2> Register</h2>
<form action="Registration.php" method="post" id="register" name ="register" onsubmit="return validateRegistrationForm()">
		<fieldset id="Contact">Enter Your Information <br>First Name:
		<input id="firstName" name="firstName" type="text"><br>Last Name:
		<input id="lastName" name="lastName" type="text"><br>E-mail:
		<input id="email" name="email" type="text"><br>Password:
		<input id="password" name="password" type="text"><br>Administrator:
		<input id = "administrator" name="administrator" type="checkbox" value="yes"> <br>
		<input class="button_style" style="width: 215px" type="submit" value="Register"><br>
		</fieldset> </div>
</form>
<br><br>

<xxx/main>


<footer></footer>

</body>

</html>
