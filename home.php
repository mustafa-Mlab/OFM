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
                                    <li><a href="#sheet1_view" id="sheet1_view">ছকপত্র ১</a></li>
                                    <li><a href="#sheet2_view" id="sheet2_view">ছকপত্র ২</a></li>
                                    <li><a href="#sheet3_view" id="sheet3_view">ছকপত্র ৩</a></li>
                                    <?php
                                    if ($lavel > 1) {
                                        Echo"<li><a href='#sheet4_view' id='sheet4_view'>ছকপত্র ৪</a></li>
                                    <li><a href='#sheet5_view' id='sheet5_view'>ছকপত্র ৫</a></li>";
                                        if ($lavel > 2) {
                                            Echo"<li><a href='#sheet6_view' id='sheet6_view'>ছকপত্র ৬</a></li>
                                        <li><a href='#sheet7_view' id='sheet7_view'>ছকপত্র ৭</a></li>";
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
                                    <?php
                                    if ($lavel == 1) {
                                        Echo'<li><a href="#sheet1" id="sheet1">ছকপত্র ১</a></li>
                                    <li><a href="#sheet2" id="sheet2">ছকপত্র ২</a></li>
                                    <li><a href="#sheet3" id="sheet3">ছকপত্র ৩</a></li>';
                                    }
                                    if ($lavel == 2) {
                                        Echo"<li><a href='#sheet4' id='sheet4'>ছকপত্র ৪</a></li>   <li><a href='#sheet5' id='sheet5'>ছকপত্র ৫</a></li>";
                                    }
                                    if ($lavel == 3) {
                                        Echo"<li><a href='#sheet6' id='sheet6'>ছকপত্র ৬</a></li><li><a href='#sheet7' id='sheet7'>ছকপত্র ৭</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="button" href="logout.php"> Logout </a>
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