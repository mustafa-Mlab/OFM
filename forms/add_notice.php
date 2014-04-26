<?php
include '../config.php';
session_start();
?>
<form class="form-horizontal" role="form" action="process/add_news_receive.php" method="post">
    <div class="form-group">
        <label for="news" class="col-sm-4 control-label">নোটিশ </label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="news" name="news" placeholder="নোটিশ">
        </div>
    </div>
    <div class="form-group">
        <label for="crop3" class="col-sm-4 control-label">উদ্দেশ্য  </label>
        <div class="col-sm-8">
            <select class="form-control" name="crop3" id="crop3" >
                <option selected="selected" >বাছাই করুন </option>
                <option value="1" >জরুরি </option>
                <option value="" >অত্তান্ত জরুরি </option>
                <option value="" >সবাই </option>
                <option value="" >মন্ত্রণালয়  </option>
                <option value="" >সকল জেলা</option>
                <option value="" >সকল উপজেলা</option>
                <option value="" >সকল ইউনিয়ন</option>
                <option value="" >সকল ব্লক</option>
                <option value="" > ব্লক</option>
                <option value="" >ইউনিয়ন</option>
                <option value="" >উপজেলা</option>
                <option value="" >জেলা</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="add_news" id="add_news">যুক্ত করুন</button>
        </div>
    </div>
</form>