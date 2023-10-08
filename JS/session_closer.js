

var myclose = false;

function ConfirmClose()
{
    if (event.clientY < 0)
    {
        event.returnValue = 'You have closed the browser. Do you want to logout from your application?';
        setTimeout('myclose=false',10);
        myclose=true;
    }
}

function HandleOnClose()
{
    if (myclose==true) 
    {
        //the url of your logout page which invalidate session on logout 
        location.replace('../HTML/logout.php') ;
    }   
}