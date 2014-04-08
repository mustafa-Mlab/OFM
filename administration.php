<?php require 'header.php'; ?>
<?php
if (isset($_SESSION['admin'])) {
    $id =  $_SESSION['admin'];
    echo $id;
} else
    header("location:admin.php");
?>


<div class="container ofwhite">
    <div class="row">
        <div class="col-md-4">
            <a class="button" href="administration.php">Admin Home</a>
            <a class="button" href="home.php">Home</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                User
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="list-group">
                                <ul class="links">
                                    <li><a href="#add_user" id="add_user">Add user</a></li>
                                    <li><a href="#check_user" id="check_user">Check user informations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Area
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-group">
                                <ul class="links">
                                    <li><a href="#add_district" id="add_district">Add District</a></li>
                                    <li><a href="#add_subdistrict" id="add_subdistrict">Add Subdistrict</a></li>
                                    <li><a href="#add_union" id="add_union">Add Union</a></li>
                                    <li><a href="#add_block" id="add_block">Add Block</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                Others
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-group">
                                <ul class="links">
                                    <li><a href="#add_ecoyear" id="add_ecoyear">Add Economical year</a></li>
                                    <li><a href="#add_notice" id="add_notice">Add Notice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="logout.php"> Logout </a>
            </div>

        </div>
        <div class="col-md-8">
            <div class="user_view" id='user_view'></div>
        </div>
    </div>

</div>
<?php
require './footer.php';
?>
