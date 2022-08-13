<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./boot.css" />

    <!-- jQuery & javascript CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container boot-card">
        <div class="boot-icons">
            <div class="boot-icon-centered">
                <span id="boot-icon" class='bi bi-facebook' style='font-size:10rem'></span>
            </div>
        </div>


        <div class="panel  boot-card-wrapper">
            <div class="panel-body" style="border: 1px solid rgba(0,0,0,.125);border-radius:5px">
                <?php
                                      readfile("./bootColorFirstRow.php");
                                    ?>
                <?php
                                    readfile("./bootSecondRow.php")
                                    ?>
                <?php
                                    readfile("./bootThirdRow.php")
                                    ?>


            </div>

        </div>

    </div>
    <script src="./boot.js"></script>
</body>

</html>