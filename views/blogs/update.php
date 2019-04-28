<?php
#session_start();//removed as now in layout
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
$db = Db::getInstance();
 if(!is_null($db)){
     try{
$stmt = $db->prepare("select CategoryName from category");
$stmt_con = $db->prepare("select ContinentName from continent");
$stmt_cou = $db->prepare("select CountryName from country");

$stmt->execute();
$stmt_con->execute();
$stmt_cou->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result_con = $stmt_con->fetchAll(PDO::FETCH_ASSOC);
$result_cou = $stmt_cou->fetchAll(PDO::FETCH_ASSOC);
     }catch(PDOException $e){
                $e->getMessage();
                // log this exception somewhere
            }
            catch(Exception $ex){
              $ex->getMessage();  
              // log this exception somewhere
            }           
 }
?>
<html>
<head>
        <meta charset="UTF-8">
        <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
        
        <!-- (text) ck editor library 
        <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>  -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

        <style>
               @import url('https://fonts.googleapis.com/css?family=Courgette');
                @import url('https://fonts.googleapis.com/css?family=Oswald');

            .fader
            {
            position: absolute;
                    height: 100%;
                    width:100%;
                    left: 0;
                    background-image: url("img/share.jpg");                   
                    background-repeat: repeat;
                    background-position: center;
                    background-size: cover;
                    opacity: 0.50;
                    }
            .form_attribs
            {
               font-family: 'Roboto', sans-serif;
                
                color: chocolate; 
            }
        </style>
    </head>
      <body> 
        
      
        <div class="container-fluid ">

            <div class="row"></div>

            <br> <br> <br>
                <div class="col-md-12">   
            <div class="col-md-12">    
                    
                    
                    <form action="" method="POST" class="w3-container form_attribs" enctype="multipart/form-data"> 
                        <br>                                               
                        <div class="row">
                            
                             <div class="col-md-12" align="center">
                             <h2><b>Update Blog Post</b></h2>
                             </div>
                            
                        </div>
                         <div class='fader'>
                        </div> 
                        
                        <hr class="colorgraph">                                                                       
                        <div class="row">
                        
                                <div class="col-md-4"align="right">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="w3-input" type="text" name="username" value="<?= $blog->username; ?>">
                                    
                                </div>
                        </div>
                               <div class="row"><br></div>
                               <div class="row">
                            
                                <div class="col-md-4" align="right">
                                    <label> Title</label>
                                </div>
                                <div class="col-md-4">
                                    <input class="w3-input" type="text" name="title" value="<?= $blog->title; ?>" >
                                </div>
                                <div class="col-md-4">
                                   
                                </div>
                        </div>              
                    
                        <div class="row"><br></div>
                        <div class="row">
                                <div class="col-md-4"align="right">
                                    <label>Category</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="w3-input" type="text" name="categoryName" value="<?= $blog->categoryName; ?>" >                                    

                                </div>
                            
                        </div>
                        <div class="row"><br></div>
                        <div class="row">
                            
                                <div class="col-md-4"align="right">
                                    <label>Country</label>
                                </div>
                                <div class="col-md-8">
                                    <input class="w3-input" type="text" name="countryName" value="<?= $blog->countryName; ?>" tabindex="3" >
                                    
                                </div>
                        </div>
                        <div class="row"><br></div>
                        <div class="row">
                            <div class="col-md-4"align="right">
                                <label> Continent</label>
                            </div>
                            <div class="col-md-8">
                                    
                                <input class="w3-input" type="text" name="continentName" value="<?= $blog->continentName; ?>" tabindex="4" >
                                     
                            </div>                           
                        </div>
                        
                        <div class="row"><br></div>
                        <div class="row">
                            <div class="col-md-4"align="right">
                                <label> Content</label>
                            </div>
                            <div class="col-md-8">
                                <!--  <input class="w3-input" type="textarea" id="content" name="content" value="<?= $blog->content; ?>" >  --> 
                               <textarea  name="content"  class="w3-input" value="" tabindex="5" cols="100" rows="10" ><?= $blog->content; ?> </textarea> 
                                     
                            </div>                           
                        </div>
                        
                                               
                          <div class="row"><br></div>    
                        <div class="row">
                            <div class="col-md-3">
                                   
                            </div>
                            <div class="col-md-3" align="right">
                            <input type="hidden" 
                                   name="MAX_FILE_SIZE" 
                                   value="10000000"
                                   />
                            
                                <?php 
                                    $file = 'views/blogImages/' . $blog->title ."_".$blog->username. '.jpeg';

                                    if(file_exists($file)){
                                        $img = "<img src='$file' width='150' />";
                                        echo $img;
                                    }

                                ?>
                            <input type="file" name="blogUploader" class="w3-btn w3-pink" />
                            </div>
                            
                            <div class="col-md-3" align="center">       
                                <!--<input style=" background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" name="submit" value="Post" class="btn btn-primary btn-block btn-sm" tabindex="6">-->
                                <input type="submit" style=" background-color: E88D67;box-shadow: 0px 8px 15px rgba(0,0,0,0.1) " name="submit" value="Update Blog" class="btn btn-primary btn-block btn-sm form_attribs" tabindex="6">
   
                            </div>
                            <div class="col-md-3">
                                   
                            </div>   
                               
                        </div>
        
                    </form>   
                    
     
                    
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
        $file = 'views/blogImages/' . $blog->title ."_".$blog->username. '.jpeg';

        if(file_exists($file)){
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