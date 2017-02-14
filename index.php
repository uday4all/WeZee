<?php

/*main framework magic ,some files were hidden from git repo*/
include 'login_valid_includer.php'; 
include 'common_header.php';
?><?php
if( isset($_COOKIE['user_use']) && isset($_COOKIE['password_use']) )
{
include 'index_logged.php';
  }
  else{
include 'index_nonlogged.php';
  }
  ?>

?>
<?php
include 'common_footer.php';
?>
</div>
