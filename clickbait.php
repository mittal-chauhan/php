<?php
    define("TITLE", "Honest Click Bait Headlines");
    include("functions.php");
    if ( isset( $_POST["fix_submit"] ) ) {
        //call function
        checkForClickBait();
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo TITLE; ?></title>

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lte IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="container">
            <h1> <?php echo TITLE; ?> </h1>
            <p class="lead">Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program. </p>

            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste clickbait headline here" class="form-control input-lg" name="clickbait_headline"></textarea><br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
                </form>
            </div>

            <?php

            if ( isset ( $_POST["fix_submit"] ) ) {
                
                $clickBait = checkForClickBait()[0];
                $honestHeadline = checkForClickBait()[1];
                
                displayHonestHeadline( $clickBait, $honestHeadline );
            }


            ?>

        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


    </body>

</html>