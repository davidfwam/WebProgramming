<?php include("header.php"); 
?>
    <form action="end1.php" method="POST">
    <form action="highscore.php" method="POST">
    <fieldset>
        <legend>Round #1</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        8:4 as 10:<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. 3</p>
        <p> <input name="q" type="radio" value="B"> B. 7</p>
        <p> <input name="q" type="radio" value="C"> C. 24</p>
        <p> <input name="q" type="radio" value="D"> D. 5</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'B') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <input type="submit" value="Submit" class="submitbutton"> 
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>

