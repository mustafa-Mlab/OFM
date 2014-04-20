<div class="right-align">
    <h2>উপজেলা নিবন্ধন করুনঃ</h2>
</div>
<form class="form-horizontal" role="form" action="process/add_subdistrict_receive.php" method="post">
    <?php require './district_selector.php';?>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">উপজেলার নামঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="name" name="name" placeholder="উপজেলার নামঃ">
        </div>
    </div>
    <div class="form-group">
        <label for="aez" class="col-sm-4 control-label">এ ই জেড নং  </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="aez" name="aez" placeholder="এ ই জেড নং ">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="add_subdistrict" id="add_subdistrict">যোগ করুন</button>
        </div>
    </div>
</form>