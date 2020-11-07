<?php include("header.php"); 
?>
    <form action="end6.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #6</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        Find five consecutive numbers below that total 22.
7 3 9 6 4 1 3 7 9 3 5 4 1 7 6 5
        </p>
        <p> <input name="q" type="radio" value="A"> A. 93541</p>
        <p> <input name="q" type="radio" value="B"> B. 93545</p>
        <p> <input name="q" type="radio" value="C"> C. 93441</p>
        <p> <input name="q" type="radio" value="D"> D. 93765</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'D') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <!-- <p> <input name="uid" type="hidden" value="137273"> </p> -->
        <input type="submit" value="Submit" class="submitbutton">
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>