<div id="thirdRowBtn" class=" btn-group btn-group-justified">
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse1">Box Shadow <span class="caret"></span></a>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse2">Icon Shadow <span class="caret"></span></a>
    <a class="btn btn-primary" id="bootOutlineShapes" data-toggle="collapse" href="#collapse3">Outline Shapes <span
            class="caret"></span></a>
    <a class="btn btn-primary" id="bootFilledShapes" data-toggle="collapse" href="#collapse4">Filled Shapes <span
            class="caret"></span></a>


</div>
<div id="accordion">
    <div class="panel" style="margin-bottom:0">
        <div id="collapse1" class="panel-collapse collapse" data-parent="#accordion">
            <div class="panel-body" style="padding-bottom:0">
                <div class="setting">
                    <div class="row" style="margin-bottom:10px">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <p class="list-group-item boot-padding">X offset</p>
                            <div class="boot-border-style">
                                <input id="bootXoffset" type="range" min="-20" max="20" step="1" />
                                <input value="5" id="bootXOffsetValue" class="form-control boot-input-text" type="text">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <p class="list-group-item boot-padding">Y offset</p>
                            <div class="boot-border-style">
                                <input id="bootYoffset" style="width:100%" type="range" min="-20" max="20" step="1" />

                                <input value="5" id="bootYOffsetValue" class="form-control boot-input-text" type="text">
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <p class="list-group-item boot-padding">Blur</p>
                            <div class="boot-border-style">
                                <input id="boot-blur-radius" style="width:100%" type="range" min="0" max="30"
                                    step="1" />
                                <input " value=" 5" id="bootBlur_RadiusValue" class="form-control boot-input-text"
                                    type="text">

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 ">
                            <p class="list-group-item boot-padding">Spread</p>
                            <div class="boot-border-style">
                                <input id="boot-spread-radius" style="width:100%" type="range" min="0" max="50"
                                    step="0.5" />
                                <input value="4" id="bootSpread_RadiusValue" class="form-control boot-input-text"
                                    type="text">
                            </div>

                        </div>
                        <div class=" col-sm-4">
                            <div class="boot-border-style" style="justify-content: space-around;">
                                <label for="bootShadow-ColorPicker">
                                    <img src="./image/colorpkr.png" style="border-radius:1.1rem;" alt="Italian Trulli">
                                    <input class="boot-color-picker" type="color" id="bootShadow-ColorPicker"
                                        name="favcolor" value="#ff0000">
                                </label>

                                <div style="margin-top:5px">
                                    <input class="form-check-input" type="checkbox" value="" id="boot-inset-radius" />
                                    <label class="form-check-label" for="flexCheckDefault">inset shadow</label>
                                </div>
                                <a class=" btn btn-default" style="border:none" id="bootShadowReset">
                                    Reset</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div id="collapse2" class="panel-collapse collapse" data-parent="#accordion">
            <div class="panel-body" style="padding-bottom:0">
                <div class="iconSetting">
                    <div class="row" style="margin-bottom:10px">
                        <div class=" col-sm-4 ">
                            <p class="list-group-item boot-padding">X offset</p>
                            <div class="boot-border-style">
                                <input id="bootIconXoffset" style="width:100%" type="range" min="0" max="20" step="0.1">
                                <input value="5" id="bootIconXOffsetValue" class="form-control boot-input-text"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="list-group-item boot-padding">Y offset</p>
                            <div class="boot-border-style">
                                <input id="bootIconYoffset" style="width:100%" type="range" min="-20" max="20"
                                    step="0.1">
                                <input value="5" id="bootIconYOffsetValue" class="form-control boot-input-text"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class=" list-group-item boot-padding">Blur</p>
                            <div class="boot-border-style">
                                <input id="boot-icon-blur-radius" style="width:100%" type="range" min="0" max="20"
                                    step="0.1">
                                <input value="5" id="bootIconBlurRadiusValue" class="form-control boot-input-text"
                                    type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="boot-border-style" style="justify-content: space-around">
                                <label for="bootTextShadow-ColorPicker">
                                    <img src="./image/colorpkr.png" style="border-radius:1.1rem;"
                                        class="boot-input-text" alt="Italian Trulli">
                                    <input type="color" class="boot-color-picker" id="bootTextShadow-ColorPicker"
                                        name="favcolor" value="#ff0000">
                                </label>
                                <a class="btn btn-default" id="bootIcon-ShadowReset">Reset</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="collapse3" class="panel-collapse collapse" data-parent="#accordion">
            <div class="" style="border:none;padding-top:5px">
                <div class="btn-group btn-group-justified" role="group" aria-label="Button group with nested dropdown"
                    style="margin-bottom:5px;">
                    <a type="button" class="btn  btn-default" onclick="setBorder('solid',this)">
                        Solid
                    </a>
                    <a type="button" class="btn  btn-default" onclick="setBorder('dotted',this)">
                        Dotted
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('dashed',this)">
                        Dashed
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('double',this)">
                        Double
                    </a>
                    <a type="button" class="btn  btn-default" onclick="setBorder('groove',this)">
                        Groove
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('ridge',this)">
                        Ridge
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('inset',this)">
                        inset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('outset',this)">
                        outset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('hidden',this)">
                        hidden
                    </a>
                </div>
                <div class="row" style="margin-bottom:5px">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <p class="list-group-item boot-padding">Padding</p>
                        <div class="boot-border-style">
                            <input class="bootIconPadding" style="width:100%" value="0" type="range" min="0" max="50"
                                step="1">
                            <input value="0" class="form-control boot-input-text bootIconPadding bootIconPaddingValue"
                                type="text">
                        </div>
                    </div>
                    <div class=" col-sm-4">
                        <div class="list-group-item boot-padding" style="display:flex;justify-content: space-between;">
                            <p style="margin-bottom:0">Radius</p>
                        </div>
                        <div class=" boot-border-style">
                            <input class="bootIconRadius" value="0" style="width:100%" type="range" min="1" max="50"
                                step="1">
                            <input value="100" class="form-control boot-input-text bootIconRadius bootIconRadiusValue"
                                type="text">
                        </div>
                    </div>
                    <div class=" col-sm-4 ">
                        <p class="list-group-item boot-padding">Border</p>
                        <div class="boot-border-style">
                            <input class="bootOutlineBorder" style="width:100%" type="range" value="5" min="1" max="15"
                                step="1">
                            <input value="5"
                                class="form-control boot-input-text bootOutlineBorder bootOutlineBorderValue"
                                type="text">
                        </div>
                    </div>
                </div>
                <div class="list-group-item"
                    style="justify-content: space-between;display:flex;flex-wrap:wrap;border-top-left-radius:4px;border-top-right-radius:4px">
                    <button class="btn  boot-rounded-btn ffffff" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#ffffff',this);"></button>
                    <button class="btn  boot-rounded-btn gray" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#808080',this);"></button>
                    <button class="btn  boot-rounded-btn darkgray" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#545454',this);"></button>
                    <button class="btn  boot-rounded-btn black" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#000000',this);"></button>
                    <button class="btn  boot-rounded-btn dopely" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#6d4c41',this);"></button>
                    <button class="btn  boot-rounded-btn ed5f1e" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#ed5f1e',this);"></button>
                    <button class="btn  boot-rounded-btn orange" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#f39c12',this);"></button>
                    <button class="btn  boot-rounded-btn yellow" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#ffd230',this);"></button>
                    <button class="btn  boot-rounded-btn deepgreen" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#008037',this);"></button>
                    <button class="btn  boot-rounded-btn greenblue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#307d7e',this);"></button>
                    <button class="btn  boot-rounded-btn navyblue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#000080',this);"></button>
                    <button class="btn  boot-rounded-btn blue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#0000ff',this);"></button>
                    <button class="btn  boot-rounded-btn purple" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#800080',this);"></button>
                    <button class="btn  boot-rounded-btn brown" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#a52a2a',this);"></button>
                    <button class="btn  boot-rounded-btn red" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#ff0000',this);"></button>
                    <button class="btn  boot-rounded-btn a83232" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,'#fe00a1',this);"></button>

                    <label for="bootBorderColorPicker-1">
                        <img src="./image/colorpkr.png"
                            style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;" alt="Italian Trulli">
                        <input type="color" id="bootBorderColorPicker-1"
                            class="boot-color-picker bootBorder_ColorPicker">
                    </label>
                </div>



            </div>
        </div>
        <div id="collapse4" class="panel-collapse collapse" data-parent="#accordion">
            <div class="panel-body" style="padding:5px 0 0px 0">
                <div class="btn-group btn-group-justified" style="margin-bottom:5px" role="group"
                    aria-label="Button group with nested dropdown">
                    <a type="button" class="btn btn-default" onclick="setBorder('solid',this)">
                        Solid
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('dotted',this)">
                        Dotted
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('dashed',this)">
                        Dashed
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('double',this)">
                        Double
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('groove',this)">
                        Groove
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('ridge',this)">
                        Ridge
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('inset',this)">
                        inset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('outset',this)">
                        outset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorder('hidden',this)">
                        Hidden
                    </a>
                </div>
                <div class="row" style="margin-bottom:5px">
                    <div class="col-sm-4">
                        <p class="list-group-item boot-padding">Padding</p>
                        <div class="boot-border-style">
                            <input class="bootIconPadding" style="width:100%" type="range" min="1" max="50" step="1">
                            <input value="25" class="form-control boot-input-text bootIconPadding bootIconPaddingValue"
                                type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="list-group-item boot-padding">Radius</p>
                        <div class="boot-border-style">
                            <input class="bootIconRadius" style="width:100%" type="range" min="1" max="50" step="1">
                            <input value="25" class="form-control boot-input-text bootIconRadius bootIconRadiusValue"
                                type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="list-group-item boot-padding">Stroke</p>
                        <div class="boot-border-style">
                            <input class="bootOutlineBorder" value="15" style="width:100%" type="range" min="0" max="15"
                                step="0.1">
                            <input value="15"
                                class="form-control boot-input-text bootOutlineBorder bootOutlineBorderValue "
                                type="text">
                            <label for="bootBorderColorPicker-2" style="display:flex;margin-left:15px">
                                <img src="./image/colorpkr.png"
                                    style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;"
                                    alt="Italian Trulli">
                                <input type="color" class="bootBorder_ColorPicker"
                                    style="opacity:0;height:0px;width:0px;padding:0; margin:0;position:relative;"
                                    id="bootBorderColorPicker-2">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="list-group-item"
                    style="justify-content: space-between;display:flex;flex-wrap:wrap;border-top-left-radius:4px;border-top-right-radius:4px">
                    <button class="btn  boot-rounded-btn ffffff" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#ffffff',this);"></button>
                    <button class="btn  boot-rounded-btn gray" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#808080',this);"></button>
                    <button class="btn  boot-rounded-btn darkgray" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#545454',this);"></button>
                    <button class="btn  boot-rounded-btn black" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#000000',this);"></button>
                    <button class="btn  boot-rounded-btn dopely" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#6d4c41',this);"></button>
                    <button class="btn  boot-rounded-btn ed5f1e" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#ed5f1e',this);"></button>
                    <button class="btn  boot-rounded-btn orange" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#f39c12',this);"></button>
                    <button class="btn  boot-rounded-btn yellow" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#ffd230',this);"></button>
                    <button class="btn  boot-rounded-btn greenblue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#307d7e',this);"></button>
                    <button class="btn  boot-rounded-btn deepgreen" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#008037',this);"></button>
                    <button class="btn  boot-rounded-btn navyblue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#000080',this);"></button>
                    <button class="btn  boot-rounded-btn blue" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#0000ff',this);"></button>
                    <button class="btn  boot-rounded-btn purple" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#800080',this);"></button>
                    <button class="btn  boot-rounded-btn brown" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#a52a2a',this);"></button>
                    <button class="btn  boot-rounded-btn red" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#ff0000',this);"></button>
                    <button class="btn  boot-rounded-btn a83232" style="width:3rem; height:3rem"
                        onclick="bootSetCSS(undefined,undefined,undefined,undefined,'#fe00a1',this);"></button>

                    <label for="bootBackgroundColorPkr">
                        <img src="./image/colorpkr.png"
                            style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;" alt="Italian Trulli">
                        <input type="color" class="boot-color-picker" id="bootBackgroundColorPkr">
                    </label>
                </div>
            </div>
        </div>
    </div>

</div>