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
<!--no longer needed - flexible navbar  <a href='?controller=pages&action=logout'>logout</a>-->

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New blog post</title>
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


    </head>
    <body> 
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-4">
                    <br>
                    <h2 align="center"><b>               
                        <a href='?controller=user&action=readMine&username=<?php echo $_SESSION['username']; ?>'>See my blogs</a> &nbsp; &nbsp;
                        </b></h2>
                </div>
                <div class="col-sm-4">    

                    <form action="" method="POST" class="w3-container" enctype="multipart/form-data"> 

                        <br>
                        <h2 align="center"><b>New Blog Post</b></h2>
                        <hr class="colorgraph">                                                                       
                        <div class="row">
                            <p><b>Fill in the following form to write a new blog :</b></p>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div><lable> Title</lable>
                                    <input type="text" name="title" id="title" autofocus="" class="form-control input-lg" placeholder=" Blog Title" tabindex="1" required>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                               
                                <div><lable> Select Category</lable>
                                    <select name = "categoryName" tabindex=" ">
                                      
                                        <?php
                                        foreach ($result as $row) {
                                            echo '<option value ="' . $row['CategoryName'] . '">' . $row['CategoryName'] . '</option>';
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <lable> Select Country</lable>
                                    <select name = "countryName" tabindex="3" >

                                        <?php
                                        foreach ($result_cou as $row) {
                                            echo '<option value ="' . $row['CountryName'] . '">' . $row['CountryName'] . '</option>';
                                        }
                                        ?>

                                    </select>

                                </div>
                            </div>
                          
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <lable> Select Continent</lable>
                                    <select name = "continentName" tabindex="4">

                                        <?php
                                        foreach ($result_con as $row) {
                                            echo '<option value ="' . $row['ContinentName'] . '">' . $row['ContinentName'] . '</option>';
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                
                        <br>
                        <div><lable>Write content</lable>
                            <textarea name="content" id="content" class="form-control input-lg" placeholder=" Content" tabindex="5" cols="100" rows="10" required></textarea>
                        </div>
                        <br>
                        <div>
                            <input type="hidden" 
                                   name="MAX_FILE_SIZE" 
                                   value="10000000"
                                   />

                            <input type="file" name="blogUploader" class="w3-btn w3-pink" />
                        </div>                   
                        <br>
                        <div class="form-group"> 

                            <input style=" align: center; background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block btn-lg" tabindex="6">

                        </div>


                    </form>  
                  <!--  <script>
                        CKEDITOR.replace( "content" );
                </script>  -->
               </div>
            </div>

        </div> <!-- row-->
    
</html>