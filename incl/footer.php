<nav>
	<ul>
		<?php
			//if(isset($admin) && ($admin == "secretpage"))
			//{
			include("incl/adminmenu.php");
			//}
			//else
			//{
			include("incl/mainmenu.php");
			//}
		?>
	</ul>
</nav>
</div><!-- end main -->
<footer>Kontaktinformation</footer>
</div><!-- end wrapper -->
<?php
      if(isset($jquery)) {
    ?>
      <script src="jquery/jquery-2.1.1.min.js"></script>
    <?php
      }
      if(isset($slimbox)) {
    ?>
      <script src="slimbox2/js/slimbox2.js"></script>
    <?php
      }
      if(isset($accordion)) {
    ?>
      <script src="jquery-ui-1.11.1.custom/jquery-ui.js"></script>
		<?php
		}
			if(isset($script)) {
		?>
			<script src="script/<?php echo($script); ?>"></script>
		<?php
			}
		?>
</body>
</html>