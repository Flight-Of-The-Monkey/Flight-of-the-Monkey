
!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>RekenWebsite</title>
    <link rel="stylesheet" href="stijl.css">

</head>
<body>
<script>
    function playAudio(url) {
        new Audio(url).play();
    }
</script>


<div class="sidenav">



    <img src="bestanden/logo.jpg" alt="logo de splinter" WIDTH="95" HEIGHT="100" class="pica" onclick="playAudio('Initial D Spitfire normal.mp3')">
    <a href="rekenwebsite.php">home</a>
    <a href="info.php">info</a>
    <a href="oefenen.php">oefenen</a>
    <a href="contact.php">contact</a>
</div>

<div class="main">

    <div class="container col-md-3 left-column">
        <div class="card">
            <div class="card-body">
                <fieldset>
                    <hr />
                    <h2 class="card-title">  Oefensommen Groep 6</h2>
                    <hr />
                </fieldset>

            </div>
        </div>
    </div>


    <?php


    $getal1 = rand ();

    $getal2 = rand ();


    $randomScore = rand(1,4); // random score between 0-4
    switch ($randomScore) {

        case 1:
            $uitkomst = $getal1 * $getal2;
            echo "hoeveel is $getal1 * $getal2";
            echo "<br/>";
            break;
        case 2:
            $uitkomst = $getal1 / $getal2;
            echo "hoeveel is $getal1 / $getal2";
            break;
        case 3:
            $uitkomst = $getal1 + $getal2;
            echo "hoeveel is $getal1 + $getal2";
            break;
        case 4:
            $uitkomst = $getal1 - $getal2;
            echo "hoeveel is $getal1 - $getal2";
            break;
    }

    echo "<br />";
    echo $uitkomst;

    ?>

    <form action="" method="POST">
        <input name="answer" type="text">
        <input type="button" value="check" onclick="return updateTable();">
    </form>


<?php

if ( isset( $_POST['check'] )) {

    $answer = $_POST["answer"];
}

    switch ($answer){

        case $answer == $uitkomst :
            echo "Goed Gedaan";
        break;

        case $answer != $uitkomst :
            echo "Fout";
        break;

    }
?>

    <form>
        <input type="button" value="volgende vraag">
    </form>

</body>

</html>