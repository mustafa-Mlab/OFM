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
        if ($lavel < 4) {
            $dist_id = $row['district'];
        }
    }
    if ($lavel < 4) {
        $query = mysql_query("SELECT name FROM district WHERE id='" . $dist_id . "'");
        $row = mysql_fetch_array($query);
        $district = $row['name'];
    }
} else {
    $_SESSION['error_msg'] = "You Need to login first to use this application ";
    header("location:index.php");
}
?>
<div class="row">
    <form class="form-horizontal" role="form" action="process/sheet6_view_loc_receive.php" method="post">
        <!--1st collum--> 
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php require '../forms/ecoyear_selector_view.php'; ?>
                    <?php
                    if ($lavel < 4)
                        require '../forms/district_view_selector.php';
                    else
                        require '../forms/district_selector.php';
                    ?>
                    <div class="form-group">
                        <label for="status" class="col-sm-4 control-label">  </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="status" id="status" >
                                <option selected="selected" value ="1">চাহিদা </option>
                                <option value ="2">অনুমোদিত </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 right-align">
                            <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>