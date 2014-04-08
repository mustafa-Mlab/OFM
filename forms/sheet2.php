<?php
if (!isset($_SESSION['id']))
    header("locaton:../index.php");
?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <h2>ব্লক পর্যায় </h2>
            <h3>কৃষক / কৃষাণীর মৌসুমভিত্তিক আবাদি জমির পরিমান (হেক্টরে) নিরূপণ</h3>
        </div>
    </div>
</div>


<div class="row">
    <form class="form-horizontal" role="form" action="sheet1_receive.php" method="post">
        <!--1st collum--> 
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php require 'forms/season_selector.php'; ?>
                   <?php require 'forms/crop_selector.php'; ?>

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
                    <input type="text" required class="form-control" id="aez" name="aez" placeholder="এইজেড নং">
                </div>
            </div>
            <div class="form-group">
                <label for="district" class="col-sm-4 control-label">জেলা  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="district" id="district">
                        <?php
                        echo $dist_id;
                        Echo" <option selected='selected' value='" . $dist_id . "'>" . $district . " </option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="district" class="col-sm-4 control-label">উপজেলাঃ  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="subdistrict" id="subdistrict" >

                        <?php
                        Echo"<option selected='selected' value='" . $subdist_id . "'>" . $subdistrict . " </option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="union" class="col-sm-4 control-label">ইউনিয়নঃ  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="union" id="union" >
                        <?php
                        Echo"<option selected='selected' value='" . $union_id . "'>" . $union . " </option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="block" class="col-sm-4 control-label">ব্লকঃ  </label>
                <div class="col-sm-8">
                    <select class="form-control" name="block" id="block" >
                        <?php
                        Echo"<option selected='selected' value='" . $_SESSION['block_id'] . "'>" . $_SESSION['block'] . " </option>";
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
        </div>
    </form>
</div>
<script>
    $("#crop").change(function()
    {
        var id = $(this).val();
        var season = document.getElementById("season");
        var season_id = season.options[season.selectedIndex].value;
        var dataString = 'id=' + id +'season='+ season_id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_farmers.php",
                    data: dataString,
                    cache: false,
                    success: function(response)
                    {
                        alert(response);
//                        $("#crop").html(html);
                    }
                });
    });
</script>