function validateForm()
{
    var x=document.login.username.value;  
    if(x==null || x=="" )
    {
        alert("name can't be left blank");
        return false;
    }

    var y=string(document.login.password.value);
    var g=y.length;
   if(y==null || y=="" || y==" " || y=="  " || y=="   ")
    {
        alert("Password is mandatory");
        return false;
    }
   
    else if(document.login.password.value.length > 6)
    {
     
        return true;
    }
    if(document.login.password.value.length <6) {
        alert("Password must be atleast 6 characters");
        return false;
    }
}