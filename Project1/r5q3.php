<?php include("header.php"); 
?>
    <form action="end5.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #5</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #3</strong><br>
        <p style="text-align: left;">
        10, 30, 32, 96, 98, 294, 296, ?, ? <br>             
        What two numbers should replace the question marks?
        </p>
        <p> <input name="q" type="radio" value="A"> A. 777, 790</p>
        <p> <input name="q" type="radio" value="B"> B. 888, 890</p>
        <p> <input name="q" type="radio" value="C"> C. 850, 852</p>
        <p> <input name="q" type="radio" value="D"> D. 800, 456</p>
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