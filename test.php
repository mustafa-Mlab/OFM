
<?php
include './config.php';
require './header.php';
?>
<div class="ofwhite container">
    <div class="col-md-12">
        <form action="test_1.php" method="post">
            <input type="text" id="name" name="name">
            <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
        </form>
    </div>
</div>
<div class="offwhite ">
    <div class="container">
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO `ofm`.`sheet6` ( `name`) "
            . "                       VALUES ( '$name' )";
    if (!mysql_query($sql, $Link)) {
        die('Error: ' . mysql_error());
    }
    echo "1 record added \n";
}
?>
<!--SELECT * FROM `sheet6` group by district order by district-->   
</div>
</div>
<?php require './footer.php'; ?>