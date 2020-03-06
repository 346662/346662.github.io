<!DOCTYPE HTML>
<html>
<head>
<base href="<?php echo $baseurl?>geren_jianyuexingkong/" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $con1?></title>
<link rel="Bookmark" href="favicon.ico" />
<link href="css/index_style.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js" type="text/javascript"></script>

</head>
<body>



<div class="header" id="demo">

	<div class="topcn" style="font:30px/15px 'microsoft yahei'; color:#0FF;text-align:center;">
	  <p>&nbsp;</p>
	  <p><?php echo $con2?></p>
	</div>

    <script type="text/javascript">
    function duihua()
	{
	alert("<?php echo $con5?>")
	}
    </script>
    <div class="nav">
		 <a class="gv" href="<http://dianxin.kahao114.com/>" align="center" target="_blank">中泽卡充值1</a>
         <a class="gv" href="http://xiaozhi.kahao114.com/>" align="center" target="_blank">中泽卡充值2</a>
		 <a class="gv" href="https://iot.ctboss.net/user/login>" onclick="duihua()" align="center" target="_blank">移动卡充值</a>
		 <a class="gv" href="http://zy.iot688.com/iot/iotCeslogin.html" align="center" target="_blank">大龙卡充值</a>
   </div>
    
  <div class="canvaszz"> </div>
  <canvas id="canvas"></canvas> 
</div>


<!-----HEADER END----->

<!--用来解决视频右键菜单，用于视频上面的遮罩层 START-->
<div class="videozz"></div>
<!--用来解决视频右键菜单，用于视频上面的遮罩层 END-->

<!--音乐 END-->


<script>
//宇宙特效
"use strict";
var canvas = document.getElementById('canvas'),
  ctx = canvas.getContext('2d'),
  w = canvas.width = window.innerWidth,
  h = canvas.height = window.innerHeight,

  hue = 217,
  stars = [],
  count = 0,
  maxStars = 1300;//星星数量

var canvas2 = document.createElement('canvas'),
  ctx2 = canvas2.getContext('2d');
canvas2.width = 100;
canvas2.height = 100;
var half = canvas2.width / 2,
  gradient2 = ctx2.createRadialGradient(half, half, 0, half, half, half);
gradient2.addColorStop(0.025, '#CCC');
gradient2.addColorStop(0.1, 'hsl(' + hue + ', 61%, 33%)');
gradient2.addColorStop(0.25, 'hsl(' + hue + ', 64%, 6%)');
gradient2.addColorStop(1, 'transparent');

ctx2.fillStyle = gradient2;
ctx2.beginPath();
ctx2.arc(half, half, half, 0, Math.PI * 2);
ctx2.fill();

// End cache

function random(min, max) {
  if (arguments.length < 2) {
    max = min;
    min = 0;
  }

  if (min > max) {
    var hold = max;
    max = min;
    min = hold;
  }

  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function maxOrbit(x, y) {
  var max = Math.max(x, y),
    diameter = Math.round(Math.sqrt(max * max + max * max));
  return diameter / 2;
  //星星移动范围，值越大范围越小，
}

var Star = function() {

  this.orbitRadius = random(maxOrbit(w, h));
  this.radius = random(60, this.orbitRadius) / 8; 
  //星星大小
  this.orbitX = w / 2;
  this.orbitY = h / 2;
  this.timePassed = random(0, maxStars);
  this.speed = random(this.orbitRadius) / 50000; 
  //星星移动速度
  this.alpha = random(2, 10) / 10;

  count++;
  stars[count] = this;
}

Star.prototype.draw = function() {
  var x = Math.sin(this.timePassed) * this.orbitRadius + this.orbitX,
    y = Math.cos(this.timePassed) * this.orbitRadius + this.orbitY,
    twinkle = random(10);

  if (twinkle === 1 && this.alpha > 0) {
    this.alpha -= 0.05;
  } else if (twinkle === 2 && this.alpha < 1) {
    this.alpha += 0.05;
  }

  ctx.globalAlpha = this.alpha;
  ctx.drawImage(canvas2, x - this.radius / 2, y - this.radius / 2, this.radius, this.radius);
  this.timePassed += this.speed;
}

for (var i = 0; i < maxStars; i++) {
  new Star();
}

function animation() {
  ctx.globalCompositeOperation = 'source-over';
  ctx.globalAlpha = 0.5; //尾巴
  ctx.fillStyle = 'hsla(' + hue + ', 64%, 6%, 2)';
  ctx.fillRect(0, 0, w, h)

  ctx.globalCompositeOperation = 'lighter';
  for (var i = 1, l = stars.length; i < l; i++) {
    stars[i].draw();
  };

  window.requestAnimationFrame(animation);
}

animation();
</script>

	<!-- 音乐代码 -->
	<audio autoplay>
	<source src="<?php echo $con6?>" loop="-17" type="audio/mpeg">
<?php echo $tongji?>
</body>
</html>
