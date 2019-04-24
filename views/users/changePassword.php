
<h4>Please update your credentials below</h4>

<form method='POST' id="regForm" name="regForm" action="" onsubmit="return checkPassword()">
    <input type="text" id="username" name="username" autofocus="" placeholder="Username" value="" tabindex="1" required >
       
             
    <input type="password" id="password"  name="newPassword" placeholder="Password" value="" pattern="^[a-zA-Z]\w{3,14}$" tabindex="3" required >
    <input type="password" id="confirmPassword" name="confirmNewPassword" placeholder="Confirm Password" tabindex="4" required>
    <input type="submit" value="Go to login" tabindex="5"/>
    <br>
    <br>
    Already registered? <a href='?controller=user&action=login'> Click here to Login</a>
    
</form>

<script>//NB if did get external js file - change below so exactly matches register script (names of variables) - then won't need to duplicate
function checkPassword(){
    $password = document.forms["regForm"]["newPassword"].value;     // to understand this syntax pls refer JS forms in W3schools website.
    $confirmation = document.forms["regForm"]["confirmNewPassword"].value;
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

