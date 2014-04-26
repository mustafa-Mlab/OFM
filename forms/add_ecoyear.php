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
    <table class="table table-responsive table-hover">
        <tr>
            <th>পর্যায়</th>
            <th>তথ্য প্রদান শুরু করার তারিখ</th>
            <th>তথ্য প্রদান করার শেষ তারিখ</th>
        </tr>
        <tr>
            <td class="col-md-2">ব্লক</td>
            <td class="active"><input class="form-control" type="text" required id="uria" name="uria" placeholder="yyyy-mm-dd"/></td>
            <td class="success"><input class="form-control" type="text" required id="all_uria" name="all_uria" placeholder="yyyy-mm-dd" /></td>
        </tr>
        <tr>
            <td>ইউনিয়ন</td>
            <td class="active"><input class="form-control" type="text" required id="tsp" name="tsp" placeholder="yyyy-mm-dd" /></td>
            <td class="success"><input class="form-control" type="text" required id="all_tsp" name="all_tsp" placeholder="yyyy-mm-dd" /></td>
        </tr>
        <tr>
            <td>উপজেলা</td>
            <<td class="active"><input class="form-control" type="text" required id="dmp" name="dmp" placeholder="yyyy-mm-dd" /></td>
            <td class="success"><input class="form-control" type="text" required id="all_dmp" name="all_dmp" placeholder="yyyy-mm-dd"/></td>
        </tr>
        <tr>
            <td>জেলা</td>
            <td class="active"><input class="form-control" type="text" required id="mop" name="mop" placeholder="yyyy-mm-dd" /></td>
            <td class="success"><input class="form-control" type="text" required id="all_mop" name="all_mop" placeholder="yyyy-mm-dd"/></td>
        </tr>
    </table>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="add_year" id="add_year">যুক্ত করুন</button>
        </div>
    </div>
</form>