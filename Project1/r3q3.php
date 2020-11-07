<?php include("header.php"); 
?>
    <form action="end3.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #3</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        Which number is the odd one out?
        </p>
        <p> <input name="q" type="radio" value="A"> A. 9678</p>
        <p> <input name="q" type="radio" value="B"> B. 5261</p>
        <p> <input name="q" type="radio" value="C"> C. 3527</p>
        <p> <input name="q" type="radio" value="D"> D. 6895</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'A') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <!-- <p> <input name="uid" type="hidden" value="137273"> </p> -->
        <input type="submit" value="Submit" class="submitbutton">
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>