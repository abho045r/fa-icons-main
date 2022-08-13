<div class="row">
    <div class="col-md-4">
        <div class="svg-input-border">
            <p>Size</p>
            <label>
                <input type="range" step="1" max="200" value="200" id="mainIcon_sizeChange" />
                <input class="form-control" type="text" id="mainIcon_sizeValue" value="200"
                    style="width:55px;height:32px;padding:0;text-align:center" />
                <h6 style="margin:0;padding:10px 0 10px 5px">Px</h6>
            </label>
        </div>

    </div>
    <div class="col-md-4">
        <div class="svg-input-border">
            <p>Radius</p>
            <label>
                <input type="range" step="1" max="300" value="200" id="" />
                <input class="form-control" type="text" id="" value="200"
                    style="width:55px;height:32px;padding:0;text-align:center" />
                <h6 style="margin:0;padding:10px 0 10px 5px">Px</h6>
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="svg-input-border">
            <p>Stroke</p>
            <label>
                <input min="0" max="2" value=".2" value="5" step="0.1" id="IconStrokeChange" type="range" />
                <input type="text" id="mainIconStrokeValue" value="5"
                    style="width:32px;height:32px;text-align:center;padding:0" class="form-control" />
                <label for="IconStrokeColorPicker"
                    style="display:flex;margin-left:15px;margin-bottom:0;padding:0;border:none">
                    <img src="./colorpickerImage//colorpkr.png" style="border-radius:1.1rem; height:34px;width:34px"
                        alt="Italian Trulli">
                    <input class="" type="color" style="opacity:0;width:0; height:0;" onClick="IconStrokeClr()" id="IconStrokeColorPicker"
                        name="favcolor" value="#ff0000">

                </label>
            </label>
        </div>
    </div>
</div>