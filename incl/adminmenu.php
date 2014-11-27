<?php
  $s = explode('.',explode('/', $_SERVER['PHP_SELF'])[2])[0];
?>

<li><a href="adminArtist.php" <?php
if ($s == 'adminArtist') echo 'class="active"';
?>>Admin Artist</a></li>
<li><a href="adminSong.php"<?php
if ($s == 'adminSong') echo 'class="active"';
?>>Admin Song</a></li>
<li><a href="adminComment.php" <?php
if ($s == 'adminComment') echo 'class="active"';
?>>Admin Comment</a></li>
<li><a href="logout.php">Logout</a></li>