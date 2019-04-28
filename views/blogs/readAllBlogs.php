

<html>
    <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Blogs List</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      
      <link href="css/BlogListStyle.css" rel="stylesheet" type="text/css"/>
      <style>

                @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans:300);



              .title{
                      font-family: Open Sans, sans-serif;
                      font-size: 55px;
                      font-style: bold;
                      text-align: center;
              }

              nav{ 
                      font-family: Open Sans, sans-serif;
                      text-align: center;
                      word-spacing: 30px;
              }

              nav a{
                      text-decoration: none;
                      color: #CAD3E0;
              }


              .container {
                margin: 2em 0;
                text-align: center;
              }

              ul.blog-post {
                      list-style: none;
                      font-size: 0px;
                      margin-left: -2.5%;
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

              .button {
                text-align: center;
                width: 40%;
                border: none;
                background: #F6F4D2; 
                font-family: Open Sans, sans-serif;
                font-weight: 300;
                font-size: 0.7em;
                color: white;
                border-radius: 5px;
                padding: 8px 15px 8px 15px;
              }

              .button:hover {
                opacity: 0.9;
                cursor: pointer;
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

              footer{
                      font-family: Open Sans, sans-serif;
                      text-align: center;
              }       
      </style>
</head>
    <body>
        <div class="main">
            <div class="container">
<!--                <div class="title animated fadeInDown" id="title">-->
                          <h2>Blogs</h2>
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
                             $file = 'views/blogImages/holiday_image_default.jpg';
                         echo $img = "<img src='$file' width='450' />";
                          }
                         ?>
                      <h3><?php echo $blog->title . "<br>";?> </h3>
                      <p><?php echo $blog->username ?></p>
                      <p><?php echo $blog->categoryName ?></p>
                      <p><?php echo $blog->countryName ?></p>
                      <p><?php echo $blog->continentName ?></p>
                      <p style="height:50px;"><?php  if (strlen($blog->content) > 150){ 
                                    echo substr($blog->content,0,strpos(wordwrap($blog->content, 150), "\n")).'...'."<br><br>";
                            //        here I am using wordwrap to line break at the nearest word to 150 characters(so you don't get half words),
                            //        strpos then returns the position of the first line break, and the content will therefore be shortened to this position by substr
                                }   
                                else {
                                        echo $blog->content."<br><br>";
    
    }?>
                      </p>
                      <br>
                      <div class="button"><a href='?controller=blog&action=read&blogID=<?php echo $blog->blogID; ?>'> Read Full Blog </a></div>
                    </li>
                      <?php } ?>
                   </ul>
                </div>
        </div>
      </body>
     
</html>