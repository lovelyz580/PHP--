<?php
    session_start();
     include 'sqlDB.php';
     //博客
     $sql ="select * from gallery_list";
     $hl = executeQuery($sql);
     
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>画廊</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/gallery.css">
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
        
        <div class="facilities">
	<div class="container">
		<h3 class="tittle">画廊</h3> 
                <!--循环遍历一个div-->
            <?php 
            foreach($hl as $key =>$value):
                ?>
                       <div class="view view-seventh">
                      <a href="<?php echo $value['img_url'] ?>" class="swipebox" 
                       title="Image Title"><img src="<?php echo  $value['img_url'] ?>" 
                      alt="" class="img-responsive">
                                  <div class="mask">
                                    <h4>FRUIT CRUSH</h4>
                                    <p><?php echo  $value['gallery_introduce'] ?></p>
                                  </div>
                      </a>
                </div>
            <?php     
            endforeach;  
            ?>
                
           <div class="clearfix"></div>
</div>
</div>
        
<?php
        include 'footer.php';
        ?>
<style>
    
    .footer-ban {
    padding-top: 45px;
}
</style>
    </body>
</html>
