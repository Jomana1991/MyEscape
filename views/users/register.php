<p>Please register below</p>
<form method='POST'  action="ConfirmReg.php" onsubmit="return checkPassword()">
    <input type="text" name="Username" placeholder="Username" value="" tabindex="1" required >
     <input type="email" name="Email" placeholder="Email" value="" tabindex="2" required >
    <input type="password" name="Password" placeholder="Password" value="" tabindex="3" required >
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" tabindex="4" required>
   
    <input type="submit" value="Go to login" tabindex="5"/>
    <a href="login.php"> Already registered? <br> Click here to Login</a>
    <!-- Comment-->
</form>
<?php
