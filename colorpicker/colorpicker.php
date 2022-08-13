<html>

<head>
    <link href="./colorpicker.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</head>

<body>
<div class="container">
<svg width="110" height="110" id="selectedBox">
  <rect width="100"   height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
</svg> 
        <p > <span id="textColor">Brown</span> Color</p>
        <div class="grid-Wrapper">
            <button class="btn rounded-btn brown active" onclick="ColorPicker('brown',this);">A</button>
            <button class="btn rounded-btn red" onclick="ColorPicker('red',this);">B</button>
            <button class="btn rounded-btn green" onclick="ColorPicker('green',this);">C</button>
            <button class="btn rounded-btn blue" onclick="ColorPicker('blue',this);">D</button>
            <button class="btn rounded-btn purple" onclick="ColorPicker('purple',this);">E</button>
            <button class="btn rounded-btn yellow" onclick="ColorPicker('yellow',this);">F</button>
            <button class="btn rounded-btn orange" onclick="ColorPicker('orange',this);">G</button>
            <button class="btn rounded-btn cyan" onclick="ColorPicker('cyan',this);">H</button>
            <button class="btn rounded-btn grey" onclick="ColorPicker('grey',this);">I</button>
        </div>
        
    </div>
  </body>
<script src="./colorpicker.js"></script>

</html>