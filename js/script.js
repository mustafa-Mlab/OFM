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

$('#add_user').click(function() {
    $('#user_view').load('forms/reg_form.php');
});
//to load sheets in ofm.php
$('#sheet1').click(function() {
    $('.user_view').load('forms/sheet1.php');
     $('#news').addClass('hidden');
});
$('#sheet2').click(function() {
    $('.user_view').load('forms/sheet2.php');
     $('#news').addClass('hidden');
});
$('#sheet3').click(function() {
    $('.user_view').load('forms/sheet3.php');
     $('#news').addClass('hidden');
});
$('#sheet4').click(function() {
    $('.user_view').load('forms/sheet4.php');
     $('#news').addClass('hidden');
});
$('#sheet5').click(function() {
    $('.user_view').load('forms/sheet5.php');
     $('#news').addClass('hidden');
});
$('#sheet6').click(function() {
    $('.user_view').load('forms/sheet6.php');
     $('#news').addClass('hidden');
});
$('#sheet7').click(function() {
    $('.user_view').load('forms/sheet7.php');
     $('#news').addClass('hidden');
});