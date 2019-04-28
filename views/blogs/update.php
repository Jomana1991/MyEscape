<?php
#session_start();//removed as now in layout
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
$db = Db::getInstance();
if (!is_null($db)) {
    try {
        $stmt = $db->prepare("select CategoryName from category");
        $stmt_con = $db->prepare("select ContinentName from continent");
        $stmt_cou = $db->prepare("select CountryName from country");

        $stmt->execute();
        $stmt_con->execute();
        $stmt_cou->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result_con = $stmt_con->fetchAll(PDO::FETCH_ASSOC);
        $result_cou = $stmt_cou->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $e->getMessage();
        // log this exception somewhere
    } catch (Exception $ex) {
        $ex->getMessage();
        // log this exception somewhere
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>


        <!-- Latest compiled JavaScript -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

        <style>


            .form_attribs
            {
                font-family: 'Roboto', sans-serif;
                color: chocolate; 
            }
            .bg-contact2 {
                width: 100%;  
                background-repeat: no-repeat;
                background-position: center center;
                background-size: cover;
                color: #001D4A ;
            }

            .container-contact2 {
                width: 100%;  
                min-height: 100vh;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                padding: 10px;



            }



            .wrap-contact2 {
                width: 1000px;
                background: #fff;
                border-radius: 10px;
                overflow: hidden;
                padding: 72px 55px 90px 55px;


            }

            span {
                display: block;
                font-family: 'Sacramento', cursive;
                font-size: 70px;
                color: #E88D67 ;
                line-height: 1.2;
                text-align: center;

            }

        </style>
    </head>
    <body>
        <div class="bg-contact2" style="background-image: url('./img/share.jpg'); opacity: 0.7;">
            <div class="container-contact2">
                <div class="wrap-contact2" >



                    <div class="col-md-12">   
                        <div class="col-md-12">    

                            <form action="" method="POST" class="w3-container form_attribs" enctype="multipart/form-data"> 
                               
                                
                                <div class="row">

                                    <div class="col-md-12" align="center">
                                        <span> Update Blog Post </span>
                                    </div>

                                </div>
                                <br>  
                                <br>  
                                 <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                       
                                         <input type="text" class="form-control-plaintext" id="staticEmail" name="username" value="<?= $blog->username; ?>">
                                    </div>
                                </div>
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                       
                                         <input class="form-control-plaintext" id="staticEmail" type="text" name="title" value="<?= $blog->title; ?>">
                                    </div>
                                </div>
                           <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                       
                                         <input class="form-control-plaintext" id="staticEmail" type="text" name="categoryName" value="<?= $blog->categoryName; ?>">
                                    </div>
                                </div>
                                
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-10">
                                       
                                         <input class="form-control-plaintext" id="staticEmail" type="text" name="countryName" value="<?= $blog->countryName; ?>" tabindex="3">
                                    </div>
                                </div>
                       
                                  <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Continent</label>
                                    <div class="col-sm-10">
                                       
                                         <input class="form-control-plaintext" id="staticEmail" type="text" name="continentName" value="<?= $blog->continentName; ?>" tabindex="4">
                                    </div>
                                </div>
                            <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Content</label>
                                    <div class="col-sm-10">
                                       
                                        <textarea  class="form-control-plaintext" name="content"  class="w3-input" tabindex="5" cols="100" rows="10" ><?= $blog->content; ?> </textarea> 
                                    </div>
                                </div>
                            
                                <div class="row"><br></div>    
                                <div class="row">

                                    <div class="col-md-5" align="center">
                                        <input type="hidden" 
                                               name="MAX_FILE_SIZE" 
                                               value="10000000"
                                               />

                                        <?php
                                        $file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

                                        if (file_exists($file)) {
                                            $img = "<img src='$file' width='150' />";
                                            echo $img;
                                        }
                                        ?>
                                        <input type="file" name="blogUploader" class="w3-btn w3-pink" />
                                    </div>

                                    <div class="col-md-5" align="center">       
                                        <!--<input style=" background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" name="submit" value="Post" class="btn btn-primary btn-block btn-sm" tabindex="6">-->
                                        <input type="submit" style=" background-color: #E88D67;box-shadow: 0px 8px 15px rgba(0,0,0,0.1) " name="submit" value="Update Blog" class="btn btn-primary btn-block btn-sm form_attribs" tabindex="6">

                                    </div>
                                    <div class="col-md-9">

                                    </div>   

                                </div>

                            </form>   

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row-->

    </body>
</html>          



<!--                
                
<p>
    <textarea  name="content" id="content" class="w3-input" value="<?= $blog->content; ?>" tabindex="5" cols="100" rows="10" ></textarea>

    <input class="w3-input" type="textarea" name="content" value="<?= $blog->content; ?>" >
    <label>Content</label>
</p>
        
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

<?php
$file = 'views/blogImages/' . $blog->title . "_" . $blog->username . '.jpeg';

if (file_exists($file)) {
    $img = "<img src='$file' width='150' />";
    echo $img;
}
?>
<br/>
  <input type="file" name="blogUploader"  />
  <p>
    <input type="submit" style=" background-color: E88D67;box-shadow: 0px 8px 15px rgba(0,0,0,0.1) " name="submit" value="Update Blog" class="btn btn-primary btn-block btn-sm form_attribs" tabindex="6">
    </p>

-->