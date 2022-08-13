<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./tab.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="svg-card">
        <div class="icon">
            <svg id="IconChangeColor" transform="scale(1,1)" xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                <path id="mainIconPathAttribute"
                    d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z" />
                <path id="mainIconPathAttribute"
                    d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282z" />
            </svg>
        </div>
        <div class="list-group-item">
            <?php
            readfile("./svgColor.php");
               ?>
            <?php
            readfile("./secondRow.php");
               ?>
            <?php
            readfile("./thirdRow.php");
               ?>
        </div>



        <div class="row">

            <div class="">
                <details open>
                    <summary>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <hr>
                    </summary>
                    <div class="details-info">

                        <div class="row">
                            <div class="col ">

                            </div>

                            <div class="col">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col ">
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle mainicon-shadowbtn" href="#" role="button"
                                        id="Add_shadow" data-mdb-toggle="dropdown" aria-expanded="false">
                                        icon shadow
                                    </a>
                                    <div class="dropdown-menu icon-shadow-menu" aria-labelledby="Add_shadow">
                                        <div class="col">
                                            <div class="row">
                                                <fieldset class="dx_fieldset">
                                                    <legend class="dx_legend">dx</legend>
                                                    <input type="range" min="-1.5" step="0.1" max="1.5" id="dx">
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="dy_fieldset">
                                                    <legend class="dy_legend">dy</legend>
                                                    <input type="range" id="dy" step="0.1" min="-1.5" max="1.5" />
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="opacity_fieldset">
                                                    <legend class="opacity_legend">Opacity</legend>
                                                    <input type="range" id="stdDeviation" min="0" step="0.1" max="1" />
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <input class="btn shadow_colrpkr" type="color"
                                                    onclick="shadowColor(this.value)" id="shadowColorInput"
                                                    name="favcolor" value="#ff0000" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col">
                                <div class="btn-group mainIcon-group" role="group"
                                    aria-label="Button group with nested dropdown">
                                    <button type="button" id="SPIN" class="btn  btn-outline-primary mainIcon-group-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" zoomAndPan="magnify"
                                            viewBox="0 0 750 749.999995" height="24" preserveAspectRatio="xMidYMid meet"
                                            version="1.0">
                                            <defs>
                                                <path
                                                    d="M 66 88.160156 L 682 88.160156 L 682 661.910156 L 66 661.910156 Z M 66 88.160156 "
                                                    clip-rule="nonzero" />
                                            </defs>
                                            <g>
                                                <path fill="#0000ff"
                                                    d="M 264.167969 88.15625 C 165.671875 115.046875 107.71875 216.371094 136.421875 319.007812 C 138.839844 241.109375 204.816406 174.695312 286.933594 173.066406 L 264.171875 88.15625 Z M 514.433594 97.988281 L 278.269531 506.894531 C 154.457031 464.324219 82.722656 333.703125 111.464844 211.449219 C 23.355469 360.257812 68.273438 542.53125 206.660156 630.875 L 206.554688 631.0625 L 211.660156 634.011719 C 213.53125 635.15625 215.410156 636.296875 217.316406 637.410156 L 217.375 637.304688 L 227.558594 643.1875 L 463.175781 235.238281 C 591.042969 275.359375 665.863281 408.4375 636.609375 532.859375 C 726.949219 380.289062 677.464844 192.515625 530.757812 106.902344 L 530.535156 107.285156 L 514.429688 97.988281 Z M 608.734375 431.03125 C 606.320312 508.929688 540.339844 575.34375 458.222656 576.96875 L 480.984375 661.878906 C 579.484375 634.992188 637.4375 533.664062 608.734375 431.03125 Z M 608.734375 431.03125 "
                                                    fill-opacity="1" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button type="button" id="HorizontalFLIP"
                                        class="btn  btn-outline-primary  mainIcon-group-btn"><svg width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 7C18.5523 7 19 7.44772 19 8V16C19 16.5523 18.5523 17 18 17H15V19H18C19.6569 19 21 17.6569 21 16V8C21 6.34315 19.6569 5 18 5H15V7H18Z"
                                                fill="currentColor" fill-opacity="0.5"></path>
                                            <path d="M13 3H11V21H13V3Z" fill="currentColor"></path>
                                            <path
                                                d="M5 8C5 7.44772 5.44772 7 6 7H9V5H6C4.34315 5 3 6.34315 3 8V16C3 17.6569 4.34315 19 6 19H9V17H6C5.44772 17 5 16.5523 5 16V8Z"
                                                fill="currentColor"></path>
                                        </svg></button>
                                    <button type="button" id="VerticalFLIP"
                                        class="btn  btn-outline-primary  mainIcon-group-btn"><svg width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18C17 18.5523 16.5523 19 16 19L8 19C7.44772 19 7 18.5523 7 18L7 15L5 15L5 18C5 19.6569 6.34315 21 8 21L16 21C17.6569 21 19 19.6569 19 18V15L17 15V18Z"
                                                fill="currentColor" fill-opacity="0.5" />
                                            <path
                                                d="M16 5C16.5523 5 17 5.44772 17 6V9H19V6C19 4.34315 17.6569 3 16 3L8 3C6.34315 3 5 4.34315 5 6V9H7V6C7 5.44772 7.44772 5 8 5L16 5Z"
                                                fill="currentColor" />
                                            <path d="M21 13V11L3 11V13H21Z" fill="currentColor" />
                                        </svg></button>

                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                            class="btn  btn-outline-primary  mainIcon-group-btn dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="19"
                                                zoomAndPan="magnify" viewBox="0 0 750 749.999995" height="19"
                                                preserveAspectRatio="xMidYMid meet" version="1.0">
                                                <defs>
                                                    <path
                                                        d="M 44.703125 37.5 L 724.953125 37.5 L 724.953125 688.5 L 44.703125 688.5 Z M 44.703125 37.5 "
                                                        clip-rule="nonzero" />
                                                </defs>
                                                <g>
                                                    <path fill="#0000ff"
                                                        d="M 370.316406 621.101562 C 227.761719 621.101562 112.199219 505.539062 112.199219 362.992188 C 112.199219 220.445312 227.761719 104.882812 370.316406 104.882812 C 481.375 104.882812 575.964844 175.066406 612.371094 273.464844 L 563.90625 273.464844 L 644.382812 388.179688 L 724.863281 273.457031 L 683.210938 273.457031 C 644.308594 137.257812 519.019531 37.5 370.316406 37.5 C 190.535156 37.5 44.796875 183.222656 44.796875 362.992188 C 44.796875 542.769531 190.535156 688.5 370.316406 688.5 C 489.65625 688.5 593.898438 624.238281 650.550781 528.460938 L 587.546875 502.121094 C 541.65625 573.632812 461.589844 621.101562 370.316406 621.101562 Z M 370.316406 621.101562 "
                                                        fill-opacity="1" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            Rotate
                                        </button>

                                        <ul class="dropdown-menu rotationMenu" aria-labelledby="btnGroupDrop1">
                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(0)"><i
                                                                class='fa fa-rotate-45'></i> 0°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(45)">
                                                            45°</a></li>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(90)"><i
                                                                class='fa fa-rotate-45'></i> 90°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(135)">135°</a>
                                                    </li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(180)">180°</a>
                                                    </li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(225)">225°</a>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(315)"><i
                                                                class='fa fa-rotate-45'></i>315° </a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="mainIconRotate(360)">360°</a>
                                                    </li>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </details>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card-2">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active apto-trigger-dropdown" id="ex1-tab-1" data-mdb-toggle="tab"
                        href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">

                        <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32"
                            style="enable-background:new 0 0 32 32;" xml:space="preserve">
                            <circle fill="blue" cx="11.5" cy="11.5" r="8.5" />
                            <polyline fill="blue" points="20,13 29,13 29,29 13,29 13,20 " />
                        </svg>
                        <span class="btn-txt"> shapes</span></a>
                </li>

            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex1-content">
                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <div id="svgList">
                        <?php
             include("svgList.php");
             ?>
                    </div>
                    <div class="grid-Wrapper">
                        <div class="row">
                            <div class="col ">
                                <button class="btn Remove-btn" id="RemoveShapeBtn">Remove Shape</button>
                            </div>
                            <div class="col">
                                <div class="pagination-table" id="pagination"></div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="background-colorBtn">
                                    <button class="btn background-rounded-btn ffffff active"
                                        onclick="ColorPicker('#ffffff',this);"></button>
                                    <button class="btn background-rounded-btn gray"
                                        onclick="ColorPicker('#737373',this);"></button>
                                    <button class="btn background-rounded-btn black"
                                        onclick="ColorPicker('#000000',this);"></button>
                                    <button class="btn background-rounded-btn red"
                                        onclick="ColorPicker('#ff0000',this);"></button>
                                    <button class="btn background-rounded-btn yellow"
                                        onclick="ColorPicker('yellow',this);"></button>
                                    <button class="btn background-rounded-btn orange"
                                        onclick="ColorPicker('orange',this);"></button>
                                    <button class="btn background-rounded-btn green"
                                        onclick="ColorPicker('green',this);"></button>
                                    <button class="btn background-rounded-btn blue"
                                        onclick="ColorPicker('blue',this);"></button>
                                    <button class="btn background-rounded-btn purple"
                                        onclick="ColorPicker('purple',this);"></button>
                                    <button class="btn background-rounded-btn barkturquoise"
                                        onclick="ColorPicker('#03989e',this);"></button>
                                    <button class="btn background-rounded-btn razzmatazz"
                                        onclick="ColorPicker('#ff006a',this);"></button>
                                    <input class="btn background-rounded-btn" type="color" onclick="bgFillClrPkr()"
                                        id="bgFillPicker" name="favcolor" value="#ff0000" placeholder="H">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <fieldset>
                                    <legend>Size</legend>
                                    <input class="size-range" type="range" id="sizeChange" value="200" step="1" min="1"
                                        max="200">
                                    <input type="text" id="background_sizeValue" value="200"
                                        class="background-size-input" />
                                </fieldset>
                            </div>

                            <div class="col">
                                <fieldset class="bg-stroke-field">
                                    <legend class="bg-stroke-legend">Stroke</legend>
                                    <input class="background-stroke-range" type="range" id="bgStrokeChange" value="5"
                                        step="0.1" min="1" max="10">
                                    <input type="text" id="bgStrokeValue" value="5" class="background-stroke-input" />
                                    <input class="btn rounded-btn background-stroke-colorPicker" type="color"
                                        onclick="backgroundStrokeClr(this.value);" id="strokePicker" value="#727272" />
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle mainicon-shadowbtn" href="#" role="button"
                                        id="BG_shadow" data-mdb-toggle="dropdown" aria-expanded="false">
                                        shapes shadow
                                    </a>
                                    <div class="dropdown-menu icon-shadow-menu" aria-labelledby="BG_shadow">
                                        <div class="col">
                                            <div class="row">
                                                <fieldset class="dx_fieldset">
                                                    <legend class="dx_legend">dx</legend>
                                                    <input type="range" min="-15" step="1" max="15" id="bg_dx">
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="dy_fieldset">
                                                    <legend class="dy_legend">dy</legend>
                                                    <input type="range" id="bg_dy" step="01" min="-15" max="15" />
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <fieldset class="opacity_fieldset">
                                                    <legend class="opacity_legend">Opacity</legend>
                                                    <input type="range" id="bgStdDeviation" min="0" step="0.1"
                                                        max="20" />
                                                </fieldset>
                                            </div>
                                            <div class="row">
                                                <input class="btn shadow_colrpkr" type="color"
                                                    onclick="bgShadowColor(this.value)" id="bgShadowColorInput"
                                                    name="favcolor" value="#ff0000" placeholder="H">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="btn-group background-group" role="group"
                                    aria-label="Button group with nested dropdown">
                                    <button type="button" id="backgroundSpin"
                                        class="btn btn-outline-primary background-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24" zoomAndPan="magnify"
                                            viewBox="0 0 750 749.999995" height="24" preserveAspectRatio="xMidYMid meet"
                                            version="1.0">
                                            <defs>
                                                <path
                                                    d="M 66 88.160156 L 682 88.160156 L 682 661.910156 L 66 661.910156 Z M 66 88.160156 "
                                                    clip-rule="nonzero" />
                                            </defs>
                                            <g>
                                                <path fill="#0000ff"
                                                    d="M 264.167969 88.15625 C 165.671875 115.046875 107.71875 216.371094 136.421875 319.007812 C 138.839844 241.109375 204.816406 174.695312 286.933594 173.066406 L 264.171875 88.15625 Z M 514.433594 97.988281 L 278.269531 506.894531 C 154.457031 464.324219 82.722656 333.703125 111.464844 211.449219 C 23.355469 360.257812 68.273438 542.53125 206.660156 630.875 L 206.554688 631.0625 L 211.660156 634.011719 C 213.53125 635.15625 215.410156 636.296875 217.316406 637.410156 L 217.375 637.304688 L 227.558594 643.1875 L 463.175781 235.238281 C 591.042969 275.359375 665.863281 408.4375 636.609375 532.859375 C 726.949219 380.289062 677.464844 192.515625 530.757812 106.902344 L 530.535156 107.285156 L 514.429688 97.988281 Z M 608.734375 431.03125 C 606.320312 508.929688 540.339844 575.34375 458.222656 576.96875 L 480.984375 661.878906 C 579.484375 634.992188 637.4375 533.664062 608.734375 431.03125 Z M 608.734375 431.03125 "
                                                    fill-opacity="1" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button type="button" id="backgroundHorizontalFLIP"
                                        class="btn btn-outline-primary background-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18 7C18.5523 7 19 7.44772 19 8V16C19 16.5523 18.5523 17 18 17H15V19H18C19.6569 19 21 17.6569 21 16V8C21 6.34315 19.6569 5 18 5H15V7H18Z"
                                                fill="currentColor" fill-opacity="0.5"></path>
                                            <path d="M13 3H11V21H13V3Z" fill="currentColor"></path>
                                            <path
                                                d="M5 8C5 7.44772 5.44772 7 6 7H9V5H6C4.34315 5 3 6.34315 3 8V16C3 17.6569 4.34315 19 6 19H9V17H6C5.44772 17 5 16.5523 5 16V8Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </button>
                                    <button type="button" id="backgroundVerticalFLIP"
                                        class="btn btn-outline-primary background-btn">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17 18C17 18.5523 16.5523 19 16 19L8 19C7.44772 19 7 18.5523 7 18L7 15L5 15L5 18C5 19.6569 6.34315 21 8 21L16 21C17.6569 21 19 19.6569 19 18V15L17 15V18Z"
                                                fill="currentColor" fill-opacity="0.5" />
                                            <path
                                                d="M16 5C16.5523 5 17 5.44772 17 6V9H19V6C19 4.34315 17.6569 3 16 3L8 3C6.34315 3 5 4.34315 5 6V9H7V6C7 5.44772 7.44772 5 8 5L16 5Z"
                                                fill="currentColor" />
                                            <path d="M21 13V11L3 11V13H21Z" fill="currentColor" />
                                        </svg>
                                    </button>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button"
                                            class="btn btn-outline-primary background-btn dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="19"
                                                zoomAndPan="magnify" viewBox="0 0 750 749.999995" height="19"
                                                preserveAspectRatio="xMidYMid meet" version="1.0">
                                                <defs>
                                                    <path
                                                        d="M 44.703125 37.5 L 724.953125 37.5 L 724.953125 688.5 L 44.703125 688.5 Z M 44.703125 37.5 "
                                                        clip-rule="nonzero" />
                                                </defs>
                                                <g>
                                                    <path fill="#0000ff"
                                                        d="M 370.316406 621.101562 C 227.761719 621.101562 112.199219 505.539062 112.199219 362.992188 C 112.199219 220.445312 227.761719 104.882812 370.316406 104.882812 C 481.375 104.882812 575.964844 175.066406 612.371094 273.464844 L 563.90625 273.464844 L 644.382812 388.179688 L 724.863281 273.457031 L 683.210938 273.457031 C 644.308594 137.257812 519.019531 37.5 370.316406 37.5 C 190.535156 37.5 44.796875 183.222656 44.796875 362.992188 C 44.796875 542.769531 190.535156 688.5 370.316406 688.5 C 489.65625 688.5 593.898438 624.238281 650.550781 528.460938 L 587.546875 502.121094 C 541.65625 573.632812 461.589844 621.101562 370.316406 621.101562 Z M 370.316406 621.101562 "
                                                        fill-opacity="1" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            Rotate
                                        </button>

                                        <ul class="dropdown-menu rotationMenu" aria-labelledby="btnGroupDrop1">
                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(0)"><i
                                                                class='fa fa-rotate-45'></i> 0°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(45)"> 45°</a></li>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(90)"><i
                                                                class='fa fa-rotate-45'></i> 90°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(135)">135°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(180)">180°</a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(225)">225°</a></li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(315)"><i
                                                                class='fa fa-rotate-45'></i>315° </a></li>
                                                </div>
                                                <div class="col">
                                                    <li><a class="dropdown-item" onclick="Rotate(360)">360°</a></li>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    tab 2 content
                </div>
                <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                    Tab 3 content
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="./backgroundList.js"></script>
<script src="./tab.js"></script>

</html>