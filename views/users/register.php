
<p>Please register below</p>

<form method='POST' id="RegForm" name="RegForm" action="" onsubmit="return checkPassword()">
    <input type="text" id="Username" name="Username" placeholder="Username" value="" tabindex="1" required >
        <?php if (isset($name_error)): ?>
            <span><?php echo $name_error; ?></span>
        <?php endif ?>
                
    <input type="email" id="Email" name="Email" placeholder="Email" value="" tabindex="2" required >
    
             
    <input type="password" id="Password" name="Password" placeholder="Password" value="" tabindex="3" required >
    <input type="password" id="ConfirmPassword" name="ConfirmPassword" id="password_confirmation" placeholder="Confirm Password" tabindex="4" required>
    <input type="submit" value="Go to login" tabindex="5"/>
    <a href='?controller=user&action=login'> Already registered? <br> Click here to Login</a>
    <!-- Comment-->
</form>

<script>
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