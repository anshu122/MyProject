
function check_validation()
{
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;

    if(cpass.match(password)){
        document.getElementById('cpass_error').innerHTML="";
    }
    else{
        document.getElementById('cpass_error').innerHTML="*Password not matching.";
        return false;
    }
}