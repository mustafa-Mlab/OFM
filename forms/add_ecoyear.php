<?php 
    include '../config.php';
    session_start();
?>
<form class="form-horizontal" role="form" action="process/add_ecoyear_receive.php" method="post">
    <div class="form-group">
        <label for="year" class="col-sm-4 control-label">অর্থনৈতিক বছর </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="year" name="year" placeholder="year-year">
        </div>
    </div>
    <div class="form-group">
        <label for="start" class="col-sm-4 control-label">তথ্য প্রদান শুরু </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="start" name="start" placeholder="year-monnth-day">
        </div>
    </div>
    <div class="form-group">
        <label for="end" class="col-sm-4 control-label">তথ্য প্রদান শেষ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="end" name="end" placeholder="year-monnth-day">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="add_year" id="add_year">যুক্ত করুন</button>
        </div>
    </div>
</form>