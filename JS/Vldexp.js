function validateForm()
{   
    var iso=true;
    var x=document.ent.Title.value;  
    var y=document.ent.amt.value;
    var z=document.ent.dati.value;
    var sz=y.length;
    
    if(x==null || x=="" )
    {
        alert("Title can't be left blank");
        iso= false;
   
    }
 
   if(y==null || y=="")
    {
        alert("Amount cannot be blank");
        iso= false;
   
    }
    
    if(y<0)
    {
        alert("Amount must be Positive Number");
        iso=false;
    }

    if(z==null || z=="")
    {
        alert("Please select date");
        iso=false;
    }
    
    var today= new Date();
    var dd=String(today.getDate()).padStart(2,'0');
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = yyyy+"-"+mm+"-"+dd;
    var condate= (today < z || z < (today-"10-0-0"))&& alert("Please enter valid date!!");
    return iso;
}
