<!DOCTYPE HTML>
<?php
  if(file_exists("function/const_header.php")){require_once"function/const_header.php";}else{die("Header page not Found :(");}

?>
<!-- banner -->

<div class="banner">
		<div class="bnr2">
	   </div>
</div>
<!-- //banner -->

<!-- content -->
<?php
   if(file_exists("function/reev.php")){require_once"function/reev.php";}else{die("Reviews page not Found :(");}
?>
<!-- //content -->

<?php
   if(file_exists("function/const_footer.php")){require_once"function/const_footer.php";}else{die("Footer page not Found :(");}
?>
