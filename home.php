<div class="container">
    <?php 
        if(isset($_SESSION['id'])){
            header("location:logout.php");
        }
    ?>
    <div class="row ofwhite">
        <div class="col-md-6"><?php require 'newsscroll.php'; ?></div>
        <div class="col-md-6"> <?php require './forms/login-form.php'; ?></div>
    </div>
</div>