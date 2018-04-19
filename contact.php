<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>联系</title>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/contact.css">
        <script type="text/javascript" src="./js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="./js/responsiveslides.js"></script>
        <script type="text/javascript" src="./js/easing.js"></script>
        <script type="text/javascript" src="./js/move-top.js"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8lHd0I4YG8BM75WxHcaMDBZlymnoZiHq">
        </script> 
         
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
        <div class="contact-content">
		<div class="contact-title">联系我们</div>
		<div class="contact-c">
			<div class="contact-left">
				<form action="contact.php" method="post">
					<p>你的名字</p><input type="text" name="username" id="name" pattern="^[a-zA-Z]\w{2,7}" placeholder="请输入您的真实姓名">
					<p>你的电子邮箱</p><input type="email" name="email" id="email" title="email的格式是 XXX@XXX.XXX" placeholder="请输入您的真实邮箱">
					<p>你的意见</p><textarea id="content" name="content" rows="" cols="" placeholder="请输入您的真实意见"></textarea>					
					<input id="submit" type="submit" name="submit" value="提交">
				</form>
			</div>
			
			<div class="contact-right">
				<div class="right-title">我们的位置</div>
				<div class="right-content">
					<p class="right-p1">	我们位于保定市军校广场，保定有“京畿重地”之称，是京津冀地区中心城市之一，北邻北京市和张家口市，东接廊坊市和沧州市，南与石家庄市和衡水市相连，西部与山西省接壤。</p>
					<p class="right-p2">保定以“保卫大都，安定天下”得名，素有“北控三关南达九省畿辅重地，都南屏翰”之称。清代，保定为直隶省省会，是直隶总督驻地，在此后200多年间为中国近代史上的区域性政治中心新中国成立后曾两度为河北省省会保定也是传说中尧帝的故乡，有着3000多年的历史是历史上燕国、中山国、后燕立都之地境内文物古迹众多，如大慈阁、直隶总督署、清西陵等</p>
				</div>
				<div class="right-contact">
					<div class="right-contact1">
						保定市 莲池区<br>
						东风东路<br>
						999号<br>
					</div>
					<div class="right-contact2">
						Tel: +1 234-567-890<br>
						Fax: +1 646-216-9789<br>
						Email: info@yourdomain.com<br>
					</div>
				</div>
			</div>
		</div>
	</div>
        
        
        
        
        
        <div  class="map">
            <div class="contact-map" id="allmap" >
                
           </div>
         </div>
        <div style="    margin-left: 580px;
    margin-bottom: 200px;
    margin-top: -180px;">
            
            
            
        <h3>请输入你想知道的地方：</h3><input type="text" value="" id="inputValue"/><input type="button" value="确定" id="input"/>
        </div>
        
        
        <div style="float: right;"><a  target="_blank" href="../indexx.html"> 结束展示</a></div>
     <?php
        include 'footer.php';
        ?>
<style>
    
    .footer-ban {
    padding-top: 95px;
}
</style>
    </body>
    
        <script type="text/javascript">
             var map = new BMap.Map("allmap");          // 创建地图实例  
        var myGeo = new BMap.Geocoder();
        myGeo.getPoint("河北软件职业技术学院东校区", function (point) {
            if(point){
                map.centerAndZoom(point,16);
                var  mark=new BMap.Marker(point);
                var  opts ={
                    width:200,
                    height:100,
                    title:"河北软件职业技术学院东校区"
                };
                var infoWindow = new BMap.InfoWindow("",opts);
                mark.addEventListener("click",function( ) {
                    map.openInfoWindow(infoWindow,point);
                });
                map.addOverlay(mark);
                
                
            }else{
                alert("您选择的地址没有解析到结果！")
            }
        },"保定市")
            
            
            
            
           input.onclick=function(){
          var temp = $('#inputValue').val();//获取值
//           alert(temp);
            var map = new BMap.Map("allmap");          // 创建地图实例  
        var myGeo = new BMap.Geocoder();
        myGeo.getPoint(temp, function (point) {
            if(point){
                map.centerAndZoom(point,16);
                var  mark=new BMap.Marker(point);
                var  opts ={
                    width:200,
                    height:100,
                    title:(temp)
                };
                var infoWindow = new BMap.InfoWindow("",opts);
                mark.addEventListener("click",function( ) {
                    map.openInfoWindow(infoWindow,point);
                });
                map.addOverlay(mark);
                }else{
                alert("您选择的地址没有解析到结果！")
            }
        },"地球")}

            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
       
      
        
        </script>
</html>
