<div class="review">
	 <div class="container">
		 <h2 >LAST APPLICATION</h2>

<?php   echo'';
  $get20tyapk = mysql_query("select aplname,aplmd5,aplimage,apldesco from apkdata order by apkcountdownl desc limit 20") or die ("We can't Get data we are sorry ..");
  $i=1;
  while($aplditelbl = mysql_fetch_object($get20tyapk))
  {
   if($i==1){echo'<div class="review-md1">';}
       echo'
    <div class="col-md-4 sed-md">
      <div class=" col-1"> <center><h4><a href="lol.php?id='.$aplditelbl->aplmd5.'" title="'.$aplditelbl->aplname.'">'.$aplditelbl->aplname.'</a></h4> </center>
        <a href="lol.php?id='.$aplditelbl->aplmd5.'"><img class="img-responsive" width="350" hieght="300" src="'.$aplditelbl->aplimage.'" alt="'.$aplditelbl->aplname.'"></a>

        <p>'.$aplditelbl->apldesco.'</p>
      </div>
    </div>
    ';$i++;
   if($i==4){echo' <div class="clearfix"> </div></div><br>';}
  } mysql_free_result($get20tyapk);
?>


<div class="clearfix"> </div>
		 </div>
	 </div>

<!-- Don`t Reomve This Div --></div>