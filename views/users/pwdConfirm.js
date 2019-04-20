function checkPassword()
{
    $password = document.forms["regForm"]["password"].value;     // to understand this syntax pls refer JS forms in W3schools website.
    $confirmation = document.forms["regForm"]["password_confirmation"].value;
    if($password !== $confirmation)
    {
        alert("Passwords do not match"); 
        return false;
    }
    else
    {
        return true;
    }
     
}
