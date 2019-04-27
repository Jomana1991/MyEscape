
<?php
#session_start();//removed as now in layout
//if (isset($_GET['searchblog'])) {
//   $_GET['searchblog'] = $_SESSION ['query'];
//  header ("location:?controller=blog&action=search&query=".$_SESSION['query']); 
// 
//} 
?>

<html>
    <head>
        <title> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
/*            body {
                background: url("./img/share.jpg");
                opacity: 0.8;
                background-repeat: no-repeat;
            }*/

            #result {
                /*                display: inline-block;*/
/*                width: 100vw;*/
                height: auto;                /*                padding: 50px;*/
                /*                    margin-left: 320px;
                                    margin-top: 300px;*/
                background: linear-gradient(to right, #EABE7C, #E88D67);
                font-size: 45px;
                font-family: 'Oswald', sans-serif;
/*                text-align:  center;*/
/*                position: absolute;*/
                color: #fff;
/*                display: flex;*/
/*                flex-direction: column;*/
                min-height: 500px;
                opacity:0.8;
                /*                 border-radius: 80px;*/
                /*                border: 5px solid white;*/
             

            }

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
                opacity: 0.4;
                background: url(./img/share.jpg) no-repeat 0 50%; 
                width: 100%;
                height: 100%;
                z-index: -1;
               background-repeat: no-repeat;


            }

            hr {
                color: #fff;
            }

            .container {
                       margin-left: 40px;
               margin-top: 50px;
            }
          
            ::placeholder {
                color: #ECEFF1;
            }
            .body {
/*                width: 70vw;
                height: 50vh;*/
                background: linear-gradient(to right, #EABE7C, #E88D67);
                opacity: 0.8;
                vertical-align: middle;
                    
                
/*                border-radius: 80px;*/
                /*                border: 5px solid white;*/

            }
            .input {
                display:none;
                background: transparent;
                color: white;
/*                position: absolute;*/
/*                left: 54.7%;
                top: 29%;*/
                transform: translate(-70%, -60%);
                width: 390px;
                height: 30px;
                border-radius: 100px;
                padding: 20px;
                font-size: 30px;
                border: none;
                font-family: 'Oswald', sans-serif;
                
            }
            .input:focus {
                outline: none;
            }
            .search {
                background: transparent;
                width: 100px;
                height: 100px;
                border-radius: 50px;
                border: 10px solid white;
/*                position: absolute;*/
/*                left: 50%;
                top: 30%;*/
/*                transform: translate(-0%, -0%);*/
                box-shadow: 0px 5px 10px rgba(0,0,0,.3);
            }
            .bar {
                height: 60px;
                width: 20px;
                border-radius: 50px;
                background: white;
/*                position: absolute;*/
                top: 90%;
                left: 100%;
                transform: rotate(-45deg);
                box-shadow: 0px 5px 10px rgba(0,0,0,.3);
            }



        </style>

    </head>
    <body>
<div class="main">
    <div class="container">
    <div class="row">
         <div class=" text-center col-md-11 col-md-offset-2">
        <div class="body" >
           
            <div class="search" >
                <div class="bar">
                      <input name="query" id="query" type="text" class="input" autofocus>
                </div>
            </div>
        </div>
        </div>
         </div>
        </div>
      
    <div class="container">
        <div class="row">
              <div class=" text-center col-md-10 col-md-offset-2">
           
 <div id="result" > Results</div>
        
       
        
    </div>
     </div>
</div>
       </div> 

        &nbsp; &nbsp;

        <script>


            $(document).ready(function () {
                $('#query').keyup(function () {
                    var txt = $(this).val();
                    if (txt != '')
                    {
                        $.ajax({
                            url: "index.php?controller=blog&action=search",
                            method: "post",
                            data: {query: txt},
                            datatype: "text",
                            success: function (data)
                            {

                                $('#result').html(data);
                            }
                        });

                    } else {
                        $('#result').html(" ");
                    }

                });
            });

            $(".search").click(function () {
                if ($(".search").css("width") == "100px")
                {
                    $(".bar").animate({
                        height: "0px",
                        left: "80%"
                    }, 400);
                    setTimeout(function () {
                        $(".search").animate({
                            width: "500px",
                            left: "55%"
                        });
                        $(".input").css("display", "initial");
                    }, 400);
                    setTimeout(function () {
                        $(".input").attr("placeholder", "Search").focus();
                    }, 900);
                } else {
                    $(".search").animate({
                        width: "100px",
                        left: "50%"
                    });
                    $(".input").css("display", "none");
                    setTimeout(function () {
                        $(".bar").animate({
                            height: "80px",
                            left: "100%"
                        }, 400);
                    }, 400);
                }
            });
            $(".body").click(function () {
                if ($(".search").css("width") == "500px") {
                    $(".search").animate({
                        width: "100px",
                        left: "50%"
                    });
                    $(".input").css("display", "none");
                    setTimeout(function () {
                        $(".bar").animate({
                            height: "80px",
                            left: "100%"
                        }, 400);
                    }, 400);
                }
            });



        </script>

    </body>

</html>

