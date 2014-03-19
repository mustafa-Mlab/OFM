<?php
session_start();
include './config.php';

require 'header.php';?>

<div class="container ofwhite">
    <div class="row">
        <div class="col-md-4">
            <ul>
                <li><a href="#" id="add_user">Add user</a></li>
                <li><a href="#" id="delete_user">Delete user</a></li>
                <li><a href="#" id="chech_user">Check user informations</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="user_view" id='user_view'></div>
        </div>
    </div>
    
</div>

<?php
require './footer.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
