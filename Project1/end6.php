<?php include("header.php"); ?>
    <form action="highscore.php" method="POST">
    <fieldset>
    <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'A') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <legend>Round #5</legend>
        <br>
        <p style="text-align: left;">
        Congratulation on completing Round #5! Click below see all the highscores!<br><br>
        
        </p>
        <p>Current score: <?php 
        include('./database.php');
        save_user($_POST["name"], $currScore);
        echo $currScore ?></p>
        
        <input type="submit" value="See high-scores!" style="display: flex; align-items: center; justify-content: center;" class="submitbutton">
        <br><br>
      </fieldset>
    </form>
<?php include("footer.html"); ?>