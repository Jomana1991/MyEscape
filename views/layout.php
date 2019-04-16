<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<link rel="stylesheet" href="views/css/styles.css">
<title>Blogs</title>
  </head>
  <body>
    <header class="w3-container w3-gray">
      <a href='?controller=pages&action=home'>Home</a>
      <a href='?controller=blog&action=readAll'>Blogs</a>
      <a href='?controller=blog&action=create'>Add Blog</a>
    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</div>
<div class="w3-container w3-gray">
    <footer >
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
  </body>
</html>