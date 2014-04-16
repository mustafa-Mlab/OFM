<link rel="stylesheet" type="text/css" href="/code_examples/tutorial.css">
<script type="text/javascript" src="/code_examples/passtest.js"></script>
<div class="tutorialWrapper">
    <form>
        <div class="fieldWrapper">
            <label for="pass1">Password:</label>
            <input name="pass1" id="pass1" type="password">
        </div>
        <div class="fieldWrapper">
            <label for="pass2">Confirm Password:</label>
            <input name="pass2" id="pass2" onchange="checkPass(); return false;" type="password">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
    </form>
</div>
<script type="text/javascript">
function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  }  
</script>
\