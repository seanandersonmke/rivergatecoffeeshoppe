<?php include 'header.php';?>
<section id="main-content" class="fade-in">
	<div class="container" style="margin-top:-18px; padding-bottom:10px">
		<img class="baconback hidden-xs" src="images/bacon.png">
		<img class="toastback visible-lg" src="images/toast.png">

		<div class="col-md-6 borderRight" style="padding-top:10px; padding-bottom:20px">
			<?php include 'views/breakfast/omelettes.php';?>
			<?php include 'views/breakfast/breakfastspecials.php';?>
			<?php include 'views/breakfast/kids.php';?>
			<?php include 'views/breakfast/cereal.php';?>
		</div>
		<div class="col-md-6 borderRight" style="padding-bottom: 17px;">
			<?php include 'views/breakfast/breakfast.php';?>
			<?php include 'views/breakfast/sides.php';?>
			<?php include 'views/breakfast/beverages.php';?>
		</div>
	</div>
</section>