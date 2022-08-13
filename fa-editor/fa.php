     <!DOCTYPE html>
     <html>

     <head>
         <!-- Cdn Font awesome -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
             integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
             crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
         <link rel='stylesheet'
             href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

         <!-- bootstrap cdn -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="./fa.css" />
         <!--Jquery & javascript-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     </head>

     <body>


         <div class="card fa-card-1">
             <div class="card-body fa-main-icon">
                 <div id="old_parent" class="icons">
                     <i id="old_child" style="font-size:100px" class='fa fa-braille'></i>


                 </div>
             </div>
             <div class="card fa-card-wrapper">
                 <div class="card-body">
                     <?php
                    readfile("./faVersionBtn.php") 
                    ?>
                     <?php
                        include("./firstRow.php");
                         ?>
                     <?php
                         include("./secondRow.php")
                         ?>
                     <?php
                         include("./thirdRow.php")
                         ?>
                     <?php
                        include("./fourthRow.php")
                        ?>
                 </div>

             </div>
         </div>



         <script src="./fa.js"></script>
     </body>

     </html>