<?php include("header.php"); 
?>
    <form action="end2.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #2</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        If it takes 5 machines 5 minutes to make 5 widgets, how long would it take 100 machines to make 100 widgets?
        </p>
        <p> <input name="q" type="radio" value="A"> A. 4 minutes</p>
        <p> <input name="q" type="radio" value="B"> B. 5 minutes</p>
        <p> <input name="q" type="radio" value="C"> C. 1 minute</p>
        <p> <input name="q" type="radio" value="D"> D. 50 minutes</p>
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