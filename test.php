
<?php
include './config.php';
require './header.php';
?>
<div class="ofwhite container">
    <div class="col-md-12">
        <?php
        $pass = 12345678;
        echo md5($pass);
        ?>
        <form action="test_1.php" method="post">
            <input type="text" id="name" name="name">
            <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
        </form>

        <?php
        $sql = mysql_query("SELECT * FROM fertilizer order by id");
        echo "<h3>";
        while ($row = mysql_fetch_array($sql)) {
            echo $row['id'] . "   " . $row['name'] . '</br>';
        }
        echo"</h3>;"
        ?>
    </div>
</div>
<?php require './footer.php'; ?>