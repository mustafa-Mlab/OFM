<fieldset>
    <div>
        <div class="right-align"> <h2> <legend>লগ ইন </legend> </h2> </div>
        <div class="row error">
            <div class="col-md-12">
                <?php
                if (isset($_SESSION['error_msg'])) {
                    Echo"<h4 class='red'>";
                    echo $_SESSION['error_msg'];
                    Echo"</h4>";
                    $_SESSION['error_msg'] = '';
                }
                ?>
            </div>
        </div> 
        <form class="form-horizontal" role="form" action="process/login_receive.php" method="post">

            <div class="form-group">
                <label for="lavel" class="col-sm-2 control-label">পর্যায়ঃ  </label>
                <div class="col-sm-6">
                    <select class="form-control" name="lavel" id="lavel">
                        <option selected="selected" value="0">বাছাই করুন </option>
                        <option value="1">ইউনিয়ন </option>
                        <option value="2">উপজেলা </option>
                        <option value="3">জেলা</option>
                        <option value="4">ডিজি অফিস </option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">ইউজার আইডিঃ </label>
                <div class="col-sm-6">
                    <input type="text" required class="form-control" id="username" name="username" placeholder="username">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">পাসওয়ার্ডঃ </label>
                <div class="col-sm-6">
                    <input type="password" required  class="form-control" id="Pass" name="pass" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-4">
                        <button type="submit" class="button btn btn-default" name="login" id="login">লগ ইন করুন</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</fieldset>
