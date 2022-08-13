<div class="row">
    <div class="col-md-4">
        <div class="border-style">
            <p>Size</p>
            <label>
                <input type="range" value="100" min="1" max="200" step="1" class="sizeChange">
                <input style="width:55px;padding:0; height:32px; text-align:center;" value="100"
                    class="form-control sizeChange" type="text">
            </label>
        </div>


    </div>
    <div class="col-md-4">
        <div class="border-style">
            <p>Rotate</p>
            <label>
                <input style="width:100%" type="range" min="0" max="360" step="1" value="100" class="rotateRangebar">
                <input style="width:55px; height:32px;text-align:center " value="100"
                    class="form-control rotateRangebar" type="text">
            </label>
        </div>
    </div>


    <div class="col-md-4">
        <div class="border-style">
            <p>Stroke</p>
            <label>
                <input type="range" step="0.1" class="strokeRangebar" value="0" min="0" max="10">
                <input style="width:32px; height:32px;text-align:center;padding:0" value="0"
                    class="form-control strokeRangebar" type="text">
                <label for="picker-4" style="display:flex;margin-left:15px;margin-bottom:0;padding:0;border:none">
                    <img src="./image/colorpkr.png" style="border-radius:1.1rem; height:34px;width:34px"
                        alt="Italian Trulli">
                    <input class="" type="color" onclick="click('3',this)" style="opacity:0;width:0; height:0;"
                        id="picker-4" name="favcolor" value="#ff0000">

                </label>
            </label>

        </div>
    </div>

</div>