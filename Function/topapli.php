<div class="content">
	 <div class="container">
		 <div class="top-games">
			 <h3>Top Games</h3>
			 <span></span>
		 </div>
		 <div class="top-game-grids">
			 <ul id="flexiselDemo1">
   <?php
    $top = mysql_query("select * from apkdata order by apkcountdownl desc limit 10") or die ("top ten Faild");
    while($top100 = mysql_fetch_object($top))
    {
      echo'
       <li>
					 <div class="game-grid">
						 <h4>Action Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="'.$top100->aplimage.'" class="img-responsive" alt="'.$top100->aplname.'"/>
					 </div>
				 </li>
      ';
    }
   ?>
              <!-- Remove After add Application
               <li>
					 <div class="game-grid">
						 <h4>Action Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="images/t1.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Racing Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="images/t3.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>3D Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="images/t4.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Arcade Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="images/t2.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>

                   -->     
			 </ul>

			 <script type="text/javascript">
			 $(window).load(function() {
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover:true,

				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint:480,
						visibleItems: 1
					},
					landscape: {
						changePoint:640,
						visibleItems: 2
					},
					tablet: {
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		 </div>
	 </div>
</div>