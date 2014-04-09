<?php require './header.php'; ?>
<div class="ofwhite container">
    <div class="row">
        <div class="col-md-4">
            <a class="button" href="home.php">Home</a>
            <a class="button" href="home.php#sheet1">Back</a>
        </div>
    </div>
    <?php require './right_control.php'; ?>
    <?php
    if (isset($_SESSION['error_msg'])) {
        echo $_SESSION['error_msg'];
        unset($_SESSION['error_msg']);
    }
    ?>
    <?php require './report/sheet1_view.php'; ?>

    <?php ?>
    <?php ?>
    <?php ?>
    <?php ?>
    <?php ?>
</div>
<?php require './footer.php'; ?>