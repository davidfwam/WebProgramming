<?php include("header.php"); ?>
    <form action="r6q1.php" method="POST">
    <fieldset>
    <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'B') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <legend>Round #5</legend>
        <br>
        <p style="text-align: left;">
        Congratulation on completing Round #5! Click below to move onto the next round!<br><br>
        
        </p>
        <p>Current score: <?php echo $currScore ?></p>
        
        <input type="submit" value="Next round" style="display: flex; align-items: center; justify-content: center;" class="submitbutton">
        <br><br>
      </fieldset>
    </form>
<?php include("footer.html"); ?>