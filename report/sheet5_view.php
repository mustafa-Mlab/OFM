<?php
include './config.php';
$query = mysql_query("SELECT * FROM user WHERE id= $id");
while ($row = mysql_fetch_array($query)) {
    $lavel = $row['right_lavel'];
    $dist_id = $row['district'];
    $subdist_id = $row['subdistrict'];
    $union_id = $row['union_loc'];
}
$query = mysql_query("SELECT name FROM district WHERE id='" . $dist_id . "'");
if ($query) {
    $row = mysql_fetch_array($query);
    $district = $row['name'];
}

$query = mysql_query("SELECT name FROM subdistrict WHERE id='" . $subdist_id . "'");
if ($query) {
    $row = mysql_fetch_array($query);
    $subdistrict = $row['name'];
}

$query = mysql_query("SELECT name FROM `union` WHERE `id` ='" . $union_id . "'");
if ($query) {
    $row = mysql_fetch_array($query);
    $union = $row['name'];
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <?php echo"<h2>" . $_SESSION['ecoyear'] . " অর্থবছরের উপজেলা পর্যায়ে </h2>" ?>
            <h3>মাসভিত্তিক সারের চাহিদা নিরূপণ</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-3">
        <?php echo '<h3> উপজেলাঃ ' . $_SESSION['subdistrict'] . "</h3>"; ?> 
    </div>
    <div class="col-md-3">
        <?php echo '<h3> জেলাঃ' . $_SESSION['district'] . "</h3>"; ?>
    </div>
    <div class="col-md-3">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive table-hover">
            <tr class="success">
                <th>সারের নাম</th>
                <th>১৪ জুলাই</th>
                <th>১৪ আগস্ট</th>
                <th>১৪ সেপ্টেম্বর</th>
                <th>১৪ অক্টোবর</th>
                <th>১৪ নভেম্বর</th>
                <th>১৪ ডিসেম্বর</th>
                <th>১৪ জানুয়ারি</th>
                <th>১৪ ফেব্রুয়ারি</th>
                <th>১৪ মার্চ</th>
                <th>১৪ এপ্রিল</th>
                <th>১৪ মে</th>
                <th>১৪ জুন</th>
                <th>মোট</th>
            </tr>
            <?php
            $rc = 0;
//            echo  $_SESSION['subdist_id']  ."  " .$_SESSION['ecoyear_id'] . "  " ;
            $queary = mysql_query("SELECT * FROM `sheet5` WHERE `subdistrict` = '".$_SESSION['subdist_id']."' and `ecoyear` = '" . $_SESSION['ecoyear_id'] . "'");
//            echo mysql_num_rows($queary);
            If (mysql_num_rows($queary) > 0) {
                while ($row = mysql_fetch_array($queary)) {
                    if (($rc == 0) || ($rc % 2 == 0))
                        Echo"<tr class='active'>";
                    else
                        Echo"<tr class='sucess'>";
                    $fer = $row['fertilizar'];
                    $sql = mysql_query("SELECT * FROM `fertilizer`WHERE id ='" . $fer . "'");
                    $data = mysql_fetch_array($sql);
                    Echo "<td>" . $data['name'] . "</td>";
                    Echo "<td>" . $row['july'] . "</td>";
                    Echo "<td>" . $row['august'] . "</td>";
                    Echo "<td>" . $row['september'] . "</td>";
                    Echo "<td>" . $row['october'] . "</td>";
                    Echo "<td>" . $row['november'] . "</td>";
                    Echo "<td>" . $row['december'] . "</td>";
                    Echo "<td>" . $row['january'] . "</td>";
                    Echo "<td>" . $row['february'] . "</td>";
                    Echo "<td>" . $row['march'] . "</td>";
                    Echo "<td>" . $row['april'] . "</td>";
                    Echo "<td>" . $row['may'] . "</td>";
                    Echo "<td>" . $row['june'] . "</td>";
                    
                    $total = $row['july'] + $row['august'] + $row['september'] + $row['october'] + $row['november'] + $row['december'] + $row['january'] + $row['february'] + $row['march'] + $row['april'] + $row['may'] + $row['june'];
                    Echo "<td class='warning'>" . $total . "</td>";
                    $rc++;
                    Echo"</tr>";
                }
            }
            ?>

        </table>
    </div>
</div>