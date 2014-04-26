<?php
session_start();
include '../config.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    date_default_timezone_set('Asia/Dhaka');
    $date = date('Y-m-d');
    $query = mysql_query("SELECT * FROM user WHERE id= $id");
    while ($row = mysql_fetch_array($query)) {
        $lavel = $row['right_lavel'];
    }
} else {
    $_SESSION['error_msg'] = "You Need to login first to use this application ";
    header("location:index.php");
}
?>
<div class="row">
    <form class="form-horizontal" role="form" action="process/overview_loc_receive.php" method="post">
        <!--1st collum--> 
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php require '../forms/ecoyear_selector.php'; ?>

                    <div class="form-group">
                        <div class="col-md-12 right-align">
                            <button type="submit" class="btn btn-default button" name="submit" id="submit">Submit </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>