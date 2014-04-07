<?php 
    include '../config.php';
    session_start();
?>
<form class="form-horizontal" role="form" action="process/add_news_receive.php" method="post">
    <div class="form-group">
        <label for="news" class="col-sm-4 control-label">নোটিশ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="news" name="news" placeholder="নোটিশ">
        </div>
    </div>
    <div class="form-group">
        <label for="status" class="col-sm-4 control-label">Status </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="status" name="status" placeholder="status">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="add_news" id="add_news">যুক্ত করুন</button>
        </div>
    </div>
</form>