<?php
$query = mysql_query("SELECT * FROM user WHERE id= $id");
while ($row = mysql_fetch_array($query)) {
    $lavel = $row['right_lavel'];
    if ($lavel < 4) {
        $dist_id = $row['district'];
        $sql = mysql_query("SELECT name FROM district WHERE id='" . $dist_id . "'");
        $data = mysql_fetch_array($sql);
        $district = $data['name'];
        if ($lavel < 3) {
            $subdist_id = $row['subdistrict'];
            $sql = mysql_query("SELECT name FROM subdistrict WHERE id='" . $subdist_id . "'");
            $data = mysql_fetch_array($sql);
            $subdistrict = $data['name'];
            if ($lavel < 2) {
                $union_id = $row['union_loc'];
                $sql = mysql_query("SELECT name FROM `union` WHERE `id` ='" . $union_id . "'");
                $data = mysql_fetch_array($sql);
                $union = $data['name'];
            }
        }
    }
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
    <div class="col-md-2">
        <?php echo '<h4>ব্লকের নামঃ ' . $_SESSION['block'] . "</h4>"; ?>
    </div>
    <div class="col-md-2">
        <?php echo '<h4> ইউনিয়নঃ ' . $_SESSION['union'] . "</h4>"; ?>
    </div>
    <div class="col-md-2">
        <?php echo '<h4> উপজেলাঃ ' . $_SESSION['subdistrict'] . "</h4>"; ?> 
    </div>
    <div class="col-md-2">
        <?php echo '<h4> জেলা;' . $_SESSION['district'] . "</h4>"; ?>
    </div>
    <div class="col-md-4">
        <?php echo '<h4> এ ই জেডঃ' . $_SESSION['aez'] . "</h4>"; ?>
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
            $query = mysql_query("SELECT * FROM `sheet1`WHERE block ='" . $_SESSION['block_id'] . "' and ecoyear = '" . $_SESSION['ecoyear_id'] . "'ORDER BY id");
            while ($row = mysql_fetch_array($query)) {
                if (($rc == 0) || ($rc % 2 == 0))
                    Echo"<tr class='active'>";
                else
                    Echo"<tr class='sucess'>";
                Echo "<td>" . $row['name'] . "</td>";
                Echo "<td>" . $row['g_name'] . "</td>";
                Echo "<td>" . $row['land_ammount'] . "</td>";
                $sql = mysql_query("SELECT * FROM `crop` WHERE `id` = '" . $row['crop1'] . "'");
                $data = mysql_fetch_array($sql);
                $crop1 = $data['name'];
                Echo "<td>" . $crop1 . "</td>";
                Echo "<td>" . $row['ammount1'] . "</td>";
                $sql = mysql_query("SELECT * FROM `crop` WHERE `id` = '" . $row['crop2'] . "'");
                $data = mysql_fetch_array($sql);
                $crop2 = $data['name'];
                Echo "<td>" . $crop2 . "</td>";
                Echo "<td>" . $row['ammount2'] . "</td>";
                $sql = mysql_query("SELECT * FROM `crop` WHERE `id` = '" . $row['crop3'] . "'");
                $data = mysql_fetch_array($sql);
                $crop3 = $data['name'];
                Echo "<td>" . $crop3 . "</td>";
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