<?php

session_start();
if (isset($_POST['Username'])) {
$_SESSION['Username'] = $_POST['Username'];
}
?>
  <a href='?controller=pages&action=logout'>logout</a>
  
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New blog post</title>
     
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
        <link href="librarystyling.css" rel="stylesheet" type="text/css"> 
        <script src="checkForm.js" type="text/javascript"></script>  <!-- Added java script file to get call to the function checkPassword-->
    </head>
    <body> 
        
        <div class="row">
            
            
            <div class="col-sm-4">  
            </div>
            <div class="col-sm-4">    
              
                    <form action="" method="POST" class="w3-container" enctype="multipart/form-data"> 
     
                    <br>
                     <h2 align="center"><b>New Blog Post</b></h2>
                        <hr class="colorgraph">
                        
                        
                        
                        <div class="row">
                            <p>Fill in the following form to create a new :</p>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Title" id="Title" class="form-control input-lg" placeholder=" Blog Title" tabindex="1" required>
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="Category" id="Category" class="form-control input-lg" placeholder=" Category" tabindex="2" required>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                <input type="text" name="Country" id="Country" class="form-control input-lg" placeholder=" Country" tabindex="3">
                            </div>
                        <div class="form-group">
                                    <input type="text" name="Continent" id="Continent" class="form-control input-lg" placeholder="Continent" tabindex="4">
                                </div>
                      <div class="form-group">
                            <textarea name="Content" id="Content" class="form-control input-lg" placeholder=" Content" tabindex="5" cols="400" rows="10"></textarea>
                      </div>
                       
            <div>
                        <input type="hidden" 
                               name="MAX_FILE_SIZE" 
                               value="10000000"
                               />

                        <input type="file" name="myUploader" class="w3-btn w3-pink"  required />
                    </div>

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button class="btn" data-original-title="Bold - Ctrl+B"><i class="icon-bold"></i></button>
                                <button class="btn" data-original-title="Italic - Ctrl+I"><i class="icon-italic"></i></button>
                                <button class="btn" data-original-title="List"><i class="icon-list"></i></button>
                                <button class="btn" data-original-title="Img"><i class="icon-picture"></i></button>
                                <button class="btn" data-original-title="URL"><i class="icon-arrow-right"></i></button>
                            </div>
                            <div class="btn-group">
                                <button class="btn" data-original-title="Align Right"><i class="icon-align-right"></i></button>
                                <button class="btn" data-original-title="Align Center"><i class="icon-align-center"></i></button>
                                <button class="btn" data-original-title="Align Left"><i class="icon-align-left"></i></button>
                            </div>
                            <div class="btn-group">
                                <button class="btn" data-original-title="Preview"><i class="icon-eye-open"></i></button>
                                <button class="btn" data-original-title="Save"><i class="icon-ok"></i></button>
                                <button class="btn" data-original-title="Cancel"><i class="icon-trash"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group"> 
                            
                            <input style=" align: center; background-color: #183149; font-size: 15px; border-radius: 5px; border: none; box-shadow: 0px 8px 15px rgba(0,0,0,0.1); padding-top: 12px; padding-right: 27; padding-bottom: 12; padding-left: 27" type="submit" name="submit" value="SUBMIT" class="btn btn-primary btn-block btn-lg" tabindex="6">
        
                       </div>
                        
                        <div class="row">
                       
                                <a href='?controller=user&action=readMine&Username=<?php echo $_SESSION['Username']; ?>'> See my blogs </a> &nbsp; &nbsp;
                                
                                


                        </div>
                </form>    
            </div>
            </div>
        </div> <!-- row-->