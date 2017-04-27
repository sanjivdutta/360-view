
<!DOCTYPE html>
<html>
<head>
    <title>Image Sphere</title>
    <meta charset ="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


    <link rel="shortcut icon" href="images/favicon.ico"/>
    
    <!-- <script src="https://aframe.io/releases/0.3.0/aframe.min.js"></script> -->
    <script src="js/aframe.min.js"></script>
    
    <script src="js/isvr_photosphere_menu.js"></script>
    <script src="js/isvr_photosphere_menu_thumb.js"></script>
    <script src="js/isvr_photosphere_menu_navigation.js"></script>
    <!-- <script src="js/customGeometry.js"></script> -->
    <script src="js/raycastCheck.js"></script>
</head>
<body>
    <a-scene>
        <a-assets>
            <img src="images/NewWalkthrough/demo1_full.jpg" id="img-photosphere-1">

            <img src="images/NewWalkthrough/GROUND FLOOR CONSOLE POV 01.jpg" id="img-photosphere-2">

            <img src="images/NewWalkthrough/equirectangular.jpg" id="img-photosphere-3">

            <img src="images/NewWalkthrough/GROUND FLOOR DINING POV 02.jpg" id="img-photosphere-4">

            <img src="images/NewWalkthrough/GROUND FLOOR POOL DECK 02.jpg" id="img-photosphere-5">

            <img src="images/NewWalkthrough/GROUND FLOOR KITCHEN.jpg" id="img-photosphere-6">
			
			<img src="images/NewWalkthrough/GROUND FLOOR DINING POV 01.jpg" id="img-photosphere-7">
			
			<img src="images/NewWalkthrough/GROUND FLOOR PARENTS BED ROOM.jpg" id="img-photosphere-8">
        </a-assets>

        <a-entity position="0 1.8 5">
            <a-entity
                id="camera" 
                camera="far: 100000; fov: 88; near: 1;"
                look-controls="enabled: true">
                <a-entity
                    cursor="fuse: true; maxDistance: 200; timeout: 2000;"
                    id="cursor"
                    position="0 0 -3.4"
                    geometry="primitive: ring; radiusOuter: 0.10; radiusInner: 0.05;"
                    material="color: #036E0E; shader: flat;"
                    visible="false">
                </a-entity>
            </a-entity>
        </a-entity>

        <!-- Outside View -->
        <a-entity data-current-page="1" isvr-photosphere-menu id="photosphere-menu" visible="false" name="OutsideView">
		 <!-- <a-image src="#Arrow" position="-2.5 -2 -5" rotation="-90 0 0" height = "5" width = "5"></a-image> -->
    		<a-cylinder color = "#FFCC00" height = ".25" data-image-id="3" radius = "0.9" position="-10 -7 -6.9" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.3">
    		      <a-animation attribute="radius" begin="mouseenter" from="1.5" to="2" dur="1000"></a-animation>
                  <a-animation attribute="radius" begin="mouseleave" from="2" to="1.5" dur="1000"></a-animation>
                  <a-animation attribute="opacity" begin="mouseenter" from="0.3" to="0.8" dur="1000"></a-animation>
                  <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.3" dur="1000"></a-animation>
    		</a-cylinder>
           <!--  <a-ring color = "#1592E6" data-image-id="2" radius-inner="0" radius-outer="1.5" position="-2.5 -2 -5" rotation="-90 45 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
                <a-animation attribute="radius-inner" begin="mouseenter" from=".1" to=".3" dur="1000"></a-animation>
                <a-animation attribute="radius-inner" begin="mouseleave" from=".3" to=".1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseenter" from="1.5" to="2" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseleave" from="2" to="1.5" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
            </a-ring> -->
        </a-entity>

         <!-- ENTRANCE ROOM -->
        <a-entity data-current-page="2" isvr-photosphere-menu id="photosphere-menu2" visible="false" name="Entrance">
		      <!--  <a-image src="#Arrow" position="1.5 -2 11.5" rotation="-90 0 0" height = "5" width = "5"></a-image> -->
    		<a-cylinder color = "#1592E6" height = ".25" data-image-id="1" radius = ".8" position="1.5 -2 11.5" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
    		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                    <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
    		</a-cylinder>
    		
    		<a-cylinder color = "#1592E6" height = ".25" data-image-id="3" radius = ".8" position="10 -3 7.5" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
    		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                    <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
    		</a-cylinder>
    		
    		<a-cylinder color = "#1592E6" height = ".25" data-image-id="4" radius = ".8" position="-5 -2 15" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
    		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                    <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
    		</a-cylinder>
    		
    		<a-cylinder color = "#1592E6" height = ".25" data-image-id="5" radius = ".8" position="-5 -3 -2" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
    		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                    <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                    <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
    		</a-cylinder>
			
        </a-entity>

        <!-- Living Room -->
        <a-entity data-current-page="3" isvr-photosphere-menu id="photosphere-menu3" visible="false" name="LivingRoom">
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="2" radius = ".8" position="-5 -2 11" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
        </a-entity>

        <!-- Dining Room -->
        <a-entity data-current-page="4" isvr-photosphere-menu id="photosphere-menu4" visible="false" name="DiningRoom">
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="6" radius = ".8" position="2 -3 15" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="2" radius = ".8" position="7.5 -3 4" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="7" radius = ".8" position="-10 -3 7.5" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		<!-- First Floor -->
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="11" radius = ".8" position="-10 0 15" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>			
        </a-entity>

        <!-- Pool Area -->
        <a-entity data-current-page="5" isvr-photosphere-menu id="photosphere-menu5" visible="false" name="Pool">
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="2" radius = ".8" position="5 -3 20" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="9" radius = ".8" position="1 -3 -10" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
            <!-- <a-ring material="color:white" data-image-id="6" radius-inner=".1" radius-outer=".8" position="2 -3 15" rotation="-90 45 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
                <a-animation attribute="radius-inner" begin="mouseenter" from=".1" to=".3" dur="1000"></a-animation>
                <a-animation attribute="radius-inner" begin="mouseleave" from=".3" to=".1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
            </a-ring>

            <a-ring material="color:white" data-image-id="3" radius-inner=".1" radius-outer=".8" position="-6 -3 2" rotation="-90 45 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
                <a-animation attribute="radius-inner" begin="mouseenter" from=".1" to=".3" dur="1000"></a-animation>
                <a-animation attribute="radius-inner" begin="mouseleave" from=".3" to=".1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
            </a-ring> -->
        </a-entity>

        <!-- Kitchen -->
        <a-entity data-current-page="6" isvr-photosphere-menu id="photosphere-menu6" visible="false" name="Kitchen">
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="4" radius = ".8" position="1.5 -3 17.5" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
            <!-- <a-ring material="color:white" data-image-id="5" radius-inner=".1" radius-outer=".8" position="-7 -3 12" rotation="-90 45 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
                <a-animation attribute="radius-inner" begin="mouseenter" from=".1" to=".3" dur="1000"></a-animation>
                <a-animation attribute="radius-inner" begin="mouseleave" from=".3" to=".1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
                <a-animation attribute="radius-outer" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
                <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
            </a-ring> -->
        </a-entity>
        
		  <!-- Dining Room 2 -->
        <a-entity data-current-page="7" isvr-photosphere-menu id="photosphere-menu7" visible="false" name="OtherDining">
		
		<!-- Powder Room -->
		<!-- <a-cylinder color = "#1592E6" height = ".25" data-image-id="11" radius = ".8" position="-3.5 -3 13" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder> -->
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="4" radius = ".8" position="2 -3 -2" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="8" radius = ".8" position="-10 -3 10.5" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		 </a-entity>
		 
		<!-- Ground Floor Master Bed Room -->
        <a-entity data-current-page="8" isvr-photosphere-menu id="photosphere-menu8" visible="false" name="MasterBedroom">
		
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="7" radius = ".8" position="5.5 -3 9" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		<!-- Ground Floor Master Bed Room Bathroom -->
		<a-cylinder color = "#1592E6" height = ".25" data-image-id="10" radius = ".8" position="-1.5 -3 12" rotation="0 0 0"  isvr-photosphere-menu-thumb class="img-photosphere-thumb" opacity="0.5">
		  <a-animation attribute="radius" begin="mouseenter" from=".8" to="1" dur="1000"></a-animation>
          <a-animation attribute="radius" begin="mouseleave" from="1" to=".8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseenter" from="0.5" to="0.8" dur="1000"></a-animation>
          <a-animation attribute="opacity" begin="mouseleave" from="0.8" to="0.5" dur="1000"></a-animation>
		</a-cylinder>
		
		 </a-entity>
		 
		<a-entity 
            geometry="primitive:sphere;radius:5000;segmentsWidth:64;segmentsHeight:64"
            material="shader:flat;color:#ffffff;fog:false; src:#img-photosphere-1 "
            scale="-1 1 1"
            rotation="0 -60 0" id="photosphere">
        </a-entity>
    </a-scene>
    <!-- <script src="build/vrview-analytics.js"></script> -->
    <script src="js/fullscreen.js"></script>
</body>
</html>

