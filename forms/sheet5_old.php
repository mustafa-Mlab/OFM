<?php if (!isset($_SESSION['id'])) header("locaton:../index.php"); ?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align">
            <h2>উপজেলা পর্যায়ে </h2>
            <h3>মাসওয়ারী সারের চাহিদা নিরূপণ</h3>
        </div>
    </div>
</div>

<div class="sheet5"> 
    <form class="form-horizontal">
        <div class="row">
            <div class="col-sm-4"><?php Echo"উপজেলাঃ   " . $subdistrict; ?> </div>
            <div class="col-sm-4"> <?php Echo"জেলাঃ  " . $district; ?> </div>
            <div class="col-sm-4"> <?php Echo"অর্থবছরঃ   " . $_SESSION['ecoyear']; ?> </div>
        </div>
        <table class="table table-responsive table-hover input_table">
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
            <tr>
                <td>ইউরিয়া</td>
                <td><input class="form-control" onchange="uChange(this);" required type="text" id="uria1" name="uria1 width="2" "></td>
                <td><input class="form-control" required type="text" id="uria2" name="uria2"></td>
                <td><input class="form-control" required type="text" id="uria3" name="uria3"></td>
                <td><input class="form-control" required type="text" id="uria4" name="uria4"></td>
                <td><input class="form-control" required type="text" id="uria5" name="uria5"></td>
                <td><input class="form-control" required type="text" id="uria6" name="uria6"></td>
                <td><input class="form-control" required type="text" id="uria7" name="uria7"></td>
                <td><input class="form-control" required type="text" id="uria8" name="uria8"></td>
                <td><input class="form-control" required type="text" id="uria9" name="uria9"></td>
                <td><input class="form-control" required type="text" id="uria10" name="uria10"></td>
                <td><input class="form-control" required type="text" id="uria11" name="uria11"></td>
                <td><input class="form-control" required type="text" id="uria12" name="uria12"></td>
                <td><input class="form-control" readonly required type="text" id="uria_total" name="uria_total" value= "0"></td>
            </tr>
            <tr>
                <td>টি এস পি</td>
                <td><input class="form-control" required  type="text" id="tsp1" name="tsp1"></td>
                <td><input class="form-control" required  type="text" id="tsp2" name="tsp2"></td>
                <td><input class="form-control" required type="text" id="tsp3" name="tsp3"></td>
                <td><input class="form-control" required type="text" id="tsp4" name="tsp4"></td>
                <td><input class="form-control" required type="text" id="tsp5" name="tsp5"></td>
                <td><input class="form-control" required type="text" id="tsp6" name="tsp6"></td>
                <td><input class="form-control" required type="text" id="tsp7" name="tsp7"></td>
                <td><input class="form-control" required type="text" id="tsp8" name="tsp8"></td>
                <td><input class="form-control" required type="text" id="tsp9" name="tsp9"></td>
                <td><input class="form-control" required type="text" id="tsp10" name="tsp10"></td>
                <td><input class="form-control" required type="text" id="tsp11" name="tsp11"></td>
                <td><input class="form-control" required type="text" id="tsp12" name="tsp12"></td>
                <td><input class="form-control" readonly required type="text" id="tsp_total" name="tsp_total" value= "0"></td>

            </tr>
            <tr>
                <td>ডি এম পি</td>
                <td><input class="form-control" required type="text" id="dmp1" name="dmp1"></td>
                <td><input class="form-control" required type="text" id="dmp2" name="dmp2"></td>
                <td><input class="form-control" required type="text" id="dmp3" name="dmp3"></td>
                <td><input class="form-control" required type="text" id="dmp4" name="dmp4"></td>
                <td><input class="form-control" required type="text" id="dmp5" name="dmp5"></td>
                <td><input class="form-control" required type="text" id="dmp6" name="dmp6"></td>
                <td><input class="form-control" required type="text" id="dmp7" name="dmp7"></td>
                <td><input class="form-control" required type="text" id="dmp8" name="dmp8"></td>
                <td><input class="form-control" required type="text" id="dmp9" name="dmp9"></td>
                <td><input class="form-control" required type="text" id="dmp10" name="dmp10"></td>
                <td><input class="form-control" required type="text" id="dmp11" name="dmp11"></td>
                <td><input class="form-control" required type="text" id="dmp12" name="dmp12"></td>
                <td><input class="form-control" readonly required type="text" id="dmp_total" name="dmp_total" value= "0"></td>
            </tr>
            <tr>
                <td>এম ও পি</td>
                <td><input class="form-control" required type="text" id="mop1" name="mop1"></td>
                <td><input class="form-control" required type="text" id="mop2" name="mop2"></td>
                <td><input class="form-control" required type="text" id="mop3" name="mop3"></td>
                <td><input class="form-control" required type="text" id="mop4" name="mop4"></td>
                <td><input class="form-control" required type="text" id="mop5" name="mop5"></td>
                <td><input class="form-control" required type="text" id="mop6" name="mop6"></td>
                <td><input class="form-control" required type="text" id="mop7" name="mop7"></td>
                <td><input class="form-control" required type="text" id="mop8" name="mop8"></td>
                <td><input class="form-control" required type="text" id="mop9" name="mop9"></td>
                <td><input class="form-control" required type="text" id="mop10" name="mop10"></td>
                <td><input class="form-control" required type="text" id="mop11" name="mop11"></td>
                <td><input class="form-control" required type="text" id="mop12" name="mop12"></td>
                <td><input class="form-control" readonly required type="text" id="mop_total" name="mop_total" value= "0"></td>
            </tr>
            <tr>
                <td>এন পি কে এস</td>
                <td><input class="form-control" required type="text" id="npks1" name="npks1"></td>
                <td><input class="form-control" required type="text" id="npks2" name="npks2"></td>
                <td><input class="form-control" required type="text" id="npks3" name="npks3"></td>
                <td><input class="form-control" required type="text" id="npks4" name="npks4"></td>
                <td><input class="form-control" required type="text" id="npks5" name="npks5"></td>
                <td><input class="form-control" required type="text" id="npks6" name="npks6"></td>
                <td><input class="form-control" required type="text" id="npks7" name="npks7"></td>
                <td><input class="form-control" required type="text" id="npks8" name="npks8"></td>
                <td><input class="form-control" required type="text" id="npks9" name="npks9"></td>
                <td><input class="form-control" required type="text" id="npks10" name="npks10"></td>
                <td><input class="form-control" required type="text" id="npks11" name="npks11"></td>
                <td><input class="form-control" required type="text" id="npks12" name="npks12"></td>
                <td><input class="form-control" readonly required type="text" id="mop_total" name="mop_total" value= "0"></td>
            </tr>
            <tr>
                <td>জিপসাম</td>
                <td><input class="form-control" required type="text" id="jipsam1" name="jipsam1"></td>
                <td><input class="form-control" required type="text" id="jipsam2" name="jipsam2"></td>
                <td><input class="form-control" required type="text" id="jipsam3" name="jipsam3"></td>
                <td><input class="form-control" required type="text" id="jipsam4" name="jipsam4"></td>
                <td><input class="form-control" required type="text" id="jipsam5" name="jipsam5"></td>
                <td><input class="form-control" required type="text" id="jipsam6" name="jipsam6"></td>
                <td><input class="form-control" required type="text" id="jipsam7" name="jipsam7"></td>
                <td><input class="form-control" required type="text" id="jipsam8" name="jipsam8"></td>
                <td><input class="form-control" required type="text" id="jipsam9" name="jipsam9"></td>
                <td><input class="form-control" required type="text" id="jipsam10" name="jipsam10"></td>
                <td><input class="form-control" required type="text" id="jipsam11" name="jipsam11"></td>
                <td><input class="form-control" required type="text" id="jipsam12" name="jipsam12"></td>
                <td><input class="form-control" readonly required type="text" id="jipsam_total" name="jipsam_total" value= "0"></td>
            </tr>
            <tr>
                <td>জিংক সালফেট</td>
                <td><input class="form-control" required type="text" id="zs1" name="zs1"></td>
                <td><input class="form-control" required type="text" id="zs2" name="zs2"></td>
                <td><input class="form-control" required type="text" id="zs3" name="zs3"></td>
                <td><input class="form-control" required type="text" id="zs4" name="zs4"></td>
                <td><input class="form-control" required type="text" id="zs5" name="zs5"></td>
                <td><input class="form-control" required type="text" id="zs6" name="zs6"></td>
                <td><input class="form-control" required type="text" id="zs7" name="zs7"></td>
                <td><input class="form-control" required type="text" id="zs8" name="zs8"></td>
                <td><input class="form-control" required type="text" id="zs9" name="zs9"></td>
                <td><input class="form-control" required type="text" id="zs10" name="zs10"></td>
                <td><input class="form-control" required type="text" id="zs11" name="zs11"></td>
                <td><input class="form-control" required type="text" id="zs12" name="zs12"></td>
                <td><input class="form-control" readonly required type="text" id="zs_total" name="zs_total" value= "0"></td>
            </tr>
            <tr>
                <td>ম্যাগনেসিয়াম সালফেট</td>
                <td><input class="form-control" required type="text" id="ms1" name="ms1"></td>
                <td><input class="form-control" required type="text" id="ms2" name="ms2"></td>
                <td><input class="form-control" required type="text" id="ms3" name="ms3"></td>
                <td><input class="form-control" required type="text" id="ms4" name="ms4"></td>
                <td><input class="form-control" required type="text" id="ms5" name="ms5"></td>
                <td><input class="form-control" required type="text" id="ms6" name="ms6"></td>
                <td><input class="form-control" required type="text" id="ms7" name="ms7"></td>
                <td><input class="form-control" required type="text" id="ms8" name="ms8"></td>
                <td><input class="form-control" required type="text" id="ms9" name="ms9"></td>
                <td><input class="form-control" required type="text" id="ms10" name="ms10"></td>
                <td><input class="form-control" required type="text" id="ms11" name="ms11"></td>
                <td><input class="form-control" required type="text" id="ms12" name="ms12"></td>
                <td><input class="form-control" readonly required type="text" id="ms_total" name="ms_total" value= "0"></td>
            </tr>
            <tr>
                <td>অ্যামোনিয়াম সালফেট </td>
                <td><input class="form-control" required type="text" id="as1" name="as1"></td>
                <td><input class="form-control" required type="text" id="as2" name="as2"></td>
                <td><input class="form-control" required type="text" id="as3" name="as3"></td>
                <td><input class="form-control" required type="text" id="as4" name="as4"></td>
                <td><input class="form-control" required type="text" id="as5" name="as5"></td>
                <td><input class="form-control" required type="text" id="as6" name="as6"></td>
                <td><input class="form-control" required type="text" id="as7" name="as7"></td>
                <td><input class="form-control" required type="text" id="as8" name="as8"></td>
                <td><input class="form-control" required type="text" id="as9" name="as9"></td>
                <td><input class="form-control" required type="text" id="as10" name="as10"></td>
                <td><input class="form-control" required type="text" id="as11" name="as11"></td>
                <td><input class="form-control" required type="text" id="as12" name="as12"></td>
                <td><input class="form-control" readonly required type="text" id="as_total" name="as_total" value= "0"></td>
            </tr>
            <tr>
                <td>বোরন</td>
                <td><input class="form-control" required type="text" id="br1" name="br1"></td>
                <td><input class="form-control" required type="text" id="br2" name="br2"></td>
                <td><input class="form-control" required type="text" id="br3" name="br3"></td>
                <td><input class="form-control" required type="text" id="br4" name="br4"></td>
                <td><input class="form-control" required type="text" id="br5" name="br5"></td>
                <td><input class="form-control" required type="text" id="br6" name="br6"></td>
                <td><input class="form-control" required type="text" id="br7" name="br7"></td>
                <td><input class="form-control" required type="text" id="br8" name="br8"></td>
                <td><input class="form-control" required type="text" id="br9" name="br9"></td>
                <td><input class="form-control" required type="text" id="br10" name="br10"></td>
                <td><input class="form-control" required type="text" id="br11" name="br11"></td>
                <td><input class="form-control" required type="text" id="br12" name="br12"></td>
                <td><input class="form-control" readonly required type="text" id="br_total" name="br_total" value= "0"></td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="form-group hidden">
            <label for="district" class="col-sm-4 control-label">উপজেলাঃ  </label>
            <div class="col-sm-8">
                <select class="form-control" name="subdistrict" id="subdistrict" >

                    <?php
                    Echo"<option selected='selected' value='" . $subdist_id . "'>" . $subdistrict . " </option>";
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group hidden">
            <label for="ecoyear" class="col-sm-4 control-label">অর্থবছরঃ  </label>
            <div class="col-sm-8">
                <select class="form-control" name="ecoyear" id="ecoyear" >
                    <?php
                    Echo"<option selected='selected' value='" . $_SESSION['ecoyear_id'] . "'>" . $_SESSION['ecoyear'] . " </option>";
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group hidden">
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
            <div class="col-md-12 right-align ">
                <button type="submit" class="button btn btn-default" name="submit" id="submit">Submit </button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
</div>

<script>
function uChange()
{
    var val1 = $(this).val;
    alert(val1);
}
</script>