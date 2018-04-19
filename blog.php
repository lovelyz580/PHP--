<?php
    session_start();
     include 'sqlDB.php';
     //博客
     $sql ="select * from blog_list";
     $tj = executeQuery($sql);
     
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>博客</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/blog.css">
        <script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="./js/responsiveslides.js"></script>
        <script type="text/javascript" src="./js/easing.js"></script>
        <script type="text/javascript" src="./js/move-top.js"></script>
    </head>
    <body>
         <!--头-->
       <?php
        include 'head.php';
        ?>
        <!--导航栏-->
      <?php
        include 'nav.php';
        ?>
                <!-- banner -->
<div class="banner pagade-head">	
</div>
<!-- //banner -->
        <div class="blog-section">
	<div class="container"> 
		<h3 class="tittle">博客</h3>
                <div class="col-md-4 blog-post-grids" >
			<div class="blog-post">
					<a href="single.html"><img src="<?php echo $tj[0]['img_url'] ?>" class="img-responsive" alt="  "></a>
					<div class="text">
						<a href="single.html"> <?php echo $tj[0]['blog_title'] ?></a>
					</div>
					<div class="admin-tag">
					<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
					<p class="erat"><?php echo $tj[0]['blog_content'] ?></p>
					<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
					</div>
			</div>
			<div class="blog-post">
					<a href="single.html"><img src="<?php echo $tj[3]['img_url'] ?>" class="img-responsive" alt="  "></a>
					<div class="text">
						<a href="single.html"> <?php echo $tj[3]['blog_title'] ?></a>
					</div>
					<div class="admin-tag">
					<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
					<p class="erat"><?php echo $tj[3]['blog_content'] ?></p>
					<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
					</div>
			</div>
                </div>
		<div class="col-md-4 blog-post-grids" >
			<div class="blog-post">
				<a href="single.html"><img src="<?php echo $tj[1]['img_url'] ?>" class="img-responsive" alt="  "></a>
				<div class="text">
					<a href="single.html"><?php echo $tj[1]['blog_title'] ?></a>
				</div>
				<div class="admin-tag">
				<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
				<p class="erat"><?php echo $tj[1]['blog_content'] ?></p>
				<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
				</div>
			</div>
			<div class="blog-post">
				<a href="single.html"><img src="<?php echo $tj[4]['img_url'] ?>" class="img-responsive" alt="  "></a>
				<div class="text">
					<a href="single.html"> <?php echo $tj[4]['blog_title'] ?></a>
				</div>
				<div class="admin-tag">
				<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
				<p class="erat"><?php echo $tj[4]['blog_content'] ?></p>
				<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
				</div>
			</div>
		</div>
		<div class="col-md-4 blog-post-grids" >
			<div class="blog-post">
				<a href="single.html"><img src="<?php echo $tj[2]['img_url'] ?>" class="img-responsive" alt="  "></a>
				<div class="text">
					<a href="single.html"> <?php echo $tj[2]['blog_title'] ?></a>
				</div>
				<div class="admin-tag">
				<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
				<p class="erat"><?php echo $tj[2]['blog_content'] ?></p>
				<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
				</div>
			</div>
			<div class="blog-post">
				<a href="single.html"><img src="<?php echo $tj[5]['img_url'] ?>" class="img-responsive" alt="  "></a>
				<div class="text">
					<a href="single.html"> <?php echo $tj[5]['blog_title'] ?></a>
				</div>
				<div class="admin-tag">
				<p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p>
				<p class="erat"><?php echo $tj[5]['blog_content'] ?></p>
				<a href="single.html" class="hvr-rectangle-out button-more">Readmore<span> </span></a>
				</div>
			</div>
                </div>
		<div class="clearfix"> </div>
	</div>
            </div>
	<!--start-news-pagenate-->
<div class="blog-pagenat">
					<ul>
						<li><a class="frist" href="#">Prev</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a class="last" href="#">Next</a></li>
					</ul>
				</div>
			<!--//End-news-pagenate-->
	</div>
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
            <?php
        include 'footer.php';
        ?>
<style>
    
    .footer-ban {
    padding-top: 95px;
}
</style>
    </body>
</html>
