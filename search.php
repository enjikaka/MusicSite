<?php
	$script="searchFunctions.js";
	$title="Search";
	//$slimbox = TRUE;
	//$jquery = TRUE;

	include("incl/header.php");
?>
	<div id="content">
	<h1>Search among artists and songs!</h1>
	<hr>
	<form action="search.php" method="post" name="frmsearch">
		<fieldset>
			<legend>Song and/or Artist</legend>
			<input type="text" id="txtsearch" name="txtSearch" title="Song and/or Artist!" required="required" placeholder="Type Artist or Song and press Search!" size="35" autofocus="autofocus"/><br />
			<button type="submit" id="btnsearch" name="btnSearch">Search</button>
			<button type="reset" id="btnreset" name="btnReset">Reset</button>
		</fieldset>
	</form>
	<!-- Hårdkodad HTML5 för utsökning av song -->
	<fieldset>
		<legend>Searchresult Song</legend>
		<!-- Wheels.ogg -->
		<div data-comments="comments" data-id="22">
			<p>
				<b>2013-10-22:</b>
				<i>Wheels är bäst!</i>
			</p>
			<p>
				<b>2013-09-27:</b>
				<i>Bästa låten någonsin!</i>
			</p>
		</div>

		<form action="#" method="post" name="frmcomment" data-id="22">
			<fieldset>
				<legend>Comment on wheels.ogg</legend>
				<textarea name="txtComment" cols="40" rows="10" title='Comment' required="required" placeholder="Write your comment!"></textarea><br />
				<input type="hidden" name="hidId" value="22" />
				<input type="submit" name="btnSave" value="Save" />
				<input type="reset" name="btnReset" value="Reset" />
			</fieldset>
		</form>

		<a href="#" data-id="22">Like wheels.ogg</a>
		<p>
			Title: Wheels<br>
			Song: wheels.ogg<br>
			Count: <span data-id="22">6</span>
			<br>
			<audio controls="controls">
				<source src="upload_ogg/wheels.ogg">
				Din webbläsare stödjer inte audio-taggen!
			</audio>
			<br>
		</p>
		<hr>
		<!-- colors.ogg -->
		<div data-comments="comments" data-id="23">
			<p>
				<b>2013-11-01:</b>
				<i>Colors är bäst!</i>
			</p>

			<p>
				<b>2013-11-02:</b>
				<i>Detta är bästa låten någonsin!</i>
			</p>
		</div>

		<form action="#" method="post" name="frmcomment" data-id="23">
			<fieldset>
				<legend>Comment on colors.ogg</legend>
				<textarea name="txtComment" cols="40" rows="10" title='Comment' required="required" placeholder="Write your comment!"></textarea><br />
				<input type="hidden" name="hidId" value="23">
				<input type="submit" name="btnSave" value="Save">
				<input type="reset" name="btnReset" value="Reset">
			</fieldset>
		</form>
		<a href="#" data-id="23">Like Colors.ogg</a>
		<p>
			Title: Colors<br>
			Song: colors.ogg<br>
			Count: <span data-id="23">6</span>
			<br>
			<audio controls="controls">
				<source src="upload_ogg/colors.ogg">
				Din webbläsare stödjer inte audio-taggen!
			</audio>
			<br>
		</p>
		<hr>
	</fieldset>

	<!-- Hårdkodad HTML5 för utsökning av artist -->
	<fieldset>
		<legend>Searchresult Artist</legend>
			Name: AC/DC	<br>
			<img src="upload_jpg/acdc.jpg" alt="Picture of AC/DC"><br>
			Name: Laleh<br>
			<img src="upload_jpg/laleh.jpg" alt="laleh.jpg"><br>
	</fieldset>
	<br>
</div>

<?php include("incl/footer.php");