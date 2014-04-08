<?php require 'header.php'; ?>

<div class="container ofwhite">
    <?php require './right_control.php'; ?>
    <div class="row">
        <div class="col-md-4">
             <a class="button" href="home.php">Home</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
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
                            <div class="list-group-item">
                                <ul>
                                    <li><a href="#sheet1_view" id="sheet1_view">Sheet1</a></li>
                                    <li><a href="#sheet2_view" id="sheet2_view">Sheet2</a></li>
                                    <li><a href="#sheet3_view" id="sheet3_view">Sheet3</a></li>
                                    <?php
                                    if ($lavel > 1) {
                                        Echo"<li><a href='#sheet4_view' id='sheet4_view'>Sheet4</a></li>
                                    <li><a href='#sheet5_view' id='sheet5_view'>Sheet5</a></li>";
                                        if ($lavel > 2) {
                                            Echo"<li><a href='#sheet6_view' id='sheet6_view'>Sheet6</a></li>
                                        <li><a href='#sheet7_view' id='sheet7_view'>Sheet7</a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
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
                            <div class="list-group-item">
                                <ul>
                                    <li><a href="#sheet1" id="sheet1">Sheet1</a></li>
                                    <li><a href="#sheet2" id="sheet2">Sheet2</a></li>
                                    <li><a href="#sheet3" id="sheet3">Sheet3</a></li>
                                    <?php
                                    if ($lavel > 1) {
                                        Echo"<li><a href='#sheet4' id='sheet4'>Sheet4</a></li>   <li><a href='#sheet5' id='sheet5'>Sheet5</a></li>";
                                        if ($lavel > 2) {
                                            Echo"<li><a href='#sheet6' id='sheet6'>Sheet6</a></li><li><a href='#sheet7' id='sheet7'>Sheet7</a></li>";
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="logout.php"> Logout </a>
            </div>

        </div>
        <div class="col-md-10" id="display">
            <div id="news"> <?php require './newsscroll.php'; ?>

            </div>
            <div class="user_view"></div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>