<html>
	<head>
		<meta charset="UTF-8">
		<title>首页</title>
                <link rel="stylesheet" href="css/css.css">
		<link href="./css/index.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- start-smoth-scrolling -->
	    <script type="text/javascript" src="js/move-top.js"></script>
	    <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="./js/responsiveslides.js"></script>
        <script type="text/javascript" src="./js/easing.js"></script>
        <script type="text/javascript" src="./js/move-top.js"></script>
	    <script type="text/javascript">
	    jQuery(document).ready(function($) {
	        $(".scroll").click(function(event) {
	            event.preventDefault();
	            $('html,body').animate({
	                scrollTop: $(this.hash).offset().top
	            }, 1000);
	        });
	    });
	    </script>
    	<!-- start-smoth-scrolling -->
	</head>
	<body>

<!--头-->
<style>
    header>.header_top>.header-top-mid{
        margin-top: -2px;
    }
    
</style>
        <?php
        include 'head.php';
        ?>
        <!--导航栏-->
      <?php
        include 'nav.php';
        ?>
<!-- banner -->
<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。农夫山泉有点甜，再甜能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>FRUIT CRUSH</h3>
							<h4>我们只生产有中国特色社会主义的果汁</h4>
							<p>“一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。
矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。其实农夫山泉一点都不甜，这是真的，你不信可以去尝尝，就知道我说的是不是真的了。话说这个真的是真的，为啥这么多的废话呢，主要是you believe me.你相信我之后你就会发现你被我骗了。</p>
							<a class="hvr-rectangle-out button" href="blog.php">了解更多</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>
	</div>
</div>
<!-- //banner -->



<!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-head">
            	<div class="welcom-line">
            		<div class="left-line"></div>
                	<h3 class="tittle">欢迎光临</h3>
                	<div class="right-line"></div>
                </div>
                <div class="wel-img mask text-center">
                    <a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/1.jpg" alt="" /></a>
                </div>
                <h4>我们只生产有中国特色社会主义的果汁</h4>
                <p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。矿泉水，早已经是人们日常生活中最常消费的饮品，即便顶尖规格的会议中也少不了它的身影。一瓶水的方寸之间，能做出什么样的文章？在刚刚过去的G20杭州峰会期间，频频出现在镜头里的农夫山泉给出了这么一个答案：质量、设计、细节的追求，“毫升”之间的匠心独运。连农夫山泉总裁办公室主任钟晓晓也感到意外，在全世界媒体对G20杭州峰会每一处细节都不放过的报道之中，在主会场、茶歇区、新闻中心、各大接待酒店以及国宴餐桌上，都能看到农夫山泉饮品的身影作为G20杭州峰会的工作和厨房用水的农夫山泉倒突然有了几分“网红”的待遇。</p>
            </div>
        </div>
    </div>
<!-- //welcome -->


<!-- our specials -->
	<div class="specials">
		<div class="specials-content">
			<div class="specials-title">
				<p><strong>我们的特色饮品</strong></p>
			</div>
			<div class="specials-p">
				<div class="specials-1">
                    <figure class="specials-1-1">
                        <img src="images/4.jpg" alt="" />
                        <figcaption>
                            <h4>FRUIT CRUSH</h4>
                            <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                        </figcaption>
                    </figure>
               </div>
				<div class="specials-2">
					<p><strong>我们只生产有中国特色社会主义的果汁</strong></p>
					<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
				</div>
				<div class="specials-3">
					<p id="s3"><strong>我们只生产有中国特色社会主义的果汁</strong></p>
					<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
				</div>
				<div class="specials-4">
					<figure class="specials-4-1">
                        <img src="images/3.jpg" alt="" />
                        <figcaption>
                            <h4>FRUIT CRUSH</h4>
                            <p>In sit amet sapien eros Integer quibusdam et aut officiis debitis aut rerum in tincidunt labore et dolore magna aliqua</p>
                        </figcaption>
                    </figure>
				</div>
			</div>
			
		</div>
	</div>
<!-- //our specials -->


<!-- act -->
	<div class="act">
		<div class="act-content">
			<div class="act-title">
				<h3 class="tittle">特色活动</h3>
			</div>
			<div class="act-left">
				<div class="left1">
					<div class="act-img1"><p>05 / 03</p></div>
					<div class="act-word1">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
				<div class="left2">
					<div class="act-img2"><p>07 / 04</p></div>
					<div class="act-word2">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
				<div class="left3">
					<div class="act-img3"><p>05 / 05</p></div>
					<div class="act-word3">
						<span><strong>我们只生产有中国特色社会主义的果汁</strong></span>
						<p>这是一大段文案我也不知道写啥 百度翻译也没法翻译 反正就是不会写 巴拉巴拉巴拉巴贝拉把巴拉巴拉白萝卜 “一年多以前，和农夫山泉创始人钟睒睒一起去长白山，飞机上他和我说，他要做一款中国国家领导人接待外宾时桌子上放的水今天，他做到了！”钱江晚报记者的朋友圈，前些天有位前辈“大慰平生”发了这一段文字。</p>
					</div>
				</div>
			</div>
			</div>
			<div class="act-right">
				<div class="right-img"></div>
			</div>
		</div>
	</div>

<!-- //act -->

<div style="float: right;"><a  target="_blank" href="../1.html"> 列表展示</a></div>
<!--footer-->
  <?php
        include 'footer.php';
        ?>


<!-- smooth scrolling -->
    
    <!-- //smooth scrolling -->
	</body>
		