
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyEscape</title>
    </head>
    <body>
        <?php
            require_once('connection.php');

            if (isset($_GET['controller']) && isset($_GET['action'])) {
                $controller = $_GET['controller'];
                $action     = $_GET['action'];
            } else {
                $controller = 'pages';
                $action     = 'home';
            }

          #require_once('views/layout.php')
            
            $thumbButtons = ['likeBlog', 'dislikeBlog'];

            if (in_array($action, $thumbButtons)) {
                  require_once('routes.php'); 
            }
            else {
            require_once('views/layout.php');
            }


                ?>
    </body>
</html>
