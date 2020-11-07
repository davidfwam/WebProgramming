<?php include("header.php");
if(isset($_POST["name"])){
    setcookie("name", $_POST["name"], time() + (86400 * 30), "/");
}
?>
    <form action="r1q2.php" method="POST">
    <!-- <form action="update.php" method="POST"> -->
    <fieldset>
        <legend>Round #1</legend>
        <br>
        <strong class="panel" name="count" value="0">Question #1</strong><br>
        <p style="text-align: left;">
        Book is to Reading as Fork is to:<br><br>
        </p>
        <p> <input name="q" type="radio" value="A"> A. drawing</p>
        <p> <input name="q" type="radio" value="B"> B. writing </p>
        <p> <input name="q" type="radio" value="C"> C. stirring</p>
        <p> <input name="q" type="radio" value="D"> D.
        eating </p>
        <input name="name" type="hidden" value=<?php if(isset($_COOKIE["name"])){echo $_COOKIE["name"];} ?>>
        <input name="score" type="hidden" value=<?php if(isset($_POST["score"])){echo $_POST["score"];} else{echo 0;} ?>>
        <!-- <p> <input name="uid" type="hidden" value="137273"> </p> -->
        <?php if(isset($_POST['q']) && $_POST['q'] == "D"):?>
        <?php elseif (!empty($_POST['q'])): print("Try Again");?>
        <?php endif; ?>
        <input type="submit" value="Submit" class="submitbutton">

        <br><br> 
    </fieldset>
    </form>
<?php include("footer.html"); ?>
