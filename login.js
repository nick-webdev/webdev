//login.js

function validateLoginForm()
{
    var customer_nm = loginForm.customer_nm.value;
    var customer_pw = loginForm.customer_pw.value;
    var check = true;
    if (!validateWord(customer_nm))
        {
            alert("Error: Invalid Username!");
            check = false;
        
        }
    if (!validateWord(customer_pw))
    {
        alert("Error: Invalid password!");
        check = false;
    }
    return check;
}

functionvalidateWord(name)
{
    var p = name.searcj(/^\w+$/);
    return (p1 == 0) ? true : false;
}