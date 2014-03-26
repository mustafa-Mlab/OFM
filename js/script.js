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
$('#display').click(function() {
    $('#display').load('forms/sheet1.php');
});

//change location tab
function change_location()
{
    var district = "";
    var subdistrict="";
    var union="";
    var block="";
    var lavel =document.getElementById('lavel');
    if (lavel <5)
    {
       district = "<div class='form-group'<label for='district' class='col-sm-2 control-label'>জেলাঃ </label> <div class='col-sm-6'><input type='text' class='form-control' id='district' name='district' placeholder='District'></div></div>";
    }
    if (lavel < 4)
    {
        subdistrict ="<div class='form-group'> <label for='subdistrict' class='col-sm-2 control-label'>উপজেলাঃ </label><div class='col-sm-6'><input type='text' class='form-control' id='subdistrict' name='subdistrict' placeholder='Subdistrict'></div></div>";
    }
    if (lavel <3)
    {
       union = "<div class='form-group'><label for='union' class='col-sm-2 control-label'>ইউনিয়নঃ </label><div class='col-sm-6'><input type='text' class='form-control' id='union' name='union' placeholder='Union'></div></div>";
    }
     if (lavel <2)
    {
       block = "<div class='Sform-group'><label for='block' class='col-sm-2 control-label'>ব্লকঃ </label><div class='col-sm-6'><input type='text' class='form-control' id='block' name='block' placeholder='Block'></div></div>";
    }
    
    document.getElementById("location").innerHTML = district;

}