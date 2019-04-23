<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#message {
  display:none;
 
  position: relative;
  
}

</style>
</head>
<body>
<p>Please register below</p>

<form method='POST' id="RegForm" name="RegForm" action="" onsubmit="return checkPassword()">
    <input type="text" id="Username" name="Username" autofocus="" placeholder="Username" value="" tabindex="1" required >
                        
    <input type="email" id="Email" name="Email" placeholder="Email" value="" tabindex="2" required >
    
             
    <input type="password" id="Password" name="Password" placeholder="Password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}" tabindex="3" required >
    <input type="password" id="ConfirmPassword" name="ConfirmPassword" id="password_confirmation" placeholder="Confirm Password" tabindex="4" required>
    <input type="submit" value="Go to login" tabindex="5"/>
    <a href='?controller=user&action=login'> Existing user login? <br> Click here to Login</a>
    <!-- Comment-->
</form>
<div id="message">
    <p><b>Password must contain the following:</b><br>lowercase letter<br>capital (uppercase)letter<br>A number<br>Minimum 4 characters</p>
</div>


<script>
 
var myInput = document.getElementById("Password");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

    
function checkPassword()
{
    $password = document.forms["RegForm"]["Password"].value;     // to understand this syntax pls refer JS forms in W3schools website.
    $confirmation = document.forms["RegForm"]["ConfirmPassword"].value;
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
</script>
</body>