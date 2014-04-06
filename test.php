
<?php require './header.php'; ?>
<div class="container ofwhite">
    <div class="form-group">
        <label for="district" class="col-sm-4 control-label">জেলাঃ  </label>
        <div class="col-sm-8">
            <select class="form-control" name="district" id="district" >

                <?php
                Echo"<option selected='selected' value='0'>বাছাই করুন </option>";
                $result = mysql_query("SELECT * FROM district");
                while ($row = mysql_fetch_array($result)) {
                    Echo"<option value=\"";
                    echo $row['id'];
                    Echo"\">";
                    echo $row['name'];
                    Echo "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="subdistrict" class="col-sm-4 control-label">উপজেলাঃ  </label>
        <div class="col-sm-8">
            <select class="form-control" name="subdistrict" id="subdistrict" >
                <option selected="selected">বাছাই করুন </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="union" class="col-sm-4 control-label">ইউনিয়নঃ  </label>
        <div class="col-sm-8">
            <select class="form-control" name="union" id="union" >
                <option selected="selected">বাছাই করুন </option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="block" class="col-sm-4 control-label">block :  </label>
        <div class="col-sm-8">
            <select class="form-control" name="block" id="block" >
                <option selected="selected">বাছাই করুন </option>
            </select>
        </div>
    </div>
</div>

<div class="ofwhite container">
    <form>
        <fieldset>
            <legend align="right">Personalia:</legend>
            Name: <input type="text" size="30"><br>
            Email: <input type="text" size="30"><br>
            Date of birth: <input type="text" size="10">
        </fieldset>
    </form> 
</div>


<script>
    $("#district").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;

        $.ajax
                ({
                    type: "POST",
                    url: "ajax_subdistrict.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#subdistrict").html(html);
                    }
                });
    });

</script>
<script>
    $("#subdistrict").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;

        $.ajax
                ({
                    type: "POST",
                    url: "ajax_union.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#union").html(html);
                    }
                });
    });
</script>

<script>
    $("#union").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;

        $.ajax
                ({
                    type: "POST",
                    url: "ajax_block.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#block").html(html);
                    }
                });
    });
</script>
<?php require './footer.php'; ?>