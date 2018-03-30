//login.js

function ValidateLogin()
{
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var check = true;
	
       if (!validateWord(password))
   {
       alert("Invalid login password");
       check = false;
   }

   if (!validateEmail(email))
   {
       alert("Invalid e-mail address");
       check = false;
   }
   return check;
   
function validateEmail(address)
{
    var p1 = address.search( /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/);
    return (p1 === 0) ? true : false;
}

function validateWord(name)
{
    var p1 = name.search(/^\w+$/);
    return (p1 === 0) ? true : false;
}
}
