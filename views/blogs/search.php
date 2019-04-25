


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
    </head>
    <body>
 
        
<p>Search for a blog below</p>

<!--<form action=" " method="POST">-->
    <input type="text" name="query" id="query" placeholder="Enter your search here"/>
<!--    <input type="submit" id="search_button" value="Search" />-->
<!--</form>-->
<!--<div id="searchresults" id="result">-->
    <div id="result">
    <h2>Results</h2>

 </div>

<!--</div>-->


   
&nbsp; &nbsp;

       <script>
           
           
 $(document).ready(function(){
    $('#query').keyup(function(){
        var txt = $(this).val();
        if (txt != '')    
        {
            $.ajax({
                url:"index.php?controller=blog&action=search",
                method:"post",
                data:{query:txt},
                datatype:"text",
                success:function(data)
                {
                   
                    $('#result').html(data);
                }
            });
            
        }
        else {
                    $('#result').html(" ");
                }
          
    });
});

</script>

    </body>
</html>