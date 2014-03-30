<?php
session_start();
include './config.php';

require 'header.php';?>

<div class="container ofwhite">
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
                                    <li><a href="#" id="add_user">Add user</a></li>
                                    <li><a href="#" id="delete_user">Delete user</a></li>
                                    <li><a href="#" id="chech_user">Check user informations</a></li>
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
                                    <li><a href="#" id="add_district">Add District</a></li>
                                    <li><a href="#" id="add_subdistrict">Add Subdistrict</a></li>
                                    <li><a href="#" id="add_union">Add Union</a></li>
                                    <li><a href="#" id="add_block">Add Block</a></li>
                                    <li><a href="#" id="delete_district">Delete District</a></li>
                                    <li><a href="#" id="delete_subdistrict">Delete Subdistrict</a></li>
                                    <li><a href="#" id="delete_union">Delete Union</a></li>
                                    <li><a href="#" id="delete_block">Delete Block</a></li>
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
