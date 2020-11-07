<?php include("header.php"); 
?>
    <form action="end4.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #4</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        Identify two words (one from each set of brackets) that have a connection
(analogy) with the words in capitals and relate to them in the same way.
<br>
<br>
SEA (wet, swimmer, ship) <br>
SNOW (mountain, ice, skier)
        </p>
        <p> <input name="q" type="radio" value="A"> A. ice, ship</p>
        <p> <input name="q" type="radio" value="B"> B. swimmer, ship</p>
        <p> <input name="q" type="radio" value="C"> C. swimmer, skier</p>
        <p> <input name="q" type="radio" value="D"> D. mountain, ice</p>
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