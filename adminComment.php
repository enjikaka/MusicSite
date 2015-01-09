<?php
	$script = "commentFunctions.js";
	$title = "Admin comment";
	$accordion = true;
	$jquery = true;
	//$admin = "secretpage";

	include("incl/header.php");
?>

	<div id="content">
		<h1>Admin - Handle Comments</h1>
    <h2>Comments</h2>
    <?php

    if (isset($_POST['hidId'])) {
      echo 'Removing comment with id: ' . $_POST['hidId'];
    }

    ?>
		<div id="comments-accordion">
  		<!-- Hårdkodad HTML5 för Admin Comment -->
      <h3 id="c58">Comment #58</h3>
      <div>
    		<form action="adminComment.php" method="post" name="frmComment">
    			id: 58<br>
    			songid: 22<br>
    			text: hahahah<br>
    			insertdate: 2013-10-22 11:27:48<br>
    			<input type="hidden" name="hidId" value="58">
    			<input type="hidden" name="hidText" value="hahahah">
    			<button type="submit" name="btnDelete">Delete</button>
    		</form>
      </div>
      <h3 id="c57">Comment #57</h3>
      <div>
    		<form action="adminComment.php" method="post" name="frmComment">
    			id: 57<br>
    			songid: 22<br>
    			text: Bästa låten...<br>
    			insertdate: 2013-09-27 08:58:55<br>
    			<input type="hidden" name="hidId" value="57">
    			<input type="hidden" name="hidText" value="Bästa låten...">
    			<button type="submit" name="btnDelete">Delete</button>
    		</form>
      </div>
      <h3 id="c56">Comment #56</h3>
      <div>
        <form action="adminComment.php" method="post" name="frmComment">
          id: 56<br>
          songid: 22<br>
          text: hahahah2<br>
          insertdate: 2013-11-25 12:27:48<br>
          <input type="hidden" name="hidId" value="56">
          <input type="hidden" name="hidText" value="hahahah2">
          <button type="submit" name="btnDelete">Delete</button>
        </form>
      </div>
    </div>
	</div>

<?php include("incl/footer.php");