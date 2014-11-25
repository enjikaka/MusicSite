
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
				
                <footer>
                    Kontaktinformation
                </footer>

            </div><!-- end wrapper -->

			<?php
				if(isset($jquery)) {
				?>
					<script type="text/javascript" src="jquery/jquery-2.1.1.js"></script>
				<?php
				}
				
				if(isset($slimbox)) {
				?>
					<script type="text/javascript" src="slimbox2/js/slimbox2.js"></script>
				<?php
				}
				
				if(isset($accordion)) {
				?>
					<script type="text/javascript" src="jquery-ui-1.11.1.custom/jquery-ui.js"></script>
				<?php
				}
				
				if(isset($script)) {
				?>
					<script type="text/javascript" src="script/<?php echo($script); ?>"></script>
				<?php
				}
			?>
			
        </body>

    </html>