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
            <?php echo"<h2>" . $_SESSION['ecoyear'] . " অর্থবছরের ইউনিয়ন পর্যায়ে </h2>" ?>
            <h3>ফসলভিত্তিক সারের পরিমাণ <?php if ($_SESSION['table'] == "sheet3") echo " নিরূপণ";
            else echo "অনুমোদিত"; ?></h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
<?php echo'<h4> ইউনিয়নঃ ' . $_SESSION['union'] . "</h4>"; ?>
    </div>
    <div class="col-md-3">
<?php echo '<h4> উপজেলাঃ ' . $_SESSION['subdistrict'] . "</h4>"; ?> 
    </div>
    <div class="col-md-3">
<?php echo '<h4> জেলাঃ' . $_SESSION['district'] . "</h4>"; ?>
    </div>
    <div class="col-md-3">
<?php echo '<h4> এ ই জেডঃ' . $_SESSION['aez'] . "</h4>"; ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive table-hover">
            <tr class="success">
                <th>ফসলের নাম</th>
                <th>মোট কৃষকের সংখা</th>
                <th>আবাদি জমির পরিমান (হেক্টরে)</th>
                <th>ইউরিয়া</th>
                <th>টি এস পি</th>
                <th>ডি এ পি</th>
                <th>এম ও পি</th>
                <th>এন পি কে এস</th>
                <th>জিপসাম</th>
                <th>জিংক সালফেট</th>
                <th>ম্যাগনেসিয়াম সালফেট</th>
                <th>অ্যামোনিয়াম সালফেট</th>
                <th>বোরন <?php echo $_SESSION['table'];?></th>
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
            $query = mysql_query("SELECT * FROM `" . $_SESSION['table'] . "`WHERE union_id ='" . $_SESSION['union_id'] . "'and ecoyear = '" . $_SESSION['ecoyear_id'] . "'ORDER BY id DESC");
            while ($row = mysql_fetch_array($query)) {
                if (($rc == 0) || ($rc % 2 == 0))
                    Echo"<tr class='active'>";
                else
                    Echo"<tr class='sucess'>";
                $crop = $row['crop'];
                $sql = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop . "'");
                $data = mysql_fetch_array($sql);
                Echo "<td>" . $data['name'] . "</td>";
                Echo "<td>" . $row['farmers'] . "</td>";
                Echo "<td>" . $row['land'] . "</td>";
                Echo "<td>" . round($row['uria'], 2) . "</td>";
                Echo "<td>" . round($row['tsp'], 2) . "</td>";
                Echo "<td>" . round($row['dmp'], 2) . "</td>";
                Echo "<td>" . round($row['mop'], 2) . "</td>";
                Echo "<td>" . round($row['mpks'], 2) . "</td>";
                Echo "<td>" . round($row['jipsam'], 2) . "</td>";
                Echo "<td>" . round($row['zinc_salfet'], 2) . "</td>";
                Echo "<td>" . round($row['magnesium_salfet'], 2) . "</td>";
                Echo "<td>" . round($row['alluminium_salfet'], 2) . "</td>";
                Echo "<td>" . round($row['boron'], 2) . "</td>";
                Echo"</tr>";
                $farmers +=$row['farmers'];
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
            Echo "<td>" . round($uria, 2) . "</td> ";
            Echo "<td>" . round($tsp, 2) . "</td> ";
            Echo "<td>" . round($dmp, 2) . "</td> ";
            Echo "<td>" . round($mop, 2) . "</td> ";
            Echo "<td>" . round($mpks, 2) . "</td> ";
            Echo "<td>" . round($jipsam, 2) . "</td> ";
            Echo "<td>" . round($zinc_salfet, 2) . "</td> ";
            Echo "<td>" . round($magnesium_salfet, 2) . "</td> ";
            Echo "<td>" . round($aluminum_salfet, 2) . "</td> ";
            Echo "<td>" . round($boron, 2) . "</td> ";
            ?>

        </table>
    </div>
</div>