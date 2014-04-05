<div class="row">
    <form class="form-horizontal" role="form" action="process/sheet1_loc_receive.php" method="post">
        <!--1st collum--> 
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php require './district_selector.php'; ?>
                    <?php require './subdistrict_selector.php'; ?>
                    <?php require './union_selector.php'; ?>
                    <?php require './block_selector.php'; ?>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-default" name="submit" id="submit">Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>