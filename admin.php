<?php
include './config.php';
?>
<?php require './header.php'; ?>
<?php
if (isset($_SESSION['admin']))
    header("location:administration.php");
?>
<div class="container ofwhite">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <?php
            if (isset($_SESSION['error_msg'])) {
                Echo"<h4>" . $_SESSION['error_msg'] . "</h4>";
                $_SESSION['error_msg'] = '';
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            ﻿<div class="center-align">
                <h2>লগ ইন করুনঃ</h2>
            </div>
            <form class="form-horizontal" role="form" action="process/admin_login_receive.php" method="post">
                <div class="form-group">
                    <label for="useername" class="col-sm-4 control-label">ইউজার আইডিঃ </label>
                    <div class="col-sm-8">
                        <input type="text" required class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="col-sm-4 control-label">পাসওয়ার্ডঃ </label>
                    <div class="col-sm-8">
                        <input type="password" required  class="form-control" id="pass" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group center-align">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-default" name="submit" id="submit">Sing in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require './footer.php'; ?>