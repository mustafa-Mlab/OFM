<div class="right-align">
    <h2>ব্লক  নিবন্ধন করুনঃ</h2>
</div>
<form class="form-horizontal" role="form" action="process/add_block_receive.php" method="post">
    <?php require './district_selector.php';?>
    <?php require './subdistrict_selector.php';?>
    <?php require './union_selector.php';  ?>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">ব্লকের নামঃ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="ব্লকের নাম">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12 right-align ">
            <button type="submit" class="btn btn-defaul" name="add_block" id="add_block">যোগ করুন</button>
        </div>
    </div>
</form>