<?php include("header.php"); 
?>
    <form action="r4q2.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #4</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #1</strong><br>
        <p style="text-align: left;">
        Isotherm is to temperature as isobar is to: atmosphere, wind, pressure, latitude,
current<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. Oxidation</p>
        <p> <input name="q" type="radio" value="B"> B. Related</p>
        <p> <input name="q" type="radio" value="C"> C. Conected</p>
        <p> <input name="q" type="radio" value="D"> D. Pressure</p>
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