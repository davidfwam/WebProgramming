<?php include("header.html"); ?>
    <form action="signup-submit.php" method="POST">
    <fieldset>
        <legend>New User Signup:</legend>
        <br>

        <strong class="panel"> Name: </strong>
        <input type="text" name="name" size="11" maxlength="16">
        <br><br>

        <strong class="panel">Gender:</strong>
        <input type="radio" name="gender" value="M">Male
        <input type="radio" name="gender" value="F" checked>Female
        <br><br>

        <strong class="panel">Age:</strong>
        <input type="text" name="age" size="6" maxlength="2"><br><br>

        <strong class="panel">Personality Type:</strong>

        <input type="text" name="ptype" size="6" maxlength="4">
        <a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp"> (Don't know your type?)</a>
        <br><br>

        <strong class="panel">Favorite OS:</strong>
        <select name="OS">
            <option value="Windows" selected>Windows</option>
            <option value="Mac OS X">Mac OS X</option>
            <option value="Linux"> Linux</option>
        </select>
        <br><br>

        <strong class="panel">Seeking age:</strong>
        <input type="text" name="minage" size="6" maxlength="2" placeholder="min"> to
        <input type="text" name="maxage" size="6" maxlength="2" placeholder="max">
        <br><br>

        <input type="submit" value="Sign Up" class="submitbutton">
    </fieldset>
    </form>

<?php include("footer.html"); ?>
