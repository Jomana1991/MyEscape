
<h4>Fill in the below to update your credentials</h4>

<form method='POST' id="regForm" name="regForm" action="" onsubmit="return checkPassword()">
    <input type="text" id="username" name="username" autofocus="" placeholder="Username" value="" tabindex="1" required >
    <input type="email" id="email" name="email" placeholder="Email" value="" tabindex="2" required >
    
             
    <input type="password" id="password"  name="password" placeholder="Password" value="" pattern="^[a-zA-Z]\w{3,14}$" tabindex="3" required >
    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" tabindex="4" required>
    <input type="submit" value="Go to login" tabindex="5"/>
   
    <br>
    <br>
    Already registered? <a href='?controller=user&action=login'> Click here to Login</a>
    
</form>

<script>
function checkPassword(){
    $password = document.forms["regForm"]["password"].value;     // to understand this syntax pls refer JS forms in W3schools website.
    $confirmation = document.forms["regForm"]["confirmPassword"].value;
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

