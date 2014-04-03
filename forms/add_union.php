<div class="right-align">
    <h2>ইউনিয়ন  নিবন্ধন করুনঃ</h2>
</div>
<form class="form-horizontal" role="form" action="process/add_union_receive.php" method="post">
    <?php require './district_selector.php';?>
    <?php require './subdistrict_selector.php';?>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">ইউনিয়নের নামঃ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="ইউনিয়নের নাম">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="add_union" id="add_union">যোগ করুন</button>
        </div>
    </div>
</form>
