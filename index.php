<?php

require_once __DIR__ . "/movie.php";

$fnf = new Movie(
    "Fast and Furious",
    "Rob Cohen",
    "Lorem Ipsum",
    "2001",
);

$interstellar = new Movie(
    "Interstellar",
    "Cristopher Nolan",
    "Lorem Ipsum",
    "2014",
);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    
    <div>
        <h1> <?php echo $fnf->title ?> </h1>
        <p> <?php echo $fnf->director ?> </p>
        <p> <?php echo $fnf->description ?> </p>
        <p> <?php echo $fnf->year ?> </p>
    </div>

    <div>
        <h1> <?php echo $interstellar->title ?> </h1>
        <p> <?php echo $interstellar->director ?> </p>
        <p> <?php echo $interstellar->description ?> </p>
        <p> <?php echo $interstellar->year ?> </p>
    </div>


</body>
</html>