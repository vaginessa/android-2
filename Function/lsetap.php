<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Application</h3>
			 <span></span>
		 </div>
		 <div class="latest-top"> 	<div class="col-md-5 trailer-text">
            <?php
    $top = mysql_query("select * from apkdata order by apkcountdownl desc limit 3") or die ("top ten Faild");
    while($top100 = mysql_fetch_object($top))
    {
      echo'
       <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="'.$top100->aplimage.'" alt="'.$top100->aplname.'"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">'.$top100->aplname.'</a>
							 <p>'.$top100->aplname.'&nbsp;'.$top100->aplversion.'</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
      ';
    }
   ?>



				</div>
				<div class="col-md-7 trailer">
                 <h3 style="color:blue;  padding-bottom: 10px;">Best Game of Month </h3>
				 <iframe src="https://www.youtube.com/embed/sF_LkhjaLAM" frameborder="0" allowfullscreen></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>