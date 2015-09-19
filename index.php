<!DOCTYPE HTML>
<?php
  if(file_exists("Function/const_header.php")){require_once"Function/const_header.php";}else{die("Header page not Found :(");}

?>

<!-- slide Show -->
<?php
    if(file_exists("Function/slider.php")){require_once"Function/slider.php";}else{die("Slide Show page not Found :(");}
?>
<!-- //slide Show -->

<!-- Top Games -->
<?php
    if(file_exists("Function/topapli.php")){require_once"Function/topapli.php";}else{die("Top Application  page not Found :(");}
?>
<!-- //Top Games -->

<!-- latest -->
<?php
    if(file_exists("Function/lsetap.php")){require_once"Function/lsetap.php";}else{die("Latest Application  page not Found :(");}
?>
<!-- //latest -->

<!-- poster -->
<?php
    if(file_exists("Function/bost.php")){require_once"Function/bost.php";}else{die("Poster  page not Found :(");}
?>
<!-- //poster -->

<!-- x-box -->

 <?php
    if(file_exists("Function/boox.php")){require_once"Function/boox.php";}else{die("box page not Found :(");}
?>
<!-- //x-box -->

<?php
   if(file_exists("Function/const_footer.php")){require_once"Function/const_footer.php";}else{die("Footer page not Found :(");}
?>
