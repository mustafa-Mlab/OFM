<?php
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
            <?php echo"<h2>" . $_SESSION['ecoyear'] . " অর্থবছরের ব্লক পর্যায় </h2>" ?>

            <h3>কৃষক / কৃষাণীর মৌসুমভিত্তিক আবাদি জমির পরিমান (হেক্টরে) নিরূপণ</h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?php echo '<h3>ব্লকের নামঃ ' . $_SESSION['block'] . "</h3>"; ?>
    </div>
    <div class="col-md-3">
        <?php echo '<h3> ইউনিয়নঃ ' . $union . "</h3>"; ?>
    </div>
    <div class="col-md-3">
        <?php echo '<h3> উপজেলাঃ ' . $subdistrict . "</h3>"; ?> 
    </div>
    <div class="col-md-3">
        <?php echo '<h3> জেলা;' . $district . "</h3>"; ?>
    </div>

</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive table-hover">
            <tr class="success">
                <th>কৃষক/কৃষাণীর নাম</th>
                <th>পিতা/স্বামীর নাম</th>
                <th>নীট আবাদি জমির পরিমাণ</th>
                <th>খরিপ মৌসুমের ফসল</th>
                <th>খরিপ মৌসুমের জমির পরিমাণ</th>
                <th>রবি মৌসুমের ফসল</th>
                <th>রবি মৌসুমের জমির পরিমাণ</th>
                <th>খরিপ-১ মৌসুমের ফসল</th>
                <th>খরিপ-১ মৌসুমের জমির পরিমাণ</th>
            </tr>
            <?php
            $rc = 0;
            $land = 0;
            $amm1 = 0;
            $amm2 = 0;
            $amm3 = 0;
            $query = mysql_query("SELECT * FROM `sheet1`WHERE block ='" . $_SESSION['block_id'] . "'ORDER BY id");
            while ($row = mysql_fetch_array($query)) {
                if (($rc == 0) || ($rc % 2 == 0))
                    Echo"<tr class='active'>";
                else
                    Echo"<tr class='sucess'>";
                Echo "<td>" . $row['name'] . "</td>";
                Echo "<td>" . $row['g_name'] . "</td>";
                Echo "<td>" . $row['land_ammount'] . "</td>";
                Echo "<td>" . $row['crop1'] . "</td>";
                Echo "<td>" . $row['ammount1'] . "</td>";
                Echo "<td>" . $row['crop2'] . "</td>";
                Echo "<td>" . $row['ammount2'] . "</td>";
                Echo "<td>" . $row['crop3'] . "</td>";
                Echo "<td>" . $row['ammount3'] . "</td>";
                Echo"</tr>";
                $land +=$row['land_ammount'];
                $amm1 += $row['ammount1'];
                $amm2 += $row['ammount2'];
                $amm3 += $row['ammount3'];
                $rc++;
            }
            Echo"<tr class='warning'>";
            Echo "<td>মোট</td> ";
            Echo "<td></td> ";
            Echo "<td>" . $land . "</td> ";
            Echo "<td></td> ";
            Echo "<td>" . $amm1 . "</td> ";
            Echo "<td></td> ";
            Echo "<td>" . $amm2 . "</td> ";
            Echo "<td></td> ";
            Echo "<td>" . $amm3 . "</td> ";
            ?>

        </table>
    </div>
</div>