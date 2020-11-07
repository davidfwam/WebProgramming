<?php include("header.php"); 
?>
    <form action="r5q3.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #5</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #2</strong><br>
        <p style="text-align: left;">
        Alf has four times as many as Jim, and Jim has three times as many as Sid.
        Altogether they have 192. How many has each?
        </p>
        <p> <input name="q" type="radio" value="A"> A. Alf 144, Jim 36, Sid 12;</p>
        <p> <input name="q" type="radio" value="B"> B. Alf 104, Jim 30, Sid 25;</p>
        <p> <input name="q" type="radio" value="C"> C. Alf 134, Jim 29, Sid 52;</p>
        <p> <input name="q" type="radio" value="D"> D. Alf 125, Jim 39, Sid 18;</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = 0; if(isset($_POST["q"]) && $_POST["q"] == 'B') {$newScore = $_POST["score"] + 1; $currScore = $newScore; echo $newScore;} else{$currScore = $_POST["score"]; echo $_POST["score"];} ?>>
        <!-- <p> <input name="uid" type="hidden" value="137273"> </p> -->
        <input type="submit" value="Submit" class="submitbutton">
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>