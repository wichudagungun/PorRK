<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
   <title>โรงเรียนร้องกวาง</title>
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="Your description" />
   <meta name="keywords" content="Your keywords" />
   <link rel="shortcut icon" href="images/bambi.gif">
   <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/theme/skytheme.css">
    <link rel="stylesheet" href="css/jaidee-style.css">
	<style>
  img{
  max-width: 100%;
  height: auto; }
}
	</style>

</head>
<body background="images/bg.jpg" bgColor="#FEFEFE" style="background-repeat:repeat-x;">
<div>

<a class="toggleMenu" href="#">Menu</a>
<ul class="nav">
	<li><a href="#">หน้าแรก</a></li>
	<li><a href="#">สถานะห้องปฏิบัติการคอมพิวเตอร์</a></li>
	<li><a href="#">การจองห้องปฏิบัติการคอมพิวเตอร์</a>
	<ul>
		<li><a href="#">ห้องปฏิบัติการคอมพิวเตอร์ 1</a></li>
		<li><a href="#">ห้องปฏิบัติการคอมพิวเตอร์ 2</a></li>
					
	</ul>
	</li>
	<li><a href="#">พิมพ์รายงาน</a>
	<ul>
		<li><a href="#">รายงานรายปี</a></li>
		<li><a href="#">รายงานรายเดือน</a></li>
		<li><a href="#">รายงานรายสัปดาห์</a></li>
					
	</ul>
	</li>
    <li><a href="#">ผู้จัดทำ</a></li>
	
</ul>
</div>
<div class="container content-inner">
  <div class="section row">
    <div class="col4"><img src="img/logoRk.png" width="131" height="134">
    <img src="img/mju_logo.png" width="131" height="134">
	</div>
    
    <div class="col8"><h2>การพัฒนาระบบสารสนเทศเพื่อการจัดการ<br>ห้องปฏิบัติการคอมพิวเตอร์ของโรงเรียนร้องกวางอนุสรณ์</h2>
   
    <br>
	</div>
	</div>
  <div class="section row">
    <div class="col12">
	<div class="flexslider">
	    <ul class="slides">
	   <li><img src="img/DSCF0271.JPG" /></li>
     <li><img src="img/DSCF0267.JPG" /></li>
	<li><img src="img/DSCF0300.JPG" /></li>
	    </ul>
	  </div> 
	  <br>
	</div>
  </div>
	<div style="width:80%;margin:auto;">
    	<div id="hc_container" style="min-width:310px; height:400px; margin:0 auto"></div>
        </div>
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>    
<script src="http://code.highcharts.com/highcharts.js"></script>    
<script src="http://code.highcharts.com/modules/exporting.js"></script>    
<script src="chartoptions.js"></script>    
<script type="text/javascript">

$(function(){
	$.getJSON("series_db.php",{

	},function(data) {
		var dataSeries=data;
		$('#hc_container').highcharts(
			$.extend(chartOptions,{
				series:dataSeries
			})
			);
	});
});
</script>

</body>
<footer>
<div class="section row">
    <div class="col-half">© Copyright Rap and Wichuda </div>
    <div class="col-half"><a href="#" class="link">โรงเรียนร้องกวางอนุสรณ์ จังหวัดแพร่ </a>|</div>
  </div>

</footer>
</body>
</html>