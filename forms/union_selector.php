<?php
include '../config.php';
?>
<div class="form-group">
    <label for="union" class="col-sm-4 control-label">ইউনিয়নঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="union" id="union" >
            <option selected="selected" value ="0">বাছাই করুন </option>
        </select>
    </div>
</div>

<script>
    $("#subdistrict").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;

        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_union.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#union").html(html);
                    }
                });
    });
</script>
