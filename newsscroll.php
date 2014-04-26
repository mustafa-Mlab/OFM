<?php
include './config.php';
?>
<fieldset>
    <div>
        <h2><legend>সর্বশেষ সংবাদ</legend></h2>
        <div class="newsscroller" id="newsscroller">
            <ul>
                <?php
                $query = mysql_query("SELECT news FROM news WHERE status = 1");
                if ($query) {
                    while ($row = mysql_fetch_array($query)) {
                        Echo "<li><a href='#'><b>" . $row['news'] . "</b></a></li>";
                    }
                }
                ?>
                <li><a href="#">২০১৪-১৫ অর্থবছরের সারের চাহিদা নিরুপন সমাপ্তি। টি এস পি এর চাহিদা বেরেছে কমেছে এম পি এস এর।</a></li>
                <li><a href="#">নতুন সার সংরক্ষণশালা উদ্ভোদন , পর্যায়ক্রমে ১৬টি জেলায় সারের বিতরন নিশ্চিত।</a></li>
                <li><a href="#">গতবছর থেকে এ বছরে শস্য উৎপাদনমাত্রা বেড়েছে ১২ শতাংশ । তবে আঁখের উৎপাদন মাত্রা কমেছে ২৫ শতাংশ।</a></li>
                <li><a href="#">নতুন সার সংরক্ষণশালা উদ্ভোদন , পর্যায়ক্রমে ১৬টি জেলায় সারের বিতরন নিশ্চিত।</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</a></li>
            </ul>
        </div>
    </div>
</fieldset>