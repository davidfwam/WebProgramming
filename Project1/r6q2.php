<?php include("header.php"); 
?>
    <form action="r6q3.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #5</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #2</strong><br>
        <p style="text-align: left;">
        A man has 53 socks in his drawer: 21 identical blue, 15 identical black and 17
identical red. The lights are fused and he is completely in the dark. How many
socks must he take out to make 100 per cent certain he has a pair of black socks?
        </p>
        <p> <input name="q" type="radio" value="A"> A. 50 socks</p>
        <p> <input name="q" type="radio" value="B"> B. 30 socks</p>
        <p> <input name="q" type="radio" value="C"> C. 45 socks</p>
        <p> <input name="q" type="radio" value="D"> D. 40 socks</p>
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