<?php require './header.php'; ?>
<div class="ofwhite container">
     <?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a class='button' href='$url'>Back</a>"; 
?>
    <?php require './forms/sheet1.php'; ?>
    <?php ?>
</div>
<?php require './footer.php'; ?>

