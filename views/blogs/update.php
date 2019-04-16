<p>Fill in the following form to update an existing blog:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update Blog</h2>
    <p>
        <input class="w3-input" type="text" name="username" value="<?= $blog->username; ?>">
        <label>Username</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="countryName" value="<?= $blog->countryName; ?>" >
        <label>Country</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="continentName" value="<?= $blog->continentName; ?>" >
        <label>Continent</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="categoryName" value="<?= $blog->categoryName; ?>" >
        <label>Category</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="title" value="<?= $blog->title; ?>" >
        <label>Title</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="content" value="<?= $blog->content; ?>" >
        <label>Content</label>
    </p>
            
<!-- <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />-->
<?php 
//$file = 'views/images/' . $product->name . '.jpeg';
//if(file_exists($file)){
//    $img = "<img src='$file' width='150' />";
//    echo $img;
//}
//else
//{
//echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
//}
//
//?>
<!--  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />-->
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update Blog">
    </p>
</form>