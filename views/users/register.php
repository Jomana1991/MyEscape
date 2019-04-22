
<h4>Please register below</h4>

<form method='POST' id="RegForm" name="RegForm" action="" onsubmit="return checkPassword()">
    <input type="text" id="Username" name="Username" autofocus="" placeholder="Username" value="" tabindex="1" required >
    <input type="email" id="Email" name="Email" placeholder="Email" value="" tabindex="2" required >
    
             
    <input type="password" id="Password"  name="Password" placeholder="Password" value="" pattern="^[a-zA-Z]\w{3,14}$" tabindex="3" required >
    <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password" tabindex="4" required>
    <input type="submit" value="Go to login" tabindex="5"/>
    <br>
    <br>
    Already registered? <a href='?controller=user&action=login'> Click here to Login</a>
    
</form>

<script>
function checkPassword(){
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
     
}</script>
<!--<script src="../jsFunctions.js" type="text/javascript"></script>-->

