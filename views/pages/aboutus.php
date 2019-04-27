<!--<link href="css/styles-general.css" rel="stylesheet" type="text/css"/>-->

<html>
    <head>
        <title>About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
        <style>
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

.avatar{
    width:160px;
    height:160px;
    border-radius: 50%;
}

.flip-card {
  background-color: transparent;
  width: 160px;
  height: 160px;
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

}
        </style>    
        
    </head>

    <body>
<div class="main">
            <div class="container">
                <div class="row">
                    <div class="  col-md-10 col-md-offset-1">
<!--                        text-center-->

                        <div id="orangefloat" >
  <div class="row">

    <div class="col-xs-12 col-sm-10"  >
        <h2>About MyEscape</h2>
    </div>
    
  </div>
  <div class="row">
     <div class="col-sm-1"  >
     </div>
    <div class="col-xs-12 col-sm-10"  >
        <h3>Welcome!</h3> 
        <p>
            We are 'MyEscape', a global travel community created to inspire and connect travellers around the world.
            We are obsessed with exploring the world, meeting new people and getting as lost as possible.
            <br>
            We hope this website gives you some inspiration, handy tips to go and chase your own adventures, and a place for you to report back to fellow travellers.
            <br>
            <span style="color: #fff;">Travel is the best kind of education so go out and discover yourself, even if it’s just outside your own doorstep!</span>
        </p>
        <br>
        <h3>What can I do on this website?</h3> 
        <p style="line-height:1.6;"> 
            <span class="glyphicon glyphicon-globe"></span> Browse the website for inspiration, advice, and memories
            <br><span class="glyphicon glyphicon-globe"></span> Find particular blogs by geography, category, or keywords
            <br><span class="glyphicon glyphicon-globe"></span> Register to become part of the ever-growing MyEscape community
            <br><span class="glyphicon glyphicon-globe"></span> Share your own content and inspire even more people
            <br><span class="glyphicon glyphicon-globe"></span> Incorporate your Instagram and Twitter feeds with your blog posts
        </p>
        <br>
        <h3>Meet the team</h3>
        <center>
        <div class="col-sm-1"  >
        </div>
    </div>
  </div>
  <div class="row">
<!--    <div class="col-sm-2 col-md-2"  >
    </div>-->
    <div class="col-xs-12 col-sm-5 col-md-3 text-center"  >
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/MyEscape/views/images/ash.jpg" class="avatar" alt="Ash">  
                </div>
                <div class="flip-card-back">
                    <h4>Ash</h4> 
                    <p>Top 3 places: x,y,z</p>
                    <p>Travel tip: Insert text here</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-3 text-center"  >
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/MyEscape/views/images/dhanu.jpg" class="avatar" alt="Dhanu"> 
                </div>
                <div class="flip-card-back">
                    <h4>Dhanu</h4> 
                    <p>Top 3 places: x,y,z</p> 
                    <p>Travel tip: Insert text here</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1  hidden-lg hidden-md">
    </div>
    <div class="col-sm-1 hidden-lg hidden-md" >
    </div>
    <div class="col-xs-12 col-sm-5 col-md-3 text-center"  >
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/MyEscape/views/images/faith.jpg" class="avatar" alt="Faith">
                </div>
                <div class="flip-card-back">
                    <h4>Faith</h4> 
                    <p>Top 3 places: <br>Tanzania, Cuba, Brazil</p>
                    <p>Travel tip: Never turn down a clean toilet<br>opportunity!</p>
                </div>
            </div>
        </div>
    </div>
      
    <div class="col-xs-12 col-sm-5 col-md-3 text-center"  >
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/MyEscape/views/images/jomana.jpg" class="avatar" alt="Jomana">
                </div>
                <div class="flip-card-back">
                    <h4>Jomana</h4> 
                    <p>Top 3 places: x,y,z</p> 
                    <p>Travel tip: Insert text here</p>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="col-sm-2 col-md-2">
    </div>-->
  </div>
</center>
    
  <div class="row">
    <div class="col-sm-1"  >
    </div>
    <div class="col-xs-12 col-sm-10"  >    
    <br>
    <h3>Get in touch</h3> 
    <p> Pop up contact us form here
        mini navbar at top which takes to lower pages in site?
    </p>
    </div>
    <div class="col-sm-1"  >
    </div>
  </div>
      
        
    

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
