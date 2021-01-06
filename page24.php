<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>RekenWebsite</title>
    <link rel="stylesheet" type="text/css" href="stijl.css?ver=<?php echo filemtime('stijl.css');?>">

</head>
<body>
<script>
    function playAudio(url) {
        new Audio(url).play();
    }
</script>


<div class="sidenav">



    <img src="bestanden/logo.jpg" alt="logo de splinter" WIDTH="95" HEIGHT="100" class="pica" onclick="playAudio('Initial D Spitfire normal.mp3')">
    <h4 class="slogan"> Kennis is voor de mens! </h4>
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
                    <h2 class="card-title">  Oefensommen Groep 4</h2>
                    <hr />
                </fieldset>

            </div>
        </div>
    </div>


    <?php

    error_reporting(0);

    session_start();

    echo "jij hebt ingevuld ".htmlentities($_POST['answer'])." het is ";

    if ($_SESSION['answer'] == $_POST['answer'] )
        echo 'correct';
    if  ($_SESSION['answer'] == $_POST['answer'] )
           echo '<form method="POST" action="snake.php">
                 <input type="submit" value="snake game" >
                 </form>  ';

    else
        echo 'FOUT. we verwachten '.$_SESSION['answer'];

    ?>
    <form method="post" action="groep4.php">
        <input type="submit" value="volgende vraag">
    </form>


</body>

</html>