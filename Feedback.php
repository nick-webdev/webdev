<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Let us know what you think!">
<meta name="keywords" content="feedback review rating">
<title>How Did We Do?</title>
<link href="donuts.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="validateform.js"></script>
<script type="text/javascript" src="menu.js"></script>
</head>

<body>
<div align="center">
<header> <img src="titleimg.png" alt="Title" width="450" height="98" align="absmiddle"/> </header>
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
<h1> Were you satisfied with our products? </h1>
<p> We care very much about our customers.  We strive at all times to provide the best quality product we possibly can, as well as to give the best cusomter service we can.  Please fill out the following form with your information so we can reply to you if needed. </p>

<form id="feedback" action="processFeedback.php" method="post" onsubmit="return ValidateForm()">
    <table>
        <tr>
            <td>Salutation</td>
            <td><select name="salute">
                <option> </option>
                <option>Mrs.</option>
                <option>Ms.</option>
                <option>Mr.</option>
                <option>Dr.</option>
            </select></td>
        </tr>
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
    </table>

<p>In the next section, check off the product that you've purchased and leave a rating.  You may also leave a more specific comment in the comment box if you want to. </p>

    <table summary="Rating Form">
        <tr>
            <td>Homemade:</td>
            <td>Purchased <input type="checkbox" name="checkHome" value="yes"/></td>
            <td>Rating:</td>
            <td>Bad (1) <input type="radio" name="radHome" value="rd1" /></td>
            <td>Good (2) <input type="radio" name="radHome" value="rd2" /></td>
            <td>Great (3) <input type="radio" name="radHome" value="rd3" /></td>
            <td>Comments:</td>
            <td><textarea name="homeComments" rows="6" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>Glazed:</td>
            <td>Purchased <input type="checkbox" name="checkGlazed" value="yes"/></td>
            <td>Rating: </td>
            <td>Bad (1) <input type="radio" name="radGlaze" value="rd1" /></td>
            <td>Good (2) <input type="radio" name="radGlaze" value="rd2" /></td>
            <td>Great (3) <input type="radio" name="radGlaze" value="rd3" /></td>
            <td>Comments:</td>
            <td><textarea name="glazeComments" rows="6" cols="30"></textarea></td>
        </tr>l
        <tr>
            <td>Chocolate:</td>
            <td>Purchased <input type="checkbox" name="checkChoc" value="yes"/></td>
            <td>Rating: </td>
            <td>Bad (1) <input type="radio" name="radChoc" value="rd1" /></td>
            <td>Good (2) <input type="radio" name="radChoc" value="rd2" /></td>
            <td>Great (3) <input type="radio" name="radChoc" value="rd3" /></td>
            <td>Comments:</td>
            <td><textarea name="chocComments" rows="6" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>Vanilla:</td>
            <td> Purchased <input type="checkbox" name="checkVan" value="yes"/></td>
            <td> Rating: </td>
            <td> Bad (1) <input type="radio" name="radVan" value="rd1" /></td>
            <td> Good (2) <input type="radio" name="radVan" value="rd2" /></td>
            <td> Great (3) <input type="radio" name="radVan" value="rd3" /></td>
            <td>Comments:</td>
            <td><textarea name="vanComments" rows="6" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>Cream:</td>
            <td>Purchased <input type="checkbox" name="checkCream" value="yes"/></td>
            <td>Rating: </td>
            <td>Bad (1) <input type="radio" name="radCream" value="rd1" /></td>
            <td>Good (2) <input type="radio" name="radCream" value="rd2" /></td>
            <td>Great (3) <input type="radio" name="radCream" value="rd3" /></td>
            <td>Comments:</td>
            <td><textarea name="creamComments" rows="6" cols="30"></textarea></td>
        </tr>
        <tr>
            <td> Click here if you want us to reply to your feedback: </td>
            <td><input type="checkbox" name="checkReply" value ="yes" /></td>
        </tr>
        <tr>
            <td><input type="submit" value = "Submit" /></td>
            <td><input type="reset" value="Reset" /></td>
        </tr>
    </table>
</form>
<xxx/main>
</div>

<footer></footer>

</div>
</body>

</html>
