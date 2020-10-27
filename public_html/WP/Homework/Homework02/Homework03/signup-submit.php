<?php include("header.html"); ?>
    <pre>
        Thank you
        Welcome to NerdLuv, <?= $_POST['name'] ?>!
        Now <a href="matches.php">log in to see your matches!</a>
    </pre>
<?php
  function printInfo($name, $gender, $age, $ptype,$OS,$minage,$maxage){
   return("$name,$gender,$age,$ptype,$OS,$minage,$maxage,MF");
  }

$file = 'singles.txt';
    $current = printInfo($_POST["name"],$_POST["gender"],$_POST["age"],$_POST["ptype"],$_POST["OS"],$_POST["minage"],$_POST["maxage"]);

   file_put_contents($file,$current,FILE_APPEND);
  file_put_contents($file,"\n",FILE_APPEND);
?>
<?php include("footer.html"); ?>
