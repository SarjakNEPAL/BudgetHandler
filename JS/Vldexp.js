function validateForm()
{ 
    var iso=true;
    var x=document.entry.Title.value;  
    var y=document.entry.pass.amt;
    var z=document.entry.cate.amt;
    var sz=y.length;
    alert("bINGO");
    if(x==null || x=="" )
    {
        alert("Title can't be left blank");
        iso= false;
   
    }
    else
    {
        iso= true;
      
    }

   if(y==null || y=="")
    {
        alert("Amount cannot be blank");
        iso= false;
   
    }
    else if(y<0)
    {
        alert("Amount must be Positive Number");
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
