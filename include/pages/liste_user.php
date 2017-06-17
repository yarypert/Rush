<div class="baruser2"></div>
	<div class="corps">
		<div class="bandegauche"></div>
		<div class="bandehaut"></div>
		<div class="content">
		<?php
			include("managers/get_all_users.php");
			$users = get_all_users();
			
			for ($i = 0; $i < 12; $i++) {
			if ($i % 3 == 0) { ?>
			<div class="ctntstudent">
			<?php } ?>
				<div class="users">
					<div class="user_pic">
						<img src="https://cdn.intra.42.fr/users/medium_<?php echo $users[$i]["login"]; ?>.jpg" height=250px width=180px;>
					<div class="user_buy">
						<input type="button" value="Achete moi!">
					</div>
				</div>
			</div>
		<?php if ($i % 3 == 2) { ?>
		</div>
		<?php } ?>
		<?php
			}
		?>
	</div>