<?php require 'header.php'; ?>
<div class="container ofwhite">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                View
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <h2>Here will be sheets link</h2><?php ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Insert
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <h2>Here will be sheets links</h2> <?php?>
                        </div>
                    </div>
                </div>
                <a href="logout.php"> Logout </a>
            </div>

        </div>
        <div class="col-md-6">
            <?php require './newsscroll.php'; ?>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>