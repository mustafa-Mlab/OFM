<?php 
include 'config.php';
?>
<div class="form-group">
        <label for="crop" class="col-sm-4 control-label">ফসলঃ  </label>
        <div class="col-sm-8">
            <select class="form-control" name="crop" id="crop" >
                <option selected="selected">বাছাই করুন </option>
            </select>
        </div>
    </div>

<script>
    $("#season").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;

        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_crop_sheet3.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $("#crop").html(html);
                    }
                });
    });
</script>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>-->