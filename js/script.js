$(function() {
    $('#newsscroller').vTicker('init', {speed: 400,
        pause: 3000,
        showItems: 4,
        padding: 4});
});

$('#accordion').collapse({
    toggle: false,
    parent: false
});
$('#view').load("view.php");

$(function() {
    $('#newsscroller1').vTicker('init', {speed: 400,
        pause: 3000,
        showItems: 4,
        padding: 4});
});

//to load links form admin.php
$('#add_user').click(function() {
    $('#user_view').load('forms/reg_form.php');
});
$('#check_user').click(function() {
    $('#user_view').load('process/check_user.php');
});
$('#add_district').click(function() {
    $('#user_view').load('forms/add_district.php');
});
$('#add_subdistrict').click(function() {
    $('#user_view').load('forms/add_subdistrict.php');
});
$('#add_union').click(function() {
    $('#user_view').load('forms/add_union.php');
});
$('#add_block').click(function() {
    $('#user_view').load('forms/add_block.php');
});
$('#add_ecoyear').click(function() {
    $('#user_view').load('forms/add_ecoyear.php');
});
$('#add_notice').click(function() {
    $('#user_view').load('forms/add_notice.php');
});
$('#add_crop').click(function() {
    $('#user_view').load('forms/add_crop.php');
});

//to load sheets in =home.php View part
$('#sheet1_view').click(function() {
    $('.user_view').load('report/sheet1_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet2_view').click(function() {
    $('.user_view').load('report/sheet2_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet3_view').click(function() {
    $('.user_view').load('report/sheet3_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet4_view').click(function() {
    $('.user_view').load('report/sheet4_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet5_view').click(function() {
    $('.user_view').load('report/sheet5_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet6_view').click(function() {
    $('.user_view').load('report/sheet6_view_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet7_view').click(function() {
    $('.user_view').load('report/sheet7_view_loc_selector.php');
     $('#news').addClass('hidden');
});
//to load sheets in =home.php Insert part
$('#sheet1').click(function() {
    $('.user_view').load('forms/sheet1_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet2').click(function() {
    $('.user_view').load('forms/sheet2_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet3').click(function() {
    $('.user_view').load('forms/sheet3_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet4').click(function() {
    $('.user_view').load('forms/sheet4_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet5').click(function() {
    $('.user_view').load('forms/sheet5_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet6').click(function() {
    $('.user_view').load('forms/sheet6_loc_selector.php');
     $('#news').addClass('hidden');
});
$('#sheet7').click(function() {
    $('.user_view').load('forms/sheet7_loc_selector.php');
     $('#news').addClass('hidden');
});


window.onload = function() {
    if(window.location.hash) {
        var path = window.location.hash;
        $(path).trigger('click');
    }
};
