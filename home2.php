<?php

?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                background-color:  #F5853F;
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
                background-color: #F5853F;
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
                height: 750px;
                padding: 0 0px;
                background-color: #F5853F;
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
                        
.footer-widget 
{ 
    padding-left: 100px;
    padding-bottom: 50px; 
}
.footer-title 
{ 
  font-family: 'Ubuntu', sans-serif;
  font-size: 20px; 
  font-weight: 600;
  margin-bottom: 44px; 
  color: #fff; 
}
.footer-widget ul li a 
{ 
  font-family: 'Ubuntu', sans-serif;  
  text-transform: capitalize; 
  font-size: 14px; 
  color: #636e74; 
  display: block; 
  font-weight: 600; 
}
.footer-widget ul li a:hover
{ 
    color: #ffff; 
}
.footer 
{ 
  font-family: 'Ubuntu', sans-serif;
  background-color: #BB9F06;
  padding-top: 10px; 
  padding-left: 80px;
  color: #636e74; 
  font-weight: 400;
  font-size: 14px; 
  position: absolute;
  bottom: 0;
  width: 100%
}
.footer-line 
{ 
    border-color: #152e3d;
}
.footer-widget 
{ 
    padding-bottom: 50px; 
}
.footer-title 
{
    font-family: 'Ubuntu', sans-serif;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 44px; 
    color: #fff; 
}
.tiny-footer 
{ 
    font-family: 'Ubuntu', sans-serif;
    font-size: 14px;
    padding: 14px 0px;
    font-weight: 600; 
    background-color: transparent;
    border-top: 1px solid #152e3d;
    color: #888d90; 
    line-height: 1;
}
#page-container {
  position: relative;
  min-height: 100vh;
}
#content-wrap {
padding-bottom: 2.5rem;    /* Footer height */
}

        </style>
    </head>
    <body>
   
       
           
        <header>

        <nav class="nav-main">
            <div class="btn-toggle-nav" onclick=" toggleNav()" > </div>

            <ul>
                
                <li><a href="#">Register</a></li> 
                <li>  <a href="#">Login</a></li> 
            </ul> 
            <div class="navbar-header">
                <h1> My Escape </h1>
            </div>
        </nav>
        </header>
        <aside class="nav-sidebar" >
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Read All Blogs</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>   
        </aside>
    

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