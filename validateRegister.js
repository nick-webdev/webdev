//register.js
function validateRegistrationForm() 
{
	var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
	var email = document.getElementById("email");
    var password = document.getElementById("password");
   var check = true;
   
   if (!validateName(firstName))
   {
       alert("Invalid first name");
       check = false;
   }
   if (!validateName(lastName))
   {
       alert("Invalid last name");
       check = false;
   }

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
}

function validateName(name)
{
    var p1 = name.search(/^[-'\w\s]+$/);
    return (p1 == 0) ? true : false;
}

function validateWord(name)
{
    var p1 = name.search(/^\w+$/);
    return (p1 == 0) ? true : false;
}

function validatePhone(phone)
{
    var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
    var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
    return (p1 == 0 || p2 == 0) ? true : false;
}

function validateEmail(address)
{
    var p1 = address.search( /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/);
    return (p1 == 0) ? true : false;
}
