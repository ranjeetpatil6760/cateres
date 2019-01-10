function validateForm()
{
    

    var y=document.forms["myform"]["quantity"].value;
    if(y==null || y=="")
    {
        alert("Quantity is mandatory");
        return false;
    }
    
    var z =document.forms["myform"]["unit"].value;
    if(z==null || z=="")
    {
        alert("Unit is mandatory");
        return false;
    }
    
    var a=document.forms["myform"]["price"].value;
    if(a==null || a=="")
    {
        alert("Price is mandatory");
        return false;
    }
   
    var b=document.forms["myform"]["add"].value;
    if(b==null || b=="")
    {
        alert("Please click Add Row ");
        return false;
    }
    
    var c=document.forms["myform"]["paid"].value;
    if(c==null || c=="")
    {
        alert("Please enter paid amount");
        return false;
    }
    else
    {
        return true;
    }

}