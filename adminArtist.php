<?php
  $script="artistFunctions.js";
  $title="Admin Artist";
  $accordion = TRUE;
  $jquery = TRUE;
  //$admin = "secretpage";

  include("incl/header.php");
?>
<div id="content">
  <h1>Artists</h1>
  <!-- Hårdkodad HTML5 för Admin Artist -->

  <?php

  if (isset($_POST['hidId'])) {
    echo 'Saving artist: ' . $_POST['hidId'];
  }

  ?>

  <fieldset>
    <legend>New/Edit Artist</legend>
    <span id="jsErrorMsg" class="errorClass"></span>

    <form action="adminArtist.php" method="post" name="frmNewUpdateArtist" id="frmNewUpdateArtist" enctype="multipart/form-data">
      <input type="hidden" id="hidId" name="hidId">
      <input type="hidden" id="hidPictureFileName" name="hidPictureFileName">

      <label for="txtArtist">Artist</label><br>
      <input type="text" id="txtArtist" name="txtArtist" title="Artist"><br>

      <label for="filePictureFileName">Picture</label>
      <input type="file" id="filePictureFileName" name="filePictureFileName" title="Picture"><br>

      <button type="submit" id="btnSave" name="btnSave">Save</button>
      <button type="reset" id="btnReset" name="btnReset">Reset</button>
    </form>
  </fieldset>

  <div id="songs-accordion">
    <h3 id="s76">AC/DC (#76)</h3>
    <div>
      <form action="adminArtist.php" method="post" name="frmArtist">
        id: 76<br>
        name: AC/DC<br>
        picture: acdc.jpg<br>
        changedate: 2013-09-25 11:36:46<br>
        <img src="upload_jpg/acdc.jpg." alt="Pictore of AC/DC" class="imgAnimation"><br>

        <button name="btnEdit">Edit</button>
        <button type="submit" name="btnDelete">Delete</button>

        <input type="hidden" name="hidId" value="76">
        <input type="hidden" name="hidPictureFileName" value="acdc.jpg">
        <input type="hidden" name="hidArtist" value="AC/DC">
      </form>
    </div>
    <h3 id="s77">Laleh (#77)</h3>
    <div>
      <form action="adminArtist.php" method="post" name="frmArtist">
        id: 77<br>
        name: Laleh<br>
        picture: laleh.jpg<br>
        changedate: 2013-09-25 11:36:46<br>
        <img src="upload_jpg/laleh.jpg." alt="Picture of Laleh" class="imgAnimation"><br>

        <button name="btnEdit">Edit</button>
        <button type="submit" name="btnDelete">Delete</button>

        <input type="hidden" name="hidId" value="77">
        <input type="hidden" name="hidPictureFileName" value="laleh.jpg">
        <input type="hidden" name="hidArtist" value="Laleh">
      </form>
    </div>
  </div>

</div>

<?php include("incl/footer.php"); ?>