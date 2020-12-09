<!DOCTYPE html>
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
                    <h2 class="card-title">  Oefensommen Groep 5</h2>
                    <hr />
                </fieldset>

            </div>
        </div>
    </div>

    <?php

    session_start();

    $digit1 = mt_rand(0,100);
    $digit2 = mt_rand(0,100);
    if( mt_rand(0,3) === 0 ) {
        $math = "$digit1 + $digit2";
        $_SESSION['answer'] = $digit1 + $digit2;
    } elseif( mt_rand(0,3) === 1 ) {
        $math = "$digit1 - $digit2";
        $_SESSION['answer'] = $digit1 - $digit2;
    }
    elseif( mt_rand(0,3) === 2 ) {
        $math = "$digit1 * $digit2";
        $_SESSION['answer'] = $digit1 * $digit2;
    }
    else {
        $math = "$digit1 / $digit2";
        $_SESSION['answer'] = $digit1 / $digit2;
    }

    ?>

    <form method="POST" action="page2.php">
        Wat is <?php echo $math; ?> = <input name="answer" type="text" /><br />
        <input type="submit" />
    </form>




</body>

</html>