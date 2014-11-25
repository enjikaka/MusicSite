<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="style/stilmall.css" rel="stylesheet">
    <?php
      if(isset($accordion)) {
		?>
    <link rel="stylesheet" href="jquery-ui-1.11.1.custom/jquery-ui.css" />
		<?php
      }
      if(isset($slimbox)) {
    ?>
      <link rel="stylesheet" href="slimbox2/css/slimbox2.css" />
    <?php
      }
    ?>
    <title><?php echo($title); ?></title>
    <script src="jquery/jquery-2.1.1.js" defer></script>
  </head>
<body>
<div id="wrapper">
<header>My MusicSite</header>
<div id="main">