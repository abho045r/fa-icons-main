<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./material.css">
</head>

<body>
    <div class="container material-card">
        <div class="material-icon">
           
            <span class="material-icons" id="materialIcon" style="font-size:200px"> home</span>
        </div>
        <div class="panel" id="container" style="border:1px solid #ddd;padding:10px">
            <?php
            readfile("./shapesBtn.php")
           ?>
            <?php
          readfile("./firstRowColor.php")
          ?>
            <?php
          readfile("./secondRow.php")
          ?>
            <?php
          readfile("thirdRow.php")
          ?>
        </div>
    </div>

    <script src="./material.js"></script>
</body>

</html>