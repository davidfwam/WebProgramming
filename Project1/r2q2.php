<?php include("header.php"); 
?>
    <form action="r2q3.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #2</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #2</strong><br>
        <p style="text-align: left;">
        A bat and a ball together cost $1.10. The bat costs $1 more than the ball. How much does the ball cost?<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. $0.80</p>
        <p> <input name="q" type="radio" value="B"> B. $0.10</p>
        <p> <input name="q" type="radio" value="C"> C. $0.50</p>
        <p> <input name="q" type="radio" value="D"> D. $0.05</p>
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