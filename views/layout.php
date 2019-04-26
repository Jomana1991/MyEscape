<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     
 
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<!--<link rel="stylesheet" href="views/css/styles.css"> -->
<title>Blogs</title>

<style>

            .fader {
                position: absolute;
                height: 100%;
                width:100%;
                left:0;

            }

            .nav-main {
                position: fixed;
                top: 0;
                left:0;
                width:100%;
                height:60px;
                background-color: #EDDEA4;
                float: left;
                display: flex;
                flex-wrap: wrap;
                z-index: 1000;

            }

            .nav-main h1 {
                padding-left:600px;
                color: #28536B;
                font-family: brush script MT;
                font-size: 60px;
                float:top;
            }

            .btn-toggle-nav {
                width:60px;
                height:100%;
                background-color: #EDDEA4;
                background-image: url(img/menu.png);
                background-repeat: no-repeat;
                background-size: 50%;
                background-position: center;
                cursor: pointer;
            }
            .btn-toggle-nav:hover {
                opacity: 0.3;
            }

            .nav-main ul {
                display: flex;
                flex-wrap: wrap;
                padding-left:1200px;

            }

            .nav-main ul li {
                list-style: none;
                line-height: 35px;
            }

            .nav-main ul li a {
                display:block;
                height:100%;
                padding: 0 10px;
                text-decoration:none;
                color: #28536B;
                font-family: arial;
                font-size:16px;

            }
            

            .nav-sidebar {
                position: fixed;
                left:0;
                bottom:0;
                width: 0;
                height: 620px;
                padding: 0 0px;
                background-color: #EDDEA4;  
                z-index:1000;
                transition: all 0.3s ease-in-out;

            }

            .nav-sidebar ul {
                padding-top: 15px;
                overflow:hidden;
                visibility: hidden;


            }

            .nav-sidebar ul li {
                line-height:60px;
                line-style:none;

            }

            .nav-sidebar ul li a {
                display: block;
                height:60px;
                padding: 0 10px;
                text-decoration: none;
                color: #28536B;
                font-family: arial;
                font-size: 16px;
                white-space: nowrap;

                transition: all 0.3s ease-in-out;
            }

        </style>
  </head>
  <body>
             
<div class="navbar">

  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="#"><i class="fa fa-fw fa-search"></i> Search a blog</a> 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Read all Blogs</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i>About us</a>
  
  <?php
      session_start();
      if (empty($_SESSION['username'])){?>
                
                <li><a href=href='?controller=user&action=login'>Login</a></li> 
                <li>  <a href=href='?controller=user&action=register'>Register</li> 
      <?php }
      else {
      ?>
                <li><a href=href='?controller=blog&action=create'>Profile Page</a></li> 
                <li>  <a href=href='?controller=pages&action=logout'>Logout>Register</li>
           
      <?php } ?>
                
</div>


      
      
      
      
      
      
      
    <header class="w3-container w3-gray">
     
       <nav class="nav-main">
            <div class="btn-toggle-nav" onclick=" toggleNav()" > </div>

            <ul> <?php
      /*session_start();
      if (empty($_SESSION['username'])){?>
                
                <li><a href=href='?controller=user&action=login'>Login</a></li> 
                <li>  <a href=href='?controller=user&action=register'>Register</li> 
      <?php }
      else {
      ?>
                <li><a href=href='?controller=blog&action=create'>Profile Page</a></li> 
                <li>  <a href=href='?controller=pages&action=logout'>Logout>Register</li>
            </ul> 
      <?php } ?>
            <div class="navbar-header">
                <h1> My Escape </h1>
            </div>
        </nav>
 
       <aside class="nav-sidebar" >
            <ul>
                <li><a href="?controller=page&action=home">Home</a></li>
                <li><a href="?controller=blog&action=readall">Read All Blogs</a></li>
                <li><a href="?controller=page&action=aboutus">About Us</a></li>
                <li><a href='?controller=user&action=contactus'>Contact Us</a></li>
            </ul>   
        </aside>

      <div class="fader">
        </div>


    </header> 
      
 <div class="w3-container w3-pink"> 
    <?php require_once('routes.php'); ?>
   
</div>
<div class="w3-container w3-gray">
    
</div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--  <script src="jsFunctions.js" type="text/javascript"></script>-->
  
  <script>


            $(document).ready(function () {

                var count = 0;
                var images = ["img/share.jpg", "img/explore.jpg", "img/travel3.jpg"];
                var image = $(".fader");

                image.css("background-image", "url(" + images[count++] + ")");

                setInterval(function () {
                    image.fadeOut(2000, function () {
                        image.css("background-image", "url(" + images[count++] + ")");
                        image.fadeIn(2000);
                    });
                    if (count == images.length)
                    {
                        count = 0;
                    }
                }, 4000);

            });

            let toggleNavStatus = false;

            let toggleNav = function () {
                let getSidebar = document.querySelector(".nav-sidebar");
                let getSidebarUl = document.querySelector(".nav-sidebar ul");
                let getSidebarLinks = document.querySelectorAll(".nav-sidebar a");

                if (toggleNavStatus === false) {
                    getSidebarUl.style.visibility = "visible";
                    getSidebar.style.width = "200px";

                    let arrayLength = getSidebarLinks.length;
                    for (let i = 0; i < arrayLength; i++) {
                        getSidebarLinks[i].style.opacity = "1";
                    }

                    toggleNavStatus = true;

                } else if (toggleNavStatus === true) {
                    getSidebar.style.width = "0px";

                    let arrayLength = getSidebarLinks.length;
                    for (let i = 0; i < arrayLength; i++) {
                        getSidebarLinks[i].style.opacity = "0";


                    }
                    getSidebarUl.style.visibility = "hidden";

                    toggleNavStatus = false;

                }

            };

//            $(document).ready(function () {
//                $(".btn-toggle-nav").click(function () {
//                    $(".nav-sidebar").toggle(1000);
//
//                });
//
//            });

        </script>

  
  </body>
</html>