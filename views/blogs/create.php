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
                    background-size: auto;
                    opacity: 0.50;
                    }
            .form_attribs
            {
                font-family: 'Oswald', sans-serif; 
                
                color: chocolate; 
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
        <div class='fader'>
        </div>  
      
        <div class="container-fluid ">

            <div class="row">

            
                <div class="col-md-12">    
                    
                    
                    <form action="" method="POST" class="w3-container form_attribs" enctype="multipart/form-data"> 
                        <br><br><br>                                               
                        <div class="row">
                            
                             <div class="col-md-12" align="center">
                             <span class="contact2-form-title">
                                Create a Blog Post
                            </span>
                             </div>
                            
                        </div>
                        <hr class="colorgraph">                                                                       
                        <div class="row">
                           
                            
                                <div class="col-md-4" align="right">
                                    <label> Title</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="title" id="title" autofocus="" class="form-control input-lg" placeholder=" Blog Title" tabindex="1" required>
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
                                    <select name = "categoryName" tabindex=" ">
                                      
                                        <?php
                                        foreach ($result as $row) {
                                            echo '<option value ="' . $row['CategoryName'] . '">' . $row['CategoryName'] . '</option>';
                                        }
                                        ?>

                                    </select>

                                </div>
                            
                        </div>
                        <div class="row"><br></div>
                        <div class="row">
                            
                                <div class="col-md-4"align="right">
                                    <label>Country</label>
                                </div>
                                <div class="col-md-8">
                                    <select name = "countryName" tabindex="3" >

                                        <?php
                                        foreach ($result_cou as $row) {
                                            echo '<option value ="' . $row['CountryName'] . '">' . $row['CountryName'] . '</option>';
                                        }
                                        ?>

                                    </select>

                                </div>
                        </div>
                        <div class="row"><br></div>
                        <div class="row">
                            <div class="col-md-4"align="right">
                                <label> Continent</label>
                            </div>
                            <div class="col-md-8">
                                    <select name = "continentName" tabindex="4">

                                        <?php
                                        foreach ($result_con as $row) {
                                            echo '<option value ="' . $row['ContinentName'] . '">' . $row['ContinentName'] . '</option>';
                                        }
                                        ?>

                                    </select>
                            </div>                           
                        </div>
                        <div class="row"><br></div>    
                        
                        <div class="row">
                           <div class="col-md-4"align="right">
                                <label> Blog content</label> 
                            </div>
                            <div class="col-md-6">
                            <textarea  name="content" id="content" class="form-control input-lg" placeholder=" Content" tabindex="5" cols="100" rows="10" required></textarea>
                            </div>
                            <div class="col-md-2">
                                   
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
                            <input type="file" name="blogUploader" class="w3-btn w3-pink" />
                            </div>
                            
                            <div class="col-md-3" align="center">       
                                <!--<input style=" background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" name="submit" value="Post" class="btn btn-primary btn-block btn-sm" tabindex="6">-->
                                <input type="submit" style=" background-color: E88D67;box-shadow: 0px 8px 15px rgba(0,0,0,0.1) " name="submit" value="Post" class="btn btn-primary btn-block btn-sm form_attribs" tabindex="6">
   
                            </div>
                            <div class="col-md-3">
                                   
                            </div>   
                               
                        </div>

                    </form>
                    
                    <script>
                        CKEDITOR.replace( "content" );
                        
                    </script>  
               </div>
            </div>

        </div> <!-- row-->
  
    </body>
</html>