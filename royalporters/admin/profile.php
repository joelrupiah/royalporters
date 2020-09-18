<?php 

    include("sidebar_admin.php");
    include("header_admin.php");
     
?>

<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-8">
			
			<form>
				
				<fieldset>
					
					<legend>Profile</legend>

					<label for="username">USERNAME: </label><br />

					<input type="text" name="username" id="username"><br />


					<label for="username">EMAIL: </label><br />

					<input type="text" name="email" id="email"><br />


					<label for="username">PASSWORD: </label><br />

					<input type="password" name="password" id="password">					

				</fieldset>

			</form>

		</div>

		<div class="col-md-4"></div>

	</div>

</div>

<footer class="sticky-footer bg-white">

    <?php include("footer_admin.php"); ?>