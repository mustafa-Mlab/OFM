
<form class="form-horizontal" role="form" action="process/update_union.php" method="post">
    <?php require './district_selector.php'; ?>
    <?php require './subdistrict_selector.php'; ?>
    <?php require './union_selector.php'; ?>
    <div class="form-group">
        <label for="name" class="col-sm-4 control-label">ইউনিয়নের নামঃ </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="name" name="name" placeholder="জেলার নামঃ">
        </div>
    </div>
    <div class="form-group">
        <label for="aez" class="col-sm-4 control-label">এ ই জেড নং  </label>
        <div class="col-sm-8">
            <input type="text" required class="form-control" id="aez" name="aez" placeholder="এ ই জেড নং ">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="button btn btn-default" name="update_union" id="update_union">Update</button>
        </div>
    </div>
</form>

<script>
    $("#union").change(function()
    {
        var id = $(this).val();
        var dataString = 'id=' + id;
        $.ajax
                ({
                    type: "POST",
                    url: "forms/ajax_unionupdate.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        var res = html.split("-");
                        var name = document.getElementById("name");
                        name.value = res[0];
                        var aez = document.getElementById("aez");
                        aez.value = res[1];

                    }
                });
    });
</script>