<style type="text/css">
  #map_canvas { 
	width:900px;
	height:600px;
	margin:auto;
	margin-top:20px;
}
</style>
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDQthw9eQ-clmLvd0hwbOWA2kA988kDxE">
</script>
<script type="text/javascript">
  function initialize() {
	var mapOptions = {
	  center: { lat: -34.397, lng: 150.644},
	  zoom: 8
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="row">
</div>
<div class="row">
	<p class="text-center">
	    <img src="<?=base_url()?>images/contact.jpg" width="55%" style="margin-bottom:20px" >
		<hr>
		<h2><span class="label label-default map-board">แผนที่คณะ ฯ </span></h2>
		<div id="map_canvas"></div>
		<div id="showDD" style="margin:auto;padding-top:5px;width:550px;">   
			</p>
			<br>
			<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript">
		var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
		var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
		function initialize() { // ฟังก์ชันแสดงแผนที่
			GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
			// กำหนดจุดเริ่มต้นของแผนที่
			var my_Latlng  = new GGM.LatLng(19.027219, 99.900268);
			var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
			// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
			var my_DivObj=$("#map_canvas")[0]; 
			// กำหนด Option ของแผนที่
			var myOptions = {
				zoom: 13, // กำหนดขนาดการ zoom
				center: my_Latlng , // กำหนดจุดกึ่งกลาง
				mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
			};
			map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
			
			var my_Marker = new GGM.Marker({ // สร้างตัว marker
				position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
				map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
				draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
				title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
			});
			
			// กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
			GGM.event.addListener(my_Marker, 'dragend', function() {
				var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
				map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker		
				$("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
				$("#lon_value").val(my_Point.lng()); // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
				$("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
			});		

			// กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
			GGM.event.addListener(map, 'zoom_changed', function() {
				$("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value 	
			});

		}
		$(function(){
			// โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
			// ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
			// v=3.2&sensor=false&language=th&callback=initialize
			//	v เวอร์ชัน่ 3.2
			//	sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
			//	language ภาษา th ,en เป็นต้น
			//	callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
			$("<script/>", {
			  "type": "text/javascript",
			  src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
			}).appendTo("body");	
		});
		</script>  
	</div>
</div>
