<div id="group-btn" class="btn-group btn-group-justified">
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse1" aria-expanded="false">Box Shadow <span
            class="caret"></span></a>
    <a class="btn btn-primary" data-toggle="collapse" href="#collapse2" aria-expanded="false">Icon Shadow <span
            class="caret"></span></a>
    <a class="btn btn-primary" aria-expanded="false" id="outlineShape" data-toggle="collapse" href="#collapse3">Border
        <span class="caret"></span></a>
    <a class="btn btn-primary" id="filledShape" data-toggle="collapse" href="#collapse4"
        aria-expanded="false">Background <span class="caret"></span></a>
    <a class="btn btn-primary" id="fa-horizontal-flip" data-toggle="collapse">
        H flip</a>
    <a class="btn btn-primary" id="fa-vertical-flip" data-toggle="collapse">V flip</a>
    <a class="btn btn-primary" onclick="addClass('fa-spin',this)" data-toggle="collapse">Spin</a>
    <a class="btn btn-primary" onclick="addClass('fa-beat',this)" data-toggle="collapse">Beat</a>
    <a class="btn btn-primary" onclick="addClass('fa-fade',this)" data-toggle="collapse">Fade</a>
</div>
<div id="accordion">
    <div class="panel panel-default">
        <div id="collapse1" class="panel-collapse collapse " data-parent="#accordion" aria-expanded="true">
            <div class="panel-body" style="padding-bottom:0">
                <div class="setting">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="border-style">
                                <p>X offset</p>
                                <label>
                                    <input id="Xoffset" style="width:100%" type="range" min="-20" max="20" step="0.1" />
                                    <input value="5" id="xOffsetValue" class="form-control fa-input-text" type="text">
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="border-style">
                                <p>Y offset</p>
                                <label>
                                    <input id="Yoffset" style="width:100%" type="range" min="-20" max="20" step="0.1" />
                                    <input value="5" id="yOffsetValue" class="form-control fa-input-text" type="text">
                                </label>
                            </div>

                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <div class="border-style">
                                <p>Blur</p>
                                <label>
                                    <input id="blur-radius" style="width:100%" type="range" min="0" max="10"
                                        step="0.1" />
                                    <input value="5" id="blurRadiusValue" class="form-control fa-input-text"
                                        type="text">
                                </label>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="border-style">
                                <p>Spread</p>
                                <label>
                                    <input id="spread-radius" style="width:100%" type="range" min="0" max="10"
                                        step="0.1" />
                                    <input value="4" id="spreadRadiusValue" class="form-control fa-input-text"
                                        type="text">
                                </label>
                            </div>

                        </div>
                        <div class=" col-sm-4">
                            <div
                                style="padding:1.5rem;align-items: center;;justify-content:space-around;border-radius:4px;display:flex;border:1px solid #dadce0;">
                                <label class="" for="picker-5">
                                    <img src="./image/colorpkr.png" style="border-radius:1.1rem;" class="fa-input-text"
                                        alt="Italian Trulli">
                                    <input type="color" class="fa-color-picker" id="picker-5" name="favcolor"
                                        value="#ff0000">
                                </label>

                                <span class="">
                                    <input class="form-check-input" type="checkbox" value="" id="inset-radius" />
                                    <label class="form-check-label" for="flexCheckDefault">inset </label>

                                </span>
                                <a class="btn btn-default" id="shadowReset"> Reset
                                </a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="collapse2" class="panel-collapse collapse" data-parent="#accordion" aria-expanded="true" style="">
            <div class="panel-body" style="padding-bottom:0">
                <div class="iconSetting">
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="border-style">
                                <p>X offset</p>
                                <label>
                                    <input id="iconXoffset" style="width:100%" type="range" min="-20" max="20"
                                        step="0.1">
                                    <input value="5" id="iconXOffsetValue" class="form-control fa-input-text"
                                        type="text">
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border-style">
                                <p>Y offset</p>
                                <label>
                                    <input id="iconYoffset" style="width:100%" type="range" min="-20" max="20"
                                        step="0.1">
                                    <input value="5" id="iconYOffsetValue" class="form-control fa-input-text"
                                        type="text">
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border-style">
                                <p>Blur</p>
                                <label>
                                    <input id="icon-blur-radius" style="width:100%" type="range" min="0" max="20"
                                        step="0.1">
                                    <input value="5" id="iconBlurRadiusValue" class="form-control fa-input-text"
                                        type="text">
                                    <label for="picker-6" style="border:none;padding:0;margin-left:15px">
                                        <img src="./image/colorpkr.png" class="fa-input-text"
                                            style="border-radius:1.1rem;" alt="Italian Trulli">
                                        <input type="color" class="fa-color-picker" id="picker-6" name="favcolor"
                                            value="#ff0000">
                                    </label>
                                </label>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-default" id="IconShadowReset">Reset</a>



                </div>
            </div>
        </div>
        <div id="collapse3" class="panel-collapse collapse" data-parent="#accordion" aria-expanded="false"
            style="height: 0px;">
            <div class="panel-body" style="padding-bottom:0;">
                <div class="btn-group btn-group-justified" role="group" aria-label="Button group with nested dropdown"
                    style="margin-bottom:15px;">
                    <a type="button" class="btn  btn-default" onclick="setBorderStyle('solid',this)">
                        Solid
                    </a>
                    <a type="button" class="btn  btn-default" onclick="setBorderStyle('dotted',this)">
                        Dotted
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('dashed',this)">
                        Dashed
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('double',this)">
                        Double
                    </a>
                    <a type="button" class="btn  btn-default" onclick="setBorderStyle('groove',this)">
                        Groove
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('ridge',this)">
                        Ridge
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('inset',this)">
                        inset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('outset',this)">
                        outset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('hidden',this)">
                        hidden
                    </a>
                </div>
                <div class="row" style="margin-bottom:5px">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="border-style">
                            <p>Padding</p>
                            <label>
                                <input id="iconPadding" style="width:100%" type="range" min="0" max="50" step="1">
                                <input value="0" id="iconPaddingValue" class="form-control fa-input-text" type="text">
                            </label>
                        </div>
                    </div>
                    <div class=" col-sm-4">
                        <div class="border-style">
                            <p>Radius</p>
                            <label>
                                <input id="iconRadius" style="width:100%" type="range" min="1" max="50" step="1">
                                <input value="100" id="iconRadiusValue" class="form-control fa-input-text" type="text">
                            </label>
                        </div>
                    </div>
                    <div class=" col-sm-4 ">
                        <div class="border-style">
                            <p>Border</p>
                            <label>
                                <input id="outlineStroke" style="width:100%" type="range" value="5" min="1" max="15"
                                    step="1">
                                <input value="5" id="outlineStrokeValue" class="form-control fa-input-text" type="text">
                            </label>
                        </div>
                    </div>
                </div>
                <div style="justify-content: space-between;display:flex;flex-wrap:wrap">
                    <button class="btn  fa-rounded-btn ffffff" style="width:3rem;height:3rem"
                        onclick="setBorderColor('#ffffff',this);"></button>
                    <button class="btn  fa-rounded-btn gray" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#808080',this);"></button>
                    <button class="btn  fa-rounded-btn darkgray" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#545454',this);"></button>
                    <button class="btn  fa-rounded-btn black" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#000000',this);"></button>
                    <button class="btn  fa-rounded-btn ed5f1e" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#ed5f1e',this);"></button>
                    <button class="btn  fa-rounded-btn orange" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#f39c12',this);"></button>
                    <button class="btn  fa-rounded-btn yellow" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#ffd230',this);"></button>
                    <button class="btn  fa-rounded-btn deepgreen" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#008037',this);"></button>
                    <button class="btn  fa-rounded-btn navyblue" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#000080',this);"></button>
                    <button class="btn  fa-rounded-btn blue" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#0000ff',this);"></button>
                    <button class="btn  fa-rounded-btn purple" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#800080',this);"></button>
                    <button class="btn  fa-rounded-btn brown" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#a52a2a',this);"></button>
                    <button class="btn  fa-rounded-btn red" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#ff0000',this);"></button>
                    <button class="btn  fa-rounded-btn a83232" style="width:3rem; height:3rem"
                        onclick="setBorderColor('#fe00a1',this);"></button>
                    <label for="borderColorPkr" style="margin:3px">
                        <img src="./image/colorpkr.png"
                            style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;" alt="Italian Trulli">
                        <input type="color" style="opacity:0;height:0;width:0;padding:0; margin:0;position:relative;"
                            id="borderColorPkr">
                    </label>
                </div>



            </div>
        </div>
        <div id="collapse4" class="panel-collapse collapse" data-parent="#accordion" aria-expanded="false"
            style="height: 0px;">
            <div class="panel-body" style="padding-bottom:0">
                <div class="btn-group btn-group-justified" style="margin-bottom:15px" role="group"
                    aria-label="Button group with nested dropdown">
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('solid',this)">
                        Solid
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('dotted',this)">
                        Dotted
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('dashed',this)">
                        Dashed
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('double',this)">
                        Double
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('groove',this)">
                        Groove
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('ridge',this)">
                        Ridge
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('inset',this)">
                        inset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('outset',this)">
                        outset
                    </a>
                    <a type="button" class="btn btn-default" onclick="setBorderStyle('hidden',this)">
                        Hidden
                    </a>
                </div>
                <div class="row" style="margin-bottom:5px">
                    <div class="col-sm-4">
                        <div class="border-style">
                            <p>Padding</p>
                            <label>
                                <input id="backgroundPadding" style="width:100%" type="range" min="1" max="50" step="1">
                                <input value="25" id="backgroundPaddingValue" class="form-control fa-input-text"
                                    type="text">
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-style">
                            <p>Radius</p>
                            <label>
                                <input id="backgroundRadius" style="width:100%" type="range" min="1" max="50" step="1">
                                <input value="25" id="backgroundRadiusValue" class="form-control fa-input-text"
                                    type="text">
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-style">
                            <p>Border</p>
                            <label>
                                <input id="backgroundStroke" value="15" style="width:100%" type="range" min="0" max="15"
                                    step="0.1">
                                <input value="15" id="backgroundStrokeValue" class="form-control fa-input-text"
                                    type="text">
                                <label for="backgroundBorderColor"
                                    style="border:none;margin-bottom:0;margin-left:15px;padding:0">
                                    <img src="./image/colorpkr.png"
                                        style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;"
                                        alt="Italian Trulli">
                                    <input type="color" style="opacity:0;height:0px;width:0px;"
                                        id="backgroundBorderColor">
                                </label>
                            </label>
                        </div>
                    </div>
                </div>
                <div style="justify-content: space-between;display:flex;flex-wrap:wrap">
                    <button class="btn  fa-rounded-btn ffffff" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#ffffff',this);"></button>
                    <button class="btn  fa-rounded-btn gray" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#808080',this);"></button>
                    <button class="btn  fa-rounded-btn darkgray" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#545454',this);"></button>
                    <button class="btn  fa-rounded-btn black" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#000000',this);"></button>
                    <button class="btn  fa-rounded-btn ed5f1e" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#ed5f1e',this);"></button>
                    <button class="btn  fa-rounded-btn orange" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#f39c12',this);"></button>
                    <button class="btn  fa-rounded-btn yellow" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#ffd230',this);"></button>
                    <button class="btn  fa-rounded-btn deepgreen" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#008037',this);"></button>
                    <button class="btn  fa-rounded-btn navyblue" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#000080',this);"></button>
                    <button class="btn  fa-rounded-btn blue" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#0000ff',this);"></button>
                    <button class="btn  fa-rounded-btn purple" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#800080',this);"></button>
                    <button class="btn  fa-rounded-btn brown" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#a52a2a',this);"></button>
                    <button class="btn  fa-rounded-btn red" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#ff0000',this);"></button>
                    <button class="btn  fa-rounded-btn a83232" style="width:3rem; height:3rem"
                        onclick="backgroundColorPkr('#fe00a1',this);"></button>
                    <label for="backgroundColorPkr" style="margin:3px">
                        <img src="./image/colorpkr.png"
                            style="box-shadow: 0px 0px 2px 0px black; height:30px;width:30px;" alt="Italian Trulli">
                        <input type="color" style="opacity:0;height:0;width:0;" id="backgroundColorPkr">
                    </label>
                    <a class="btn btn-default" id="removeShape"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>