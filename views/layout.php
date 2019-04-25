<html>
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!--        <link href="css/styles-general.css" rel="stylesheet" type="text/css"/>-->
<style>
    @import url('https://fonts.googleapis.com/css?family=Cinzel+Decorative|Sacramento|Oswald|Roboto');
 body {
  background-color: #F6F4D2;
}

h2 {
  color: #395C6B;
  font: 72px 'Sacramento', cursive;
/*  font-weight: bold;*/
}

h3 {
  color: #001D4A;
  font-family: 'Roboto', sans-serif;
  font-weight: bold;
}

p {
  color: #001D4A;
  font: 16px 'Roboto', sans-serif;
}

.avatar {
  border-radius: 50%;
}
</style>
    
    <title>MyEscape</title>
  </head>
  <body>
      <div class="container-fluid">  
        <header class="w3-container w3-gray">
          <a href='?controller=pages&action=home'>Home</a>
          <a href='?controller=pages&action=aboutus'>About Us</a>  
          <a href='?controller=blog&action=readAll'>Blogs</a>
          <a href='?controller=blog&action=search'>Search</a>
          <?php
          session_start();
          if (empty($_SESSION['username'])){
            echo "<a href='?controller=user&action=login'>Login</a> ";
            echo "<a href='?controller=user&action=register'>Register</a> ";
          }
          else{
            echo "<a href='?controller=blog&action=create'>Profile Page</a> ";
            echo "<a href='?controller=pages&action=logout'>Logout</a> ";
          }
          ?>
          <a href='?controller=user&action=contactus'>Contact Us</a>


        </header>

    <div class="w3-container w3-pink">
        <?php require_once('routes.php'); ?>

    </div>
    <div class="w3-container w3-gray">
        <footer >
            Copyright &COPY; <?= date('Y'); ?>
        </footer>
    </div>
      </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  <script src="jsFunctions.js" type="text/javascript"></script>-->
  </body>
</html>