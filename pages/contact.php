<?php
include "../application/bootstrap.php";
if (!hook("authenticate")){include "../include/authenticate.php";}


include "../include/header.php";
?>

<div class="BasicsBox"> 
  <h2>&nbsp;</h2>
  <h1><?php echo $lang["contactus"]?></h1>
  <p><?php echo text("contact")?></p>
</div>

<?php
include "../include/footer.php";
?>