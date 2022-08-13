<html>

<head>
    <link href="./rounded.css" rel="stylesheet" />
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
    <svg width="400" height="110" id="selectedBox">
  <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
</svg>
        <p > <span id="textColor">Brown</span> Color</p>
          <div class="grid-Wrapper">
            <button class="btn circle-btn brown active" onclick="ColorPicker('brown',this);"></button>
            <button class="btn circle-btn red" onclick="ColorPicker('red',this);"></button>
            <button class="btn circle-btn green" onclick="ColorPicker('green',this);"></button>
            <button class="btn circle-btn blue" onclick="ColorPicker('blue',this);"></button>
            <button class="btn circle-btn purple" onclick="ColorPicker('purple',this);"></button>
            <button class="btn circle-btn yellow" onclick="ColorPicker('yellow',this);"></button>
            <button class="btn circle-btn orange" onclick="ColorPicker('orange',this);"></button>
            <button class="btn circle-btn cyan" onclick="ColorPicker('cyan',this);"></button>
            <button class="btn circle-btn grey" onclick="ColorPicker('grey',this);"></button>
            <button class="btn circle-btn pink" onclick="ColorPicker('pink',this);"></button>

        </div>

    </div>
</body>
<script src="./rounded.js"></script>

</html>