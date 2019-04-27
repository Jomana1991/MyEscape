
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Oswald');
            #result {
                /*                display: inline-block;*/
                width: 100vw;
                height: auto;                /*                padding: 50px;*/
                /*                    margin-left: 320px;
                                    margin-top: 300px;*/
                background: linear-gradient(to right, #EABE7C, #E88D67);
                font-size: 45px;
                font-family: 'Oswald', sans-serif;
                text-align:  center;
                position: absolute;
                color: #fff;
                display: flex;
                flex-direction: column;
                min-height: 500px;
                 border-radius: 80px;
                border: 10px solid white;

            }
            hr {
                color: #fff;
            }

            body {
                padding: 0;
                margin: 0;
            }
            ::placeholder {
                color: #ECEFF1;
            }
            .body {
                width: 100vw;
                height: 50vh;
                background: linear-gradient(to right, #EABE7C, #E88D67);
                  border-radius: 80px;
                border: 10px solid white;

            }
            .input {
                display:none;
                background: transparent;
                color: white;
                position: absolute;
                left: 54.7%;
                top: 29%;
                transform: translate(-70%, -60%);
                width: 440px;
                height: 40px;
                border-radius: 100px;
                padding: 30px;
                font-size: 50px;
                border: none;
            }
            .input:focus {
                outline: none;
            }
            .search {
                background: transparent;
                width: 100px;
                height: 100px;
                border-radius: 80px;
                border: 15px solid white;
                position: absolute;
                left: 50%;
                top: 30%;
                transform: translate(-70%, -60%);
                box-shadow: 0px 5px 10px rgba(0,0,0,.3);
            }
            .bar {
                height: 80px;
                width: 30px;
                border-radius: 50px;
                background: white;
                position: absolute;
                top: 90%;
                left: 100%;
                transform: rotate(-45deg);
                box-shadow: 0px 5px 10px rgba(0,0,0,.3);
            }



        </style>

    </head>
    <body>

        <div class="body">
            <div class="search">
                <div class="bar"></div>
            </div>
            <input name="query" id="query" type="text" class="input" autofocus>
            
        </div>  
        <!--<p>Search for a blog below</p>
        
        <form action=" " method="POST">
            <input type="text" name="query" id="query" placeholder="Enter your search here"/>
            <input type="submit" id="search_button" value="Search" />
        </form>
        <div id="searchresults" id="result">
        <div id="cover">
            <div class="tb">
              <div class="td"><input type="text" name="query" id="query" placeholder="Enter your search here" required></div>
              <div class="td" id="s-cover">
               
                  <div id="s-circle"></div>
                  <span></span>
              
              </div>
            </div>
          
        </div>-->

        <span id="result" class="c"> Results</span>


        <!--</div>-->


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

