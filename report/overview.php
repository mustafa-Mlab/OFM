<?php
include './config.php';
$query = mysql_query("SELECT * FROM user WHERE id= $id");
while ($row = mysql_fetch_array($query)) {
    $lavel = $row['right_lavel'];
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <?php echo"<h2>" . $_SESSION['ecoyear'] . " অর্থবছরের জেলাভিত্তিক সারের চাহিদা </h2>" ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-responsive table-hover">
            <tr class="success">
                <th>জেলার নাম</th>
                <th>ইউরিয়া</th>
                <th>টি এস পি</th>
                <th>ডি এম পি</th>
                <th>এম ও পি</th>
                <th>এন পি কে এস</th>
                <th>জিপসাম</th>
                <th>জিংক সালফেট</th>
                <th>ম্যাগনেসিয়াম সালফেট</th>
                <th>অ্যামোনিয়াম সালফেট</th>
                <th>বোরন</th>
                <th>এ ই জেড</th>
            </tr>
            <?php
            $rc = 0;
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

            $sql = mysql_query("SELECT * FROM `district` ORDER BY id ;");
            while ($info = mysql_fetch_array($sql)) {
                $dist_id = $info['id'];
                $queary = mysql_query("SELECT * FROM `sheet6` WHERE `ecoyear` = '" . $_SESSION['ecoyear_id'] . "' and `district` = '" . $dist_id . "'");
                If (mysql_num_rows($queary) > 0) {
                    if (($rc == 0) || ($rc % 2 == 0))
                        Echo"<tr class='active'>";
                    else
                        Echo"<tr class='sucess'>";

                    $disuria = 0;
                    $distsp = 0;
                    $disdmp = 0;
                    $dismop = 0;
                    $dismpks = 0;
                    $disjipsam = 0;
                    $diszinc_salfet = 0;
                    $dismagnesium_salfet = 0;
                    $disaluminum_salfet = 0;
                    $disboron = 0;
                    while ($row = mysql_fetch_array($queary)) {
                        $disuria += $row['uria'];
                        $distsp += $row['tsp'];
                        $disdmp +=$row['dmp'];
                        $dismop += $row['mop'];
                        $dismpks += $row['mpks'];
                        $disjipsam += $row['jipsam'];
                        $diszinc_salfet += $row['zinc_salfet'];
                        $dismagnesium_salfet += $row['magnesium_salfet'];
                        $disaluminum_salfet += $row['alluminium_salfet'];
                        $disboron += $row['boron'];
                    }
                    Echo "<td>" . $info['name'] . "</td>";
                    Echo "<td>" . $disuria . "</td>";
                    Echo "<td>" . $distsp . "</td>";
                    Echo "<td>" . $disdmp . "</td>";
                    Echo "<td>" . $dismop . "</td>";
                    Echo "<td>" . $dismpks . "</td>";
                    Echo "<td>" . $disjipsam . "</td>";
                    Echo "<td>" . $diszinc_salfet . "</td>";
                    Echo "<td>" . $dismagnesium_salfet . "</td>";
                    Echo "<td>" . $disaluminum_salfet . "</td>";
                    Echo "<td>" . $disboron . "</td>";
                    Echo "<td>" . $info['aez'] . "</td>";
                    Echo"</tr>";
                    $uria += $disuria;
                    $tsp += $distsp;
                    $dmp +=$disdmp;
                    $mop += $dismop;
                    $mpks += $dismpks;
                    $jipsam += $disjipsam;
                    $zinc_salfet += $diszinc_salfet;
                    $magnesium_salfet += $dismagnesium_salfet;
                    $aluminum_salfet += $disaluminum_salfet;
                    $boron += $disboron;
                    $rc++;
                }
            }
            Echo"<tr class='warning'>";
            Echo "<td>মোট</td> ";
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
            Echo"<td> <td>";
            Echo"</tr>";
            ?>

        </table>
    </div>
</div>