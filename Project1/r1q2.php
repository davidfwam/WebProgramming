<?php include("header.php"); 
?>
    <form action="r1q3.php" method="POST">
    <form action="highscore.php" method="POST">
    <fieldset>
        <legend>Round #1</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #2</strong><br>
        <p style="text-align: left;">
        Which of the following can be arranged into a 5-letter English word?<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. H R G S T</p>
        <p> <input name="q" type="radio" value="B"> B. R I L S A</p>
        <p> <input name="q" type="radio" value="C"> C. T O O M Z T</p>
        <p> <input name="q" type="radio" value="D"> D. W Q R G S</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'D') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <input type="submit" value="Submit" class="submitbutton">
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>

        <input type="submit" name="endRun" value="END" style="background-image: url('nexticon.png');" />
        <?php include("database.php");
        if(isset($_POST['endRun'])){
            save_user($_POST["name"], $_POST["score"]);
            echo "TESTTESTTEST";
            exit();
        }
?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>


