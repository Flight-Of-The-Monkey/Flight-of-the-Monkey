<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contacten</title>
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
    <a href="index.php">home</a>
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
                    <h3 class="card-title">Contacten</h3>
                    <hr />
                    <img src="bestanden/foto_3.jpg" alt="foto van kinderen op school" WIDTH="600" HEIGHT="420" STYLE="float: right;">
                    <h5>  Adres:               Schoolstraat 10 6666AA Nederland   </h5>          <br />
                    <h5>  TelefoonNummer:       024-9999123       </h5>                            <br />
                    <h5>  kamer van koophandel: 12344412EUG-NL01      </h5>                      <br />


                <div class="email">

                    <form method="post" action="contact.php">
                        <label>naam:</label>
                        <br />
                        <input name="sender">
                        <br />
                        <label>Email address:</label>
                        <br />
                        <input name="senderEmail">
                        <br />
                        <label>Bericht:</label>
                        <br />
                        <textarea rows="5" cols="20" name="message"></textarea>
                        <br />
                        <button onclick="myFunction()">versturen</button>

                        <p id="demo"></p>



                        <script>
                            function myFunction() {
                                alert("Dank u! Uw bericht is verzonden!");
                            }
                        </script>



                    </form>
                </div>

                </fieldset>

            </div>
        </div>
    </div>



</body>

</html>