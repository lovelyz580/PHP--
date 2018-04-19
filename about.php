<?php
    session_start();
     include 'sqlDB.php';
     //博客
     $sql ="select * from about";
     $ab = executeQuery($sql);
     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>关于</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/about.css">
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
        
        <!--身体-->
        <!-- banner -->
<div class="banner pagade-head">	
</div>
<!-- //banner -->
<!--about-starts--> 
<div class="about">
	<div class="container">
		<h3 class="tittle">ABOUT</h3>
		<div class="col-md-5 about-grid-left">
			<img class="img-responsive" src="images/6.jpg" alt=""/>
		</div>
		<div class="col-md-7 about-grid">
							<h3>NEQUE PORRO QUISQUAM EST, QUI </h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit 
							voluptatem accusantium doloremque laudantium, totam rem aperiam, 
							eaque ipsa quae ab illo inventore veritatis et numquam eius modi 
							tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
							Ut enim ad minima veniam, quis nostrum</p>
							<p>numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
							Ut enim ad minima veniam, quis nostrum exercitation modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
							Ut enim ad minima veniam, quis</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--start-team-->
<div class="team">
	<div class="container">
		<h3 class="tittle t-two">OUR TEAM</h3>
			<div class="main">
                            
                            <?php 
            foreach($ab as $key =>$value):
                ?>
                            
                            
				<div class="col-md-3 view-grid">
					<div class="view fifth-effect">
						 <a href="#" title="Full Image"><img src="<?php echo $value['img_url'];?>" alt="" /></a>
						 <div class="mask"></div>
					</div> 
				</div>
				
                             <?php     
            endforeach;  
            ?>
               <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--//team-->

<!--advantages-starts--> 
	<div class="advantages">
		<div class="container">
			<div class="col-md-6 advantages-left">
				<h3 class="tittle t-four">OUR ADVANTAGES</h3>
				<div class="advn-one">
						<div class="ad-mian">
							<div class="ad-left">
								<p>1</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">Elacus a porta varius dui</a></h4>
								<p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ad-mian">
							<div class="ad-left">
								<p>2</p>
							</div>
							<div class="ad-right">
								<h4><a href="single.html">Elacus a porta varius dui</a></h4>
								<p>In neque arcu, vulputate vitae dignissim id, placerat adipiscing lorem. Nulla consectetur adipiscing metus vel pulvinar. Aenean molestie mauris non diam tincidunt faucibus. </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="ad-mian">
							<div class="ad-left">
								<p>3</p>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</div>
			</div>
			<div class="col-md-6 advantages-left">
				<h3 class="tittle t-four">OUR SKILLS</h3>
			<div class="advn-two">
						<h4>Erci eu tincidunt lacinia, elit quam ultri ces ipsum, quis ultricies ipsum ante</h4>
						<p>Donec sagittis interdum tellus sed bibendum. Aen ean fringilla ut lacus eu vehicula. Curabitur non nibh quis nisi vestibulum aliquet non sed dolor. Ut est risus, consectetur sit amet pretium in, cursus in dui. Donec ac rhoncus libero.</p>
						<ul>
							<li><a href="#">Praesent vestibulum molestie lacus</a></li>
							<li><a href="#">Donec sagittis interdum tellus</a></li>
							<li><a href="#">Nulla consectetur adipiscing</a></li>
							<li><a href="#">Donec ac rhoncus libero.</a></li>
							<li><a href="#">Erci eu tincidunt lacinia</a></li>
						</ul>
			</div>
			</div>
			<div class="clearfix"></div>
		</div>
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
