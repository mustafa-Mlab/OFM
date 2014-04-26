<?php require 'header.php'; ?>

<div class="container ofwhite">
    <?php require './right_control.php'; ?>
    <div class="row">
        <div class="col-md-4">
            <a class="button" href="home.php">Home</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> View  </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-group-item">
                                <ul>
                                    <li><a href="#sheet1_view" id="sheet1_view">ব্লক পর্যায়ে কৃষক/কৃষাণীর মৌসুমভিত্তিক আবাদি জমির পরিমাণ নিরূপণ</a></li>
                                    <li><a href="#sheet2_view" id="sheet2_view">ব্লক পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>
                                    <li><a href="#sheet3_view" id="sheet3_view">ইউনিয়ন পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>
                                    <?php
                                    if ($_SESSION['slavel'] > 1) {
                                        Echo"<li><a href='#sheet4_view' id='sheet4_view'>উপজেলা পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>
                                    <li><a href='#sheet5_view' id='sheet5_view'>উপজেলা পর্যায়ে মাসওয়ারী সারের চাহিদা নিরূপণ</a></li>";
                                        if ($_SESSION['slavel'] > 2) {
                                            Echo"<li><a href='#sheet6_view' id='sheet6_view'>জেলা পর্যায়ে কৃষক/কৃষাণীর ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>
                                        <li><a href='#sheet7_view' id='sheet7_view'>জেলা পর্যায়ে মাসওয়ারী সারের চাহিদা নিরূপণ</a></li>";
                                            if ($_SESSION['slavel'] > 3) {
                                                Echo" <li><a href='#overview' id='overview'>জেলাভিত্তিক সারের চাহিদা</a></li>";
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                Insert
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-group-item">
                                <ul>
                                    <?php
                                    if ($_SESSION['slavel'] == 1) {
                                        Echo'<li><a href="#sheet1" id="sheet1">ব্লক পর্যায়ে কৃষক/কৃষাণীর মৌসুমভিত্তিক আবাদি জমির পরিমাণ নিরূপণ</a></li>
                                    <li><a href="#sheet2" id="sheet2">ব্লক পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>
                                    <li><a href="#sheet3" id="sheet3">ইউনিয়ন পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>';
                                    }
                                    if ($_SESSION['slavel'] == 2) {
                                        Echo"<li><a href='#sheet4' id='sheet4'>উপজেলা পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>  "
                                        . " <li><a href='#sheet5' id='sheet5'>উপজেলা পর্যায়ে মাসওয়ারী সারের চাহিদা নিরূপণ</a></li>";
                                    }
                                    if ($_SESSION['slavel'] == 3) {
                                        Echo"<li><a href='#sheet6' id='sheet6'>জেলা পর্যায়ে ফসলভিত্তিক সারের চাহিদা নিরূপণ</a></li>"
                                        . "<li><a href='#sheet7' id='sheet7'>জেলা পর্যায়ে মাসওয়ারী সারের চাহিদা নিরূপণ</a></li>";
                                    }
                                    if ($_SESSION['slavel'] == 4) {
                                        Echo"<li><a href='#dis_alloted' id='dis_alloted'>জেলাভিত্তিক সারের পরিমাণ অনুমোদন </a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Profile </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="list-group-item">
                                <ul>
                                    <li><a href="#proupdate" id="proupdate">প্রোফাইল আপডেট করুন</a></li>
                                    <li><a href="#change_pass" id="change_pass">পাসওয়ার্ড পরিবর্তন করুন</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="button" href="logout.php"> Logout </a>
            </div>

        </div>
        <div class="col-md-8" id="display">
            <div id="news"> <?php require './newsscroll.php'; ?>

            </div>
            <div class="user_view"></div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>