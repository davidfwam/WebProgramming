<?php include("header.html");

$singles = file("singles.txt");
// get current user
for ($count = 0; $count < count($singles); $count++) {
    $uid = explode(",", $singles[$count]);
    if($uid[0] === $_GET["name"]){
    $current = $uid;
    }
}
  //  $current = explode(",", $uid);
    $uGender = $current[1];
    $uAge = (int)$current[2];
    $uPtype = $current[3];
    $uOS = $current[4];
    $uMin = (int)$current[5];
    $uMax = (int)$current[6];
    $allmatches=0;
?>
<div>
<?php

for ($count = 0; $count < count($singles); $count++) {
    $alternative = $singles[$count];
    $altinfo = explode(",", $alternative);
    $aGender = $altinfo[1];
    $aAge = (int)$altinfo[2];
    $aPtype = $altinfo[3];
    $aOS = $altinfo[4];
    $aMin = (int)$altinfo[5];
    $aMax = (int)$altinfo[6];
    $sim = (int)similar_text($aPtype, $uPtype, $perc);

    if($aGender !== $uGender && $aOS === $uOS && $uMin <= $aAge && $aAge <= $uMax && $aMin <= $uAge && $uAge <= $aMax && $sim > 1){
    $allmatches=$allmatches+1;
?>
        <strong>Matches for <?= $_GET["name"] ?></strong><br>

  <div class="match">
      <img src="profilepic.JPG" alt="photo"/>
      <div>
          <ul>
              <li><p><?= $altinfo[0] ?></p></li>
              <li><strong>gender:</strong> <?= $aGender ?></li>
              <li><strong> age:</strong> <?= $aAge ?> </li>
              <li><strong> type:</strong> <?= $aPtype ?> </li>
              <li><strong> OS:</strong> <?= $aOS ?></li>
          </ul>
      </div>
  </div>
<?php
}
}
?>
</div>

<?php
if (count($allmatches) === 0) {
?>
<div> No match is found. </div>
<?php
}
include("footer.html"); ?>
