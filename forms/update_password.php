<form class="form-horizontal" role="form" action="process/change_pass_receive.php" method="post">
    <div class="form-group">
        <label for="pass1" class="col-sm-4 control-label">পাসওয়ার্ডঃ </label>
        <div class="col-sm-8">
            <input type="password" required class="form-control" id="pass1" name="pass1" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="pass2" class="col-sm-4 control-label">নিশ্চিত করুনঃ </label>
        <div class="col-sm-8">
            <input type="password" required class="form-control" id="pass2" name="pass2" onkeyup="checkPass();
                    return false;" placeholder="Confirm Password">
            <span id="confirmMessage" class="confirmMessage"></span>
        </div>
    </div>
    <div class="form-group hidden">
        <input type="text" readonly class="form-control" id="type" name="type" value=" 0">
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="change_pass" id="change_pass">পরিবর্তন করুন</button>
        </div>
    </div>
</form>

<script>
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
        if (pass1.value === pass2.value) {
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!";
            var type = document.getElementById("type");
            type.value = 1;
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!";
            var type = document.getElementById("type");
            type.value = 0;
        }
    }
</script>