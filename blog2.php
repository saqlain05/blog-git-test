<?php require('top.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
  #img{
    width: 300px;
  height: 180px;
  
  }
body{
  background-color:white;
}

  @media (max-width:768px){
    #img{
    width: 500px;
  height: 250px;
  } 
}

</style>
<link rel="stylesheet" href="blog.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
  <br>
<div class="container">
	 <div id="blog" class="row"> 
                 <div class="col-md-10 blogShort">
                     <h1>Title 1</h1>
                     <img src="images/skintone.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" id="img">
                     
                         <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank">Sexy Sidebar Navigation</a></em>
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.    
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="readmore.php">READ MORE</a>
                 </div>
                  <div class="col-md-10 blogShort">
                     <h1>Title 2</h1>
                     <img src="images/skintone.jpg" alt="post img" id="img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="readmore.php">READ MORE</a> 
                 </div>
                 
                  <div class="col-md-10 blogShort">
                     <h1>Title 3</h1>
                     <img src="images/skintone.jpg" id="img" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                     <article><p>
                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                         five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                         of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                         Lorem Ipsum.
                         </p></article>
                     <!-- <a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a>  -->
                     <a class="btn btn-blog pull-right marginBottom10" href="readmore.php">READ MORE</a> 
                 </div>
                 
               <div class="col-md-12 gap10"></div>
             </div>
</div><br>
</body>
</html>
<?php require('footer.php')?>