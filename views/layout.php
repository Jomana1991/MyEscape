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
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <meta charset="UTF-8">
<style>
    @import url('https://fonts.googleapis.com/css?family=Oswald|Roboto');
    body {
  background-color: #F6F4D2;
}
/*h1 {
  color: blue;
}*/
p {
  color: #001D4A;
  font: 14px 'Roboto', sans-serif;
}
.bg-custom
            {
               background-color: #E88D67; 
            }
</style>
    
  </head>
  
  <nav class="navbar fixed-top navbar-expand-md navbar-light bg-custom " >
  <div class="container">
      <a class="navbar-brand" href='?controller=pages&action=home'>MyEscape</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- left navigation links -->
      <ul class="navbar-nav mr-auto">

    
        <li class="nav-item active">
          <a class="nav-link" href='?controller=pages&action=home'>Home
            
          </a>
        </li>

   
        <li class="nav-item">
          <a class="nav-link" href='?controller=pages&action=aboutus'>About us</a>
        </li>

     
        <li class="nav-item">
          <a class="nav-link" href='?controller=blog&action=readAll'>Blogs</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href='?controller=blog&action=search'>Search</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href='?controller=user&action=contactus'>Contact us</a>
        </li>
      </ul>

     <?php
          session_start();
          if (empty($_SESSION['username']))
          {
            echo "<ul class='nav navbar-nav ml-auto'>";
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='?controller=user&action=login'>Login|Register</a>";
            echo "</li></ul>";
          }
          else
          {
            echo "<ul class='nav navbar-nav ml-auto'>";
            echo "<li class='nav-item'><a class='nav-link'  href='?controller=blog&action=create'>Profile Page</a></li> ";
            echo "<li class='nav-item'><a class='nav-link'  href='?controller=pages&action=logout'>Logout</a></li></ul>";
          }
          ?>
      
    </div>
  </div>
</nav>
  
  
  <body>

    <div class="w3-container w3-pink">
        <?php require_once('routes.php'); ?>


    </div>
    <?php require_once('footer.html'); ?>
      </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  <script src="jsFunctions.js" type="text/javascript"></script>-->
  
  </body>
</html>