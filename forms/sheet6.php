<?php if (!isset($_SESSION['id'])) header("locaton:../index.php"); ?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <h2>জেলা পর্যায়ে </h2>
            <h3>ফসলভিত্তিক সারের চাহিদা নিরূপণ</h3>
        </div>
    </div>
</div>


<div class="row">
    <form class="form-horizontal" role="form" action="process/sheet6_receive.php" method="post">
        <!--1st collum--> 
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="crop" class="col-sm-4 control-label">ফসলঃ  </label>
                        <div class="col-sm-8">
                            <select class="form-control" name="crop" id="crop" >
                                <option selected="selected">বাছাই করুন </option>
                                <?php
                                $sql = mysql_query("SELECT * FROM `sheet6`WHERE ecoyear ='" . $_SESSION['ecoyear_id'] . "'and district ='" . $_SESSION['dist_id'] . "' and updated = 0 ORDER BY crop");
                                If (mysql_num_rows($sql) > 0) {
                                    while ($row = mysql_fetch_array($sql)) {
                                        $crop_id = $row['crop'];
                                        $row_id = $row['id'];
                                        $aez = $row['aez'];
                                        $query = mysql_query("SELECT * FROM `crop`WHERE id ='" . $crop_id . "'");
                                        $crop_details = mysql_fetch_array($query);
                                        $name = $crop_details['name'];
                                        echo '<option value="' . $row_id . '">' . $name . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group hidden">
                        <div class="col-sm-8">
                            <input type="text" readonly="readonly" class="form-control" id="id" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numbers" class="col-sm-4 control-label">মোট কৃষকের সংখ্যাঃ </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="numbers" name="numbers" placeholder="মোট কৃষকের সংখ্যা">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="land" class="col-sm-4 control-label">ফসলের আউতায় আবাদি জমির পরিমান হেক্টরেঃ </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="land" name="land" placeholder="ফসলের আউতায় আবাদি জমির পরিমান হেক্টরে">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center-align">
                                <h3>ফসলওয়ারী আবাদি জমির ভিত্তিতে বিভিন্ন সারের চাহিদা</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="uria" class="col-sm-4 control-label">ইউরিয়া </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="uria" name="uria" placeholder="ইউরিয়া">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tsp" class="col-sm-4 control-label">টি এস পি </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tsp" name="tsp" placeholder="টি এস পি">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dmp" class="col-sm-4 control-label">ডি এম পি </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="dmp" name="dmp" placeholder="ডি এম পি">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mop" class="col-sm-4 control-label">এম ও পি </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="mop" name="mop" placeholder="এম ও পি ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mpks" class="col-sm-4 control-label">এম পি কে এস </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="mpks" name="mpks" placeholder="এম পি কে এস">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jipsam" class="col-sm-4 control-label">জিপসাম </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="jipsam" name="jipsam" placeholder="জিপসাম">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="zinc_salfet" class="col-sm-4 control-label">জিংক সালফেট </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="zinc_salfet" name="zinc_salfet" placeholder="জিংক সালফেট">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="magnesium_salfet" class="col-sm-4 control-label">ম্যাগনেসিয়াম সালফেট </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="magnesium_salfet" name="magnesium_salfet" placeholder="ম্যাগনেসিয়াম সালফেট">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="aluminum_salfet" class="col-sm-4 control-label">অ্যালুমিনিয়াম সালফেট </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="aluminum_salfet" name="aluminum_salfet" placeholder="অ্যালুমিনিয়াম সালফেট">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="boron" class="col-sm-4 control-label">বোরন </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="boron" name="boron" placeholder="বোরন">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--2nd collum-->        
        <div class="col-md-4">
            <div class="form-group">
                <label for="aez" class="col-sm-4 control-label">এইজেড নং  </label>
                <div class="col-sm-8">
                    <input type="text"  class="form-control" id="aez" name="aez"<?php echo "value = '" . $_SESSION['aez'] . "'" ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="district" class="col-sm-4 control-label">জেলা  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="district" id="district">
                        <?php
                        echo $dist_id;
                         Echo" <option selected='selected' value='" . $_SESSION['dist_id'] . "'>" . $_SESSION['district'] . " </option>";
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="ecoyear" class="col-sm-4 control-label">অর্থবছরঃ  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="ecoyear" id="ecoyear" >
                        <?php
                        Echo"<option selected='selected' value='" . $_SESSION['ecoyear_id'] . "'>" . $_SESSION['ecoyear'] . " </option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 right-align ">
                    <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $("#crop").change(function()
    {
        var id = $(this).val();

        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_sheet6.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
//                        alert(html);
                        var res = html.split(",");
//                        res[0] is farmers number ,res[1] is land ammount and so on;
                        var farmers = document.getElementById("numbers");
                        farmers.value = res[0];
                        var land = document.getElementById("land");
                        land.value = res[1];
                        var uria = document.getElementById("uria");
                        uria.value = res[2];
                        var tsp = document.getElementById("tsp");
                        tsp.value = res[3];
                        var dmp = document.getElementById("dmp");
                        dmp.value = res[4];
                        var mop = document.getElementById("mop");
                        mop.value = res[5];
                        var mpks = document.getElementById("mpks");
                        mpks.value = res[6];
                        var jipsam = document.getElementById("jipsam");
                        jipsam.value = res[7];
                        var zinc = document.getElementById("zinc_salfet");
                        zinc.value = res[8];
                        var mg = document.getElementById("magnesium_salfet");
                        mg.value = res[9];
                        var al = document.getElementById("aluminum_salfet");
                        al.value = res[10];
                        var boron = document.getElementById("boron");
                        boron.value = res[11];
                        var crop = document.getElementById("id");
                        crop.value = res[12];
                    }
                });
    });
</script>