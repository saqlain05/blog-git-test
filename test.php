<?php require('top.php');
$sql="select * from blog";
$res=mysqli_query($con,$sql);
?>
<link rel="stylesheet" href="blog.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
			
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

<div class="container">
	 <div id="blog" class="row">
    
                             <?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
                            <div class="col-md-10 blogShort">
                                        
                     <h1><?php echo $row['title']?></h1>
                     <img src="images/skintone.jpg" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail" id="img">
                     
                         <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank"><?php echo $row['blogername']?></a></em>
                     <article><p>
                     <?php echo $row['blogtext']?>
                         </p></article>
                     <a class="btn btn-blog pull-right marginBottom10" href="readmore.php">READ MORE</a>
                                        
                 </div>
                 <?php } ?>
     </div>
     </div>
     <br>

     <?php require('footer.php');?>