<?php
define("TITLE", "PHP Arrays");
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
        <h1><?php echo TITLE; ?></h1>

        <?php
             //associative arrays
             $people = array(
                 "username" => "mittaichauan",
                 "fullname" => "Mittai Chauan",
                 "age" => 17,
                 "gender" => "female",
                 "country" => "India"
             );

             echo $people["username"] . "<br>";
             echo $people["fullname"] . "<br>";
             echo $people["age"] . "<br>";
             echo $people["gender"] . "<br>";
             echo $people["country"] . "<br>";

             $emploees = array( // 0 index

                array(
                    "username" => "mittaichauan",
                    "fullname" => "Mittai Chauan",
                    "age" => 17,
                    "gender" => "female",
                    "country" => "India"
                ),
                array( //index 1
                    "username" => "sammychauan",
                    "fullname" => "Sammy Chauan",
                    "age" => 17,
                    "gender" => "male",
                    "country" => "India"
                )

             );
             echo "<hr>","<br>";
             echo $emploees[0]["fullname"];
             echo "<hr>","<br>";
             echo $emploees[1]["fullname"];
        ?>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>