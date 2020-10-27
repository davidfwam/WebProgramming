<?php include("header.html"); ?>
<div>
  <form action="matches-submit.php" method="get">
    <fieldset>
      <legend> Returning User: </legend>
<div>
            <strong class="panel"> Name: </strong>
            <input type="text" name="name" maxlength="16">
            <br><br>
</div>
            <input type="submit" value="View My Matches" class="submitbutton" style="width: 11em;" >
        </fieldset>
    </form>
</div>

<?php include("footer.html"); ?>
