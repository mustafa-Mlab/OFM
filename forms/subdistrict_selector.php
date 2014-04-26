<?php
include '../config.php';
?>
<div class="form-group">
    <label for="subdistrict" class="col-sm-4 control-label">উপজেলাঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="subdistrict" id="subdistrict" >
            <option selected="selected">বাছাই করুন </option>
        </select>
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
                    url: "forms/ajax_subdistrict.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#subdistrict").html(html);
                    }
                });
    });
</script>
