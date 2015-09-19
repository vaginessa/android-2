<!-- banner -->
	 <!-- Slider-starts-Here -->
	 <script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});

	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">

<?php
$gets = mysql_query("select * from slides limit 7") or die("Can`t Get Data Sorry");
while($lo= mysql_fetch_object($gets)){

  echo'
  <div class="slid " style="
  background: url('.$lo->slideimag.') no-repeat 0px 0px;
  background-size: cover;
  min-height: 680px;
  ">
						  <div class="caption">
								<h3>'.$lo->slidetitle.'</h3>
								<p>'.$lo->slidlinkdesc.'</p>
						  </div>
					</div>
  ';
}
?>


			  </ul>
		 </div>
	 </div>
