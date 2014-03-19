<div class="right-align">
    <h2>লগ ইন</h2>
</div>
<form class="form-horizontal" role="form" action="login_receive.php" method="post">
    <div class="form-group">
        <label for="lavel" class="col-sm-2 control-label">পর্যায়ঃ  </label>
        <div class="col-sm-6">
            <select class="form-control" name="lavel" id="lavel">
                <option selected="selected" value="0">বাছাই করুন </option>
                <option value="1">ইউনিয়ন </option>
                <option value="2">উপজেলা </option>
                <option value="3">জেলা</option>
                <option value="4">ডিসি </option>
                <option value="5">মন্ত্রণালয় </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">ইউজার আইডিঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">পাসওয়ার্ডঃ </label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="Pass" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <div class="checkbox">
                <label>
                    <input type="checkbox" /> মনে রাখুন
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="login" id="login">লগ ইন করুন</button>
        </div>
    </div>
</form>