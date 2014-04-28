<?php
include '../config.php';
?>
<div class="form-group">
    <label for="block" class="col-sm-4 control-label">ব্লকঃ  </label>
    <div class="col-sm-8">
        <select class="form-control" name="block" id="block" >
            <option selected="selected" value ="0">বাছাই করুন </option>
        </select>
    </div>
</div>

<script>
    $("#union").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_block.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#block").html(html);
                    }
                });
    });
</script>