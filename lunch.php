<?php include 'header.php';?>
<section id="main-content" class="fade-in">
	<div class="container" style="margin-top:-18px; padding-bottom:10px">
		<img class="baconback hidden-xs" src="images/bacon.png">
		<img class="toastback hidden-xs" src="images/toast.png">
		<div class="col-md-6 borderRight" style="padding-top:10px; padding-bottom: 17px;">
			<?php include 'views/lunch/hotsandwich.php';?>
			<?php include 'views/lunch/lunchspecials.php';?>
			<?php include 'views/lunch/salads.php';?>
			<?php include 'views/lunch/lunchsides.php';?>
		</div>
		<div class="col-md-6 borderRight negmarg" style="padding-bottom: 17px;">
			<?php include 'views/lunch/clubsandwich.php';?>
			<?php include 'views/lunch/coldsandwich.php';?>
			<?php include 'views/lunch/opensandwich.php';?>
			<?php include 'views/lunch/subs.php';?>
			<?php include 'views/lunch/soup.php';?>
		</div>
	</div>
</section>
