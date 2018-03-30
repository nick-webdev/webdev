// JavaScript Document

function validateFeedbackForm()
{
    var name;
    var email;
    var isValid = true;
    name = document.getElementById("first_name");
        if (!validateName(name, "First"))
            isValid = false;
            alert("Please enter a valid first name")

    name = document.getElementById("last_name");
    if (!validateName(name, "Last")) 
        isValid = false;
        alert("Please enter a valid last name")

    email = document.getElementById("Email");
        if (!validateEmail(email))
            isValid = false;
            alert("Pease enter a valid email address");
        if (isValid) 
            window.open("thanks.php");
    return true;

}

function validateName(name)
{

    alert(name.value);
    var firstName = document.getElementById("first_name");
    alert(name.value);
    var p = firstName.value.search(/^[-'\w\s]+$/);

    if (p == 0)
    {
	alert(which_one + "Name Valid");
        return true;
    }

    else
    {
	alert(which_one + "Name Not Valid");
	return false;
    }

}

function validateEmail(email)
{

    alert(email.value)
    var email = document.getElementById("email");
    var p = email.value.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/);
    if (p == 0)
    {
    alert("Email Valid");
    return true;
    }

    else
    {
       alert("Email Not Valid");
       return false;
    }
}
