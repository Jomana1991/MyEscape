<html>
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!--        <link href="css/styles-general.css" rel="stylesheet" type="text/css"/>-->
<style>
    @import url('https://fonts.googleapis.com/css?family=Cinzel+Decorative|Sacramento|Oswald|Roboto|Courgette');
 body {
  background-color: #F6F4D2;
  margin: auto;
}

h2 {
  color: #395C6B;
  font: 72px 'Sacramento', cursive;
/*  font-weight: bold;*/
  text-align: center;
  width:100%
}

h3 {
  color: #001D4A;
  font-family: 'Roboto', sans-serif;
  font-weight: bold;
}

h4 {
  color: #001D4A;
  font-family: 'Roboto', sans-serif;
  font-weight: bold;
}

p {
  color: #001D4A;
  font: 16px 'Roboto', sans-serif;
}

.avatar{
    width:180px;
    height:180px;
    border-radius: 50%;
}

.flip-card {
  background-color: transparent;
  width: 180px;
  height: 180px;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
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