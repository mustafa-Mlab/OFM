<?php require '../config.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="center-align"><h2>User Informations</h2></div>
        <table class="table table-responsive table-hover">
            <tr class="success">
                <th>ID</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>username</th>
                <th>lavel</th>
                <th>Registration date</th>
                <th>Status</th>
            </tr>
            <?php
            $rc = 0;
            $query = mysql_query("SELECT * FROM `user`ORDER BY id");
            while ($row = mysql_fetch_array($query)) {
                if (($rc == 0) || ($rc % 2 == 0)) Echo"<tr class='active'>";
                    else Echo"<tr class='sucess'>";
                    Echo "<td>" . $row['id'] . "</td>";
                    Echo "<td>" . $row['full_name'] . "</td>";
                    Echo "<td>" . $row['mob'] . "</td>";
                    Echo "<td>" . $row['username'] . "</td>";
                    if($row['right_lavel'] == 1) Echo "<td>ইউনিয়ন</td>";
                    else if($row['right_lavel'] == 2) Echo "<td>উপজেলা</td>";
                    else if($row['right_lavel'] == 3) Echo "<td>জেলা</td>";
                    else Echo "<td>মন্ত্রণালয়</td>";
                    Echo "<td>" . $row['reg_date'] . "</td>";
                    if($row['status'] == 1) Echo "<td>Enabled</td>";
                    else Echo "<td>Disabled</td>";
                    Echo"</tr>";
                    $rc++;
            }
            ?>
           
        </table>

    </div>
</div>