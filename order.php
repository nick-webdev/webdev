<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Place and order">
<meta name="keywords" content="Order">
<title> Place an order here </title>
<link href="donuts.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="menu.js"></script>
</head>

<body>

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
<div id="wrapper">
<div id="newmain">
<xxxmain>

<h1> Order Here! </h1>
<p> Please enter how many dozen of donuts you would like from each of our different types.  Also choose whether you would like the mini donuts or the regular sized donuts. </p>

<form id = "Order" action ="ordered.php" onsubmit ="validateOrder()" method="post">
    <table summary = "Order Info">
        <tr>
            <td>First Name:</td>
            <td><input type="text" id="firstName" name="firstName" size="40" /></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" id="lastName" name="lastName" size="40" /></td>
        </tr>
        <tr>
            <td>E-mail Address:</td>
            <td><input type="text" id="email" name="email" size="40" /></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><input type="text" id = "phone" name="phone" size="40" /></td>
        </tr>
               <tr>
            <td>Address:</td>
            <td><input type="text" id="address" name="address" size="40" /></td>
        </tr>
        <tr>
            <td>Credit/Debit Card # for payment:</td>
            <td><input type="text" id="card" name="card" size="40" /></td>
        </tr>

        <tr>
        <td> Homemade Recipe</td>
            <td> Amount (in dozens):
            <input type ="text" name="Homemade" id ="h" size = "7"/></td>
            <td> Size:  </td>
            <td> Mini <input type = "radio" name = "home" value = "mini"/> </td>
            <td>Regular <input type = "radio" name = "home" value = "reg"/> </td>
        </tr>
        <tr>
            <td> Plain Glazed</td>
            <td> Amount (in dozens):
            <input type ="text" name="glazed" id ="g" size = "7"/></td>
            <td> Size:  </td>
            <td> Mini <input type = "radio" name = "glaze" value = "mini"/> </td>
            <td> Regular <input type = "radio" name = "glaze" value = "reg"/> </td>
        </tr>
        <tr>
            <td> Chocolate Topped </td>
            <td> Amount (in dozens):
            <input type ="text" name="choc" id ="c" size = "7"/></td>
            <td> Size:  </td>
            <td> Mini <input type = "radio" name = "chocolate" value = "mini"/></td>
            <td> Regular <input type = "radio" name = "chocolate" value = "reg"/> </td>
        </tr>
        <tr>
            <td> Vanilla Icing </td>
            <td> Amount (in dozens):
            <input type ="text" name="van" id="v" size = "7"/></td>
            <td> Size:  </td>
            <td> Mini <input type = "radio" name = "vanilla" value = "mini"/> </td>
            <td> Regular <input type = "radio" name = "vanilla" value = "reg"/> </td>
        </tr>
        <tr>
            <td> Cream Filled</td>
            <td> Amount (in dozens):
            <input type ="text" name="cream" id ="f" size = "7"/></td>
            <td> Size:  </td>
            <td> Mini <input type = "radio" name = "filled" value = "mini"/> </td>
            <td>Regular <input type = "radio" name = "filled" value = "reg"/> </td>
        </tr>
        <tr>
        <td><input type="submit" value = "Submit" /></td>
        </tr>
    </table>
</form>
<p> Have something to say about your last order?  Click here to go to our Review Form Page! </p>


<xxx/main>
</div><!-- main -->

<footer></footer>

</div><!-- wrapper -->
</body>
</html>
