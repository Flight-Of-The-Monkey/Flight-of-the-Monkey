
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
    session_start();

    echo "You entered ".htmlentities($_POST['answer'])." which is ";

    if ($_SESSION['answer'] == $_POST['answer'] )
        echo 'correct';
    if  ($_SESSION['answer'] == $_POST['answer'] )
        echo '<form method="POST" action="snake6.php">
                 <input  type="submit" value="snake game" >
                 </form>  ';
    else
        echo 'wrong. We expected '.$_SESSION['answer'];

    ?>

    <form method="post" action="groep6.php">
        <input type="submit" value="volgende vraag">
    </form>

</body>

</html>