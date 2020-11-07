<?php include("header.php"); 
?>
    <form action="r2q2.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #2</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #1</strong><br>
        <p style="text-align: left;">
        Which number should come next in the pattern? 37, 34, 31, 28<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. 30</p>
        <p> <input name="q" type="radio" value="B"> B. 24</p>
        <p> <input name="q" type="radio" value="C"> C. 20</p>
        <p> <input name="q" type="radio" value="D"> D. 25</p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php $currScore = $_POST["score"]; echo $_POST["score"];?>>
        <!-- <p> <input name="uid" type="hidden" value="137273"> </p> -->
        <input type="submit" value="Submit" class="submitbutton">
        <?php  
        echo "<p>Current score: " . $currScore . "</p>";
        ?>
        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>
