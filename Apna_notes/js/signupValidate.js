
function check_validation()
{
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    var password=document.getElementById('password').value;
    var cpass=document.getElementById('cpass').value;

    // regularExpression
    var name_exp=/^[A-Za-z .]{2,30}$/ ;
    var email_exp=/^[a-z_.]{4,}@[a-z]{3,}[.]{1}[a-z.]{2,8}$/ ;
    var phone_exp=/^[6789]{1}[0-9]{9}$/ ;
    var pass_exp=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,20}$/ ;

    if(name.match(name_exp)){
        document.getElementById('user_error').innerHTML="";
    }
    else{
        document.getElementById('user_error').innerHTML="*Name is invalid";
        return false;
    }

    if(email.match(email_exp)){
        document.getElementById('email_error').innerHTML="";
    }
    else{
        document.getElementById('email_error').innerHTML="*Email is invalid";
        return false;
    }

    if(phone_exp.test(phone)){
        document.getElementById('phone_error').innerHTML="";
    }
    else{
        document.getElementById('phone_error').innerHTML="*Phone number is invalid";
        return false;
    }

    if(pass_exp.test(password)){
        document.getElementById('pass_error').innerHTML="";
    }
    else{
        alert("Password must contain at least one digit,one special character and length should be at least six.");
        //document.getElementById('pass_error').innerHTML="*Password is invalid.";
        return false;
    }

    if(cpass.match(password)){
        document.getElementById('cpass_error').innerHTML="";
    }
    else{
        document.getElementById('cpass_error').innerHTML="*Password not matching.";
        return false;
    }
}