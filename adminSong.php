<?php
	$script="songFunctions.js";
	$title="Admin song";
	//$accordion = TRUE;
	//$jquery = TRUE;
	//$admin = "secretpage";

	include("incl/header.php");
?>
<div id="content">
	<h1>Admin Song</h1>
	<hr>
	<!-- Hårdkodad HTML5 för Admin Song -->
	<fieldset>
		<legend>New/Edit Song</legend>
		<span id="jsErrorMsg" class="errorClass"></span>

		<form action="adminSong.php" method="post" id="frmNewUpdateSong" name="frmNewUpdateSong" enctype="multipart/form-data">
			<input type="hidden" id="hidId" name="hidId">
			<input type="hidden" id="hidSoundFileName" name="hidSoundFileName">

			<label for="selArtistId">Artist</label><br>
			<select id="selArtistId" name="selArtistId" title="Artist" autofocus="autofocus">
				<option value="0">Choose Artist</option>
				<option value="76">AC/DC</option>
				<option value="77">Laleh</option>
			</select><br>

			<label for="txtTitle">Song</label>
			<input type="text" id="txtTitle" name="txtTitle" title="Title">
			<br>

			<label for="fileSoundFileName">Sound</label><br>
			<input type="file" id="fileSoundFileName" name="fileSoundFileName" title="File"><br>

			<label for="txtCount">Count</label><br>
			<input type="text" id="txtCount" name="txtCount" title="Count"><br>

			<button type="submit" id="btnSave">Save</button>
			<button type="reset" id="btnReset">Reset</button>
		</form>
	</fieldset>

	<form action="adminSong.php" method="post" name="frmSong">
		id: 22<br>
		title: Wheels<br>
		sound: Wheels.ogg<br>
		count: 10<br>
		changedate: 2013-09-27 08:58:09<br>

		<input type="hidden" name="hidId" value="22">
		<input type="hidden" name="hidArtistId" value="76">
		<input type="hidden" name="hidTitle" value="Wheels">
		<input type="hidden" name="hidSoundFileName" value="Wheels.ogg">
		<input type="hidden" name="hidCount" value="10">

		<audio controls="controls">
			<source src="upload_ogg/Wheels.ogg">
			Your browser does not support the audio tag!
		</audio>
		<br>

		<button name="btnEdit">Edir</button>
		<button type="submit" name="btnDelete">Delete</button>
	</form>

	<hr>

	<form action="adminSong.php" method="post" name="frmSong">
		id: 23<br>
		title: Colors<br>
		sound: colors.ogg<br>
		count: 100<br>
		changedate: 2013-09-27 08:58:09<br>

		<input type="hidden" name="hidId" value="23">
		<input type="hidden" name="hidArtistId" value="77">
		<input type="hidden" name="hidTitle" value="Colors">
		<input type="hidden" name="hidSoundFileName" value="colors.ogg">
		<input type="hidden" name="hidCount" value="100">

		<audio controls="controls">
			<source src="upload_ogg/colors.ogg">
			Your browser does not support the audio tag!
		</audio>
		<br>

		<button name="btnEdit">Edir</button>
		<button type="submit" name="btnDelete">Delete</button>
	</form>
</div>

<?php include("incl/footer.php"); ?>