function validateForm()
{ 
    var iso=false;
    var x=document.regst.User.value;  
    var y=document.regst.pass.value;
    var sz=y.length;
    if(x==null || x=="" )
    {
        alert("name can't be left blank");
        iso= false;
   
    }
    else
    {
        iso= true;
      
    }

    if(y==null || y=="")
    {
        alert("Password is mandatory");
        iso= false;
   
    }
    else
    {
        iso= true;
   
    }

    if(sz<8)
    {
        alert("Password must cointain at least 8 characters");
        iso=false;

    }
    else
    {
        iso= true;
   
    }
    
    if(iso==true){
        return iso;
    }
    else
    {
        return iso;
    }

}
