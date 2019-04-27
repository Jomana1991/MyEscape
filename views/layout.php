<!DOCTYPE html>

<html>

    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">-->
        <meta charset="UTF-8">


<style>
    @import url('https://fonts.googleapis.com/css?family=Cinzel+Decorative|Sacramento|Oswald|Roboto|Courgette');
    
    
.main{
    display: table;
    height: 100%;
    position: relative;
    width: 100%;
    background-size: cover;
    
}
.main:before {
    content: '';
    position: absolute; 
    opacity: 0.25;
    background: url(./img/share.jpg) no-repeat 0 50%; 
    width: 100%;
    height: 100%;
    z-index: -1;
    background-repeat: no-repeat;
    
}
#orangefloat {
    height: auto;               
    background: linear-gradient(to right, #EABE7C, #E88D67);
/*    font-size: 45px;
    font-family: 'Oswald', sans-serif;*/
    color: #001D4A;;
    min-height: 500px;
    opacity:0.85;
    font: 16px 'Roboto', sans-serif;

}
.container {
    margin-left: 10px;
/*    margin-right: 10px;*/
    margin-top: 50px;
}

    p {
      color: #001D4A;
      font: 14px 'Roboto', sans-serif;
    }
    .bg-custom
    {
       background-color: #E88D67; 
       opacity: 0.9;
    }
    
 .main h2 {
  color: #395C6B;
  font: 72px 'Sacramento', cursive;
/*  font-weight: bold;*/
  text-align: center;
  width:100%
}

.main h3 {
  color: #001D4A;
  font-family: 'Roboto', sans-serif;
  font-weight: bold;
}

.main h4 {
  color: #001D4A;
  font-family: 'Roboto', sans-serif;
  font-weight: bold;
}

</style>
    
  </head>
  
  <nav class="navbar-fixed-top navbar-expand-md navbar-light bg-custom " >
  <div class="container">
      <a class="navbar-brand active" href='?controller=pages&action=home'>MyEscape</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- left navigation links -->
      <ul class="navbar-nav mr-auto">

    
        <li class="nav-item active">
            <a class="nav-link" href='?controller=pages&action=home'><b>Home</b>
            
          </a>
        </li>

   
        <li class="nav-item active">
            <a class="nav-link" href='?controller=pages&action=aboutus'><b>About us</b></a>
        </li>

     
        <li class="nav-item active">
          <a class="nav-link" href='?controller=blog&action=readAll'><b>Blogs</b></a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href='?controller=blog&action=search'><b>Search</b></a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href='?controller=user&action=contactus'><b>Contact us</b></a>
        </li>
      </ul>

     <?php
          session_start();
          if (empty($_SESSION['username']))
          {
            echo "<ul class='nav navbar-nav ml-auto'>";
            echo "<li class='nav-item active'>";
            echo "<a class='nav-link' href='?controller=user&action=login'><b>Login|Register</b></a>";
            echo "</li></ul>";
          }
          else
          {
            echo "<ul class='nav navbar-nav ml-auto'>";
            echo "<li class='nav-item active'><a class='nav-link'  href='?controller=blog&action=create'><b>Profile Page</b></a></li> ";
            echo "<li class='nav-item active'><a class='nav-link'  href='?controller=user&action=readMine&username=".$_SESSION['username']."'><b>Blog Archives</b></a></li>";
            echo "<li class='nav-item active'><a class='nav-link'  href='?controller=pages&action=logout'><b>Logout</b></a></li></ul>";
            
          }
    ?>
      
    </div>
  </div>
</nav>

   


        <?php require_once('routes.php'); ?>


    
    <?php require_once('footer.html'); ?>
    
  

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script src="jsFunctions.js" type="text/javascript"></script>-->

  
  
</html>