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
                <th>ফসলের নাম</th>
                <th>মোট কৃষকের সংখা</th>
                <th>ফসলের আওতায় আবাদি জমির পরিমান (হেক্টরে)</th>
                <th>ইউরিয়া</th>
                <th>টি এস পি</th>
                <th>ডি এ পি</th>
                <th>এম ও পি</th>
                <th>এন পি কে এস</th>
                <th>জিপসাম</th>
                <th>জিংক সালফেট</th>
                <th>ম্যাগনেসিয়াম সালফেট</th>
                <th>অ্যালুমিনিয়াম সালফেট</th>
                <th>বোরন</th>
            </tr>
            <?php
            $rc = 0;
            $farmers = 0;
            $land = 0;
            $uria = 0;
            $tsp = 0;
            $dmp = 0;
            $mop = 0;
            $mpks = 0;
            $jipsam = 0;
            $zinc_salfet = 0;
            $magnesium_salfet = 0;
            $aluminum_salfet = 0;
            $boron = 0;
            $query = mysql_query("SELECT * FROM `sheet2`WHERE block ='" . $_SESSION['block_id'] . "'ORDER BY id");
            while ($row = mysql_fetch_array($query)) {
                if (($rc == 0) || ($rc % 2 == 0))
                    Echo"<tr class='active'>";
                else
                    Echo"<tr class='sucess'>";
                $crop = $row['crop'];
                $sql = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop . "'");
                $data = mysql_fetch_array($sql);
                Echo "<td>" . $data['name'] . "</td>";
                Echo "<td>" . $row['numbers'] . "</td>";
                Echo "<td>" . $row['land'] . "</td>";
                Echo "<td>" . $row['uria'] . "</td>";
                Echo "<td>" . $row['tsp'] . "</td>";
                Echo "<td>" . $row['dmp'] . "</td>";
                Echo "<td>" . $row['mop'] . "</td>";
                Echo "<td>" . $row['mpks'] . "</td>";
                Echo "<td>" . $row['jipsam'] . "</td>";
                Echo "<td>" . $row['zinc_salfet'] . "</td>";
                Echo "<td>" . $row['magnesium_salfet'] . "</td>";
                Echo "<td>" . $row['alluminium_salfet'] . "</td>";
                Echo "<td>" . $row['boron'] . "</td>";
                Echo"</tr>";
                $farmers +=$row['numbers'];
                $land += $row['land'];
                $uria += $row['uria'];
                $tsp += $row['tsp'];
                $dmp +=$row['dmp'];
                $mop += $row['mop'];
                $mpks += $row['mpks'];
                $jipsam += $row['jipsam'];
                $zinc_salfet += $row['zinc_salfet'];
                $magnesium_salfet += $row['magnesium_salfet'];
                $aluminum_salfet += $row['alluminium_salfet'];
                $boron += $row['boron'];
                $rc++;
            }
            Echo"<tr class='warning'>";
            Echo "<td>মোট</td> ";
            Echo "<td>" . $farmers . "</td> ";
            Echo "<td>" . $land . "</td> ";
            Echo "<td>" . $uria . "</td> ";
            Echo "<td>" . $tsp . "</td> ";
            Echo "<td>" . $dmp . "</td> ";
            Echo "<td>" . $mop . "</td> ";
            Echo "<td>" . $mpks . "</td> ";
            Echo "<td>" . $jipsam . "</td> ";
            Echo "<td>" . $zinc_salfet . "</td> ";
            Echo "<td>" . $magnesium_salfet . "</td> ";
            Echo "<td>" . $aluminum_salfet . "</td> ";
            Echo "<td>" . $boron . "</td> ";
            ?>

        </table>
    </div>
</div>