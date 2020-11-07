<?php include("header.php"); 
?>
    <form action="r6q2.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #5</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #1</strong><br>
        <p style="text-align: left;">
        Which is the only one of the following that is not an anagram of a word
meaning out of this world?<br><br>
flow under<br>
sexed Utah<br>
enviable blue<br>
icier blend<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. wonderful
(flow under), unbelievable (enviable blue), incredible (icier blend); </p>
        <p> <input name="q" type="radio" value="B"> B. awsome
(flow under), incredible (enviable blue), excelent (icier blend); </p>
        <p> <input name="q" type="radio" value="C"> good
(flow under), perfect (enviable blue), sad (icier blend); </p>
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