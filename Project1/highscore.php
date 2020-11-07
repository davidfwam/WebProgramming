<!DOCTYPE html>
<html>

<head>
    <title>IQTEST</title>
    <meta charset="utf-8" />
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body class="highscore">
    <div id="bannerarea">
        <img class="animated-gif" src="tenor.gif" <br>
        Highscores!
    </div>


    <?php
    include('./database.php');
    $users = get_all_users();
    $names = $users[0];
    $scores = $users[1];
    
    // save_user("maria", 2)
    // print_r(get_user_points("claudio"));
    ?>
    <style>
        /* {
        box-sizing: border-box;
    } */
        /* Set additional styling options for the columns*/
        .column {
            float: left;
            width: 50%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
    </head>
    <div class="row">
        <div class="column">
            <h2>Name</h2>
            <p>
                <?php
                foreach ($names as $name) {
                    echo $name . "<br/>";
                }
                ?>
            </p>
        </div>
        <div class="column">
            <h2>Scores</h2>
            <p>
                <?php
                foreach ($scores as $score) {
                    echo $score . "<br/>";
                }
                ?>
        </div>
    </div>
    <br><br><br><br>
    <a style="text-align: center; display: block;" href="index.php">
        <img class="non" src="homeicon.jpeg" />
    </a>
</body>

</html>