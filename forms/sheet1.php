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
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">কৃষক/ কৃষাণীর নামঃ  </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" name="name" placeholder="কৃষক/ কৃষাণীর নাম">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="g_name" class="col-sm-4 control-label">পিতা / স্বামীর নামঃ  </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="g_name" name="g_name" placeholder="পিতা / স্বামীর নাম">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ammount" class="col-sm-4 control-label">নীট আবাদি জমির পরিমানঃ  </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ammount" name="ammount" placeholder="নীট আবাদি জমির পরিমান">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="center-align">
                                <h3>মৌসুমভিত্তিক আবাদি ফসলের নাম ও আওতাধীন জমির পরিমান (হেক্টরে)</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="season" class="col-sm-4 control-label">মৌসুম  </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="lavel" id="lavel">
                                        <option selected="selected" value="0">বাছাই করুন </option>
                                        <option value="1">খরিপ২ </option>
                                        <option value="2">রবি </option>
                                        <option value="3">খরিপ১</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="crop" class="col-sm-4 control-label">ফসলঃ  </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="crop" name="crop" placeholder="ফসল">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="amm" class="col-sm-4 control-label">পরিমানঃ  </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="amm" name="amm" placeholder="পরিমান">
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
                                    <input type="text" class="form-control" id="aez" name="aez" placeholder="এইজেড নং">
                                </div>
                            </div>
             <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default" name="submit" id="submit">Submit </button>
        </div>
    </div>
        </div>
    </form>
</div>