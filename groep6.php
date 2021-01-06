
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>RekenWebsite</title>
    <link rel="stylesheet" type="text/css" href="stijl.css?ver=<?php echo filemtime('stijl.css');?>">

    <style>
        .title{
            margin-bottom: 10px;
            text-align:center;
            width: 210px;
            color: indigo;
            border: solid black 2px;


        }

        .button
        {
            background-color:firebrick;
            color: black;
            border: solid black 2px;
            width:100%
        }

        .text
        {
            background-color:white;
            border: solid black 2px;
            width:100%
        }

        .rekenmachine{
            width: 212px;
            height: 320px;
            margin-left: 1100px;
            float-left;
            float-right;
            border: 2px solid black;

        }

    </style>
</head>
<body>
<script>
    function playAudio(url) {
        new Audio(url).play();
    }

    function dis(val)
    {
        document.getElementById("result").value+=val
    }


    function solve()
    {
        let x = document.getElementById("result").value
        let y = eval(x)
        document.getElementById("result").value = y
    }


    function clr()
    {
        document.getElementById("result").value = ""
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
                    <h2 class="card-title">  Oefensommen Groep 6</h2>
                    <hr />
                </fieldset>

            </div>
        </div>
    </div>


    <?php

    error_reporting(0);

    session_start();

    $digit1 = mt_rand( -90000000, 90000000);
    $digit2 = mt_rand( -90000000, 90000000);
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

    <form method="POST" action="page26.php">
        wat is <?php echo $math; ?> = <input name="answer" type="text" /><br />
        <input type="submit" value="versturen" />
    </form>

    <div class="rekenmachine">

        <div class = title >De Splinter rekenmachine</div>
        <table border="1">
            <tr>
                <td colspan="3"><input class="text" type="text" id="result"/></td>

                <td><input class="button" type="button" value="c" onclick="clr()"/> </td>
            </tr>
            <tr>

                <td><input class="button" type="button" value="1" onclick="dis('1')"/> </td>
                <td><input class="button" type="button" value="2" onclick="dis('2')"/> </td>
                <td><input class="button"type="button" value="3" onclick="dis('3')"/> </td>
                <td><input class="button" type="button" value="/" onclick="dis('/')"/> </td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="4" onclick="dis('4')"/> </td>
                <td><input class="button" type="button" value="5" onclick="dis('5')"/> </td>
                <td><input class="button" type="button" value="6" onclick="dis('6')"/> </td>
                <td><input class="button" type="button" value="-" onclick="dis('-')"/> </td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="7" onclick="dis('7')"/> </td>
                <td><input class="button" type="button" value="8" onclick="dis('8')"/> </td>
                <td><input class="button" type="button" value="9" onclick="dis('9')"/> </td>
                <td><input class="button" type="button" value="+" onclick="dis('+')"/> </td>
            </tr>
            <tr>
                <td><input class="button" type="button" value="." onclick="dis('.')"/> </td>
                <td><input class="button" type="button" value="0" onclick="dis('0')"/> </td>

                <td><input class="button" type="button" value="=" onclick="solve()"/> </td>
                <td><input class="button" type="button" value="*" onclick="dis('*')"/> </td>
            </tr>
        </table>

    </div>
</body>

</html>