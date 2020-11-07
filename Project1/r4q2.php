<?php include("header.php"); 
?>
    <form action="r4q3.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #4</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #2</strong><br>
        <p style="text-align: left;">
        Identify two words (one from each set of brackets) that have a connection
(analogy) with the words in capitals and relate to them in the same way.
<br>
<br>
GRAM (energy, weight, scales)<br>
KNOT (water, rope, speed)
        </p>
        <p> <input name="q" type="radio" value="A"> A. weight, scales</p>
        <p> <input name="q" type="radio" value="B"> B. water, speed</p>
        <p> <input name="q" type="radio" value="C"> C. energy, scales</p>
        <p> <input name="q" type="radio" value="D"> D. weight, speed</p>
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