<?php
include '../config.php';
$sql = mysql_query("SELECT * FROM ecoyear WHERE enabled = '1'");
$row = mysql_fetch_array($sql);
$_SESSION['ecoyear_id'] = $row['id'];
$_SESSION['ecoyear'] = $row['ecoyear'];
?>

<div class="row">
    <div class="col-md-12">
        <?php
        echo' <div align="center"><h3>' . $_SESSION['ecoyear'] . ' </h3> অর্থবছরের জেলাভিত্তিক সারের পরিমাণ অনুমোদন </div>';
        ?>
        <form class="form-horizontal" action="process/disallocation.php" method="post">
            <div class="form-group">
                <label for="district" class="col-sm-4 control-label">জেলার নামঃ  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="district" id="district" >

                        <?php
                        Echo"<option selected='selected' value='0'>বাছাই করুন </option>";

                        $result = mysql_query("SELECT DISTINCT(district) AS district FROM sheet6 ORDER BY district");
                        while ($row = mysql_fetch_array($result)) {
                            $dist_id = $row['district'];
                            $check = mysql_query("SELECT * FROM `district_allocation` WHERE district = '" . $dist_id . "'");
                            If (mysql_num_rows($check) == 0) {
                                $sql = mysql_query("SELECT * FROM `district` WHERE `id` ='" . $dist_id . "'");
                                $data = mysql_fetch_array($sql);
                                Echo"<option value=\"". $row['district'] . "\">" . $data['name'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!--<div id="table_hidden" class="hidden"> </div>-->
            <table class="table table-responsive table-hover">
                <tr>
                    <th>সারের নাম</th>
                    <th>সারের চাহিদা</th>
                    <th>অনুমোদিত পরিমাণ</th>
                </tr>
                <tr>
                    <td class="col-md-2">ইউরিয়া</td>
                    <td class="active"><input class="form-control" type="text" readonly id="uria" name="uria" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_uria" name="all_uria" /></td>
                </tr>
                <tr>
                    <td>টি এস পি</td>
                    <td class="active"><input class="form-control" type="text" readonly id="tsp" name="tsp" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_tsp" name="all_tsp" /></td>
                </tr>
                <tr>
                    <td>ডি এম পি</td>
                    <<td class="active"><input class="form-control" type="text" readonly id="dmp" name="dmp" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_dmp" name="all_dmp" /></td>
                </tr>
                <tr>
                    <td>এম ও পি</td>
                    <td class="active"><input class="form-control" type="text" readonly id="mop" name="mop" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_mop" name="all_mop" /></td>
                </tr>
                <tr>
                    <td>এন পি কে এস</td>
                    <td class="active"><input class="form-control" type="text" readonly id="mpks" name="mpks" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_mpks" name="all_mpks" /></td>
                </tr>
                <tr>
                    <td>জিপসাম</td>
                    <td class="active"><input class="form-control" type="text" readonly id="jipsam" name="jipsam" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_jipsam" name="all_jipsam" /></td>
                </tr>
                <tr>
                    <td>জিংক সালফেট</td>
                    <td class="active"><input class="form-control" type="text" readonly id="zinc_salfet" name="zinc_salfet" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_zinc_salfet" name="all_zinc_salfet" /></td>
                </tr>
                <tr>
                    <td>ম্যাগনেসিয়াম সালফেট</td>
                    <td class="active"><input class="form-control" type="text" readonly id="magnesium_salfet" name="magnesium_salfet" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_magnesium_salfet" name="all_magnesium_salfet" /></td>
                </tr>
                <tr>
                    <td>অ্যামোনিয়াম সালফেট</td>
                    <td class="active"><input class="form-control" type="text" readonly id="aluminum_salfet" name="aluminum_salfet" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_aluminum_salfet" name="all_aluminum_salfet" /></td>
                </tr>
                <tr>
                    <td>বোরন</td>
                    <td class="active"><input class="form-control" type="text" readonly id="boron" name="boron" /></td>
                    <td class="success"><input class="form-control" type="text" required id="all_boron" name="all_boron" /></td>
                </tr>

            </table>
            <div class="form-group">
                <div class="col-md-12 right-align ">
                    <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $("#district").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/dis_allocation.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
//                        alert(html);
                        var res = html.split(",");
                        var uria = document.getElementById("uria");
                        uria.value = res[0];
                        var tsp = document.getElementById("tsp");
                        tsp.value = res[1];
                        var dmp = document.getElementById("dmp");
                        dmp.value = res[2];
                        var mop = document.getElementById("mop");
                        mop.value = res[3];
                        var mpks = document.getElementById("mpks");
                        mpks.value = res[4];
                        var jipsam = document.getElementById("jipsam");
                        jipsam.value = res[5];
                        var zinc = document.getElementById("zinc_salfet");
                        zinc.value = res[6];
                        var mg = document.getElementById("magnesium_salfet");
                        mg.value = res[7];
                        var al = document.getElementById("aluminum_salfet");
                        al.value = res[8];
                        var boron = document.getElementById("boron");
                        boron.value = res[9];
                    }
                });
    });
</script>