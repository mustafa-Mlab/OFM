<div class="right-align">
    <h2>নিবন্ধন </h2>
</div>
<form class="form-horizontal" role="form" action="reg_receive.php" method="post">
    <div class="form-group">
        <label for="lavel" class="col-sm-2 control-label">পর্যায়ঃ  </label>
        <div class="col-sm-6">
            <select class="form-control" name="lavel" id="lavel" onchange="change_location()" >
                <option selected="selected" value="0">বাছাই করুন </option>
                <option value="1">ইউনিয়ন </option>
                <option value="2">উপজেলা </option>
                <option value="3">জেলা</option>
                <option value="4">ডিসি </option>
                <option value="5">মন্ত্রণালয় </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="full_name" class="col-sm-2 control-label">পূর্ণ নাম </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="full_name">
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">ঠিকানাঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="address" name="address" placeholder="address">
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">ইউজার আইডিঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="username" name="username" placeholder="username">
        </div>
    </div>
    <div class="form-group">
        <label for="pass" class="col-sm-2 control-label">পাসওয়ার্ডঃ </label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="Pass" name="pass" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="con_pass" class="col-sm-2 control-label">নিশ্চিত করুনঃ </label>
        <div class="col-sm-6">
            <input type="password" class="form-control" id="con_Pass" name="con_pass" placeholder="Confirm Password">
        </div>
    </div>
    
    <div class="form-group">
        <label for="mobile_no" class="col-sm-2 control-label">মোবাইল নাম্বারঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile number">
        </div>
    </div>
    <div class="form-group">
        <label for="sec_ques" class="col-sm-2 control-label">গোপন প্রস্নঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="sec_ques" name="sec_ques" placeholder="Sectete Question">
        </div>
    </div>
    <div class="form-group">
        <label for="ans" class="col-sm-2 control-label">উত্তরঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="ans" name="ans" placeholder="Answer">
        </div>
    </div>
    
    <div id="location"> </div>
    
<!--    <div class="form-group">
        <label for="district" class="col-sm-2 control-label">জেলাঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="district" name="district" placeholder="District">
        </div>
    </div>
    <div class="form-group">
        <label for="subdistrict" class="col-sm-2 control-label">উপজেলাঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="subdistrict" name="subdistrict" placeholder="Subdistrict">
        </div>
    </div>
    <div class="form-group">
        <label for="union" class="col-sm-2 control-label">ইউনিয়নঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="union" name="union" placeholder="Union">
        </div>
    </div>
    <div class="form-group">
        <label for="block" class="col-sm-2 control-label">ব্লকঃ </label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="block" name="block" placeholder="Block">
        </div>
    </div>-->
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="submit" id="submit">নিবন্ধন </button>
        </div>
    </div>
</form>