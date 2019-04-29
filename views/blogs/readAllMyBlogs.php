

<html>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Blogs List</title>
    
  
      
      
      <style>

                .blogscontainer {
                margin-top:0;
                text-align: center;
            }

            h1 {
                font-family: 'Sacramento', cursive;
            }

            ul.blog-post {
                list-style: none;
                font-size: 0px;

                background: linear-gradient(to right, #EABE7C, #E88D67);
            }

            ul.blog-post li {
                display: inline-block;
                border-radius: 3px;
                padding: 1.5em;
                width: 400px;
                margin: 0 0 2.5% 2.5%;
                background: #fff;
                border: 1px solid #eee;
                font-size: 16px;
                font-size: 1rem;
                vertical-align: top;
                box-shadow: 0 0 6px #eee;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                height: 650px;
            }

            ul.blog-post li img {
                max-width: 100%;
                height: 250px;
                margin: 0 0 10px;
            }

            ul.blog-post li h3 {
                margin: 0.6em 0 0.6em;
                text-align: left!important;
                font-family: Source Sans Pro, sans-serif;
                color: #333;
                font-size: 1.1em;
            }

            ul.blog-post li p {
                margin: 0.6em 0 1.3em;
                font-size: .9em;
                line-height: 1.5em;
                color: #8c8c8c;
                text-align: left!important;
                font-family: Open Sans, sans-serif;
                font-weight: 300;
            }

            .button1 {
                background-color: #E88D67;
            }

            .button2 {
                text-align: center;
                width: 30%;
                border: none;
                background: #001D4A; 
                font-family: Roboto, sans-serif;
                font-weight: 300;
                font-size: 0.7em;
                color: white;
                border-radius: 5px;
                padding: 8px 8px 8px 8px;
            }

            .button2:hover {
                opacity: 0.9;
                cursor: pointer;
                color: white;
            }

            ul.blog-post.columns-2 li {
                width: 37%;
            }

            @media (max-width: 480px) {
                ul.grid-nav li {
                    display: block;
                    margin: 0 0 5px;
                }
                ul.grid-nav li a {
                    display: block;
                }
                ul.blog-post {
                    margin-left: 0;
                }
                ul.blog-post li {
                    width: 100% !important;
                    margin: 0 0 20px;
                }
            }

            .bloginfo{
                text-align: left;
                color: #001D4A;
                font: 16px 'Roboto', sans-serif;
            }

            a {


                color: #fff;

            }

            a:hover {
                text-decoration: none;
                color: #57b846;
            }
            
            .contact2-form-title {
                display: block;
                font-size: 39px;
                color: #001D4A ;
                line-height: 1.2;
                text-align: center;
                padding-bottom: 20px;
                font: 72px 'Sacramento', cursive;
            }
      </style>
</head>
    <body>
 
            <div class="blogscontainer" style="background: linear-gradient(to right, #EABE7C, #E88D67);;margin-top: 0;">
<!--                <div class="title animated fadeInDown" id="title">-->
                    <span class="contact2-form-title" style="margin-top: 0">
                        <b>My Blogs
                        </b></span>
                <!--</div>-->
                
                  <ul class="blog-post columns-2">
                      <?php foreach($blogs as $blog) {?>
                      
                    <li>
                      <?php
                        $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

                         if (file_exists($file)) {
                           $img = "<img src='$file' width='450' />";
                         echo $img;
                         } else {
                             $file = 'views/blogImages/No_Image.jpg';
                         echo $img = "<img src='$file' width='450' />";
                          }
                         ?>

                      <h3 style="height:35px;"><?php echo $blog->title . "<br>"; ?> </h3>
                        <div class="bloginfo" style="">Author: <?php echo $blog->username ?></div>
                        <br>
                        <div class="bloginfo button button1" style="line-height:1.3;color: #fff;"><?php echo $blog->categoryName ?></div>
                        <div class="bloginfo" style="line-height:1.3;"><?php echo $blog->countryName ?></div>
                        <div class="bloginfo" style="line-height:1.3;"><?php echo $blog->continentName ?></div>
                        <br>
                        <div class="bloginfo" style="height:100px;">
                            
                        <?php  if (strlen($blog->content) > 150){ 
                                    echo strip_tags(substr($blog->content,0,strpos(wordwrap($blog->content, 150), "\n"))).'...'."<br><br>";

                            //        here I am using wordwrap to line break at the nearest word to 150 characters(so you don't get half words),
                            //        strpos then returns the position of the first line break, and the content will therefore be shortened to this position by substr
                                }   
                                else {
                                        echo strip_tags($blog->content)."<br><br>";
    
    }?>
                      </div>
                      <div>
                          <button class = "button button2"> <a href='?controller=blog&action=read&blogID=<?php echo $blog->blogID; ?>' style="color: #fff; width:0px;"> Read More </a></button>
                          <button class = "button button2"> <a href='?controller=blog&action=update&blogID=<?php echo $blog->blogID; ?>' style="color: #fff;"> Update </a></button>
                          <button class = "button button2">  <a href='?controller=blog&action=delete&blogID=<?php echo $blog->blogID; ?> ' style="color: #fff;" onclick="return confirm('Are you sure you want to delete this blog?')"> Delete </a> </button>
                      </div>
                    </li>
                      <?php } ?>
                   </ul>
                </div>
    
      </body>
     
</html>