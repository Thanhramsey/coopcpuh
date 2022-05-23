<script>
	//FlexSlider-->
	$(document).ready(function(){
			$('.ex1').zoom({ on:'click' });;
	});
	$(window).on('load', function(){
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails",
			animationLoop: true,
		});
	});
</script>

<div class="flexslider">
	<ul class="slides">
		<?php
		$avatar = $row['avatar'];
		$img = $row['img'];
		$img2 = $row['img2'];
		$img3 = $row['img3'];
		$img4 = $row['img4'];
		?>
		<?php if (!empty($avatar)) : ?>
			<li data-thumb="public/images/products/<?php echo $avatar; ?>">
				<div class="thumb-image ex1"> <img src="public/images/products/<?php echo $avatar; ?>" class="img-responsive"> </div>
			</li>
		<?php endif; ?>
		<?php if (!empty($img)) : ?>
			<li data-thumb="public/images/products/<?php echo $img; ?>">
				<div class="thumb-image ex1"> <img src="public/images/products/<?php echo $img; ?>" class="img-responsive"> </div>
			</li>
		<?php endif; ?>
		<?php if (!empty($img2)) : ?>

			<li data-thumb="public/images/products/<?php echo $img2; ?>">
				<div class="thumb-image ex1"> <img src="public/images/products/<?php echo $img2; ?>" class="img-responsive"> </div>
			</li>
		<?php endif; ?>
		<?php if (!empty($img3)) : ?>
			<li data-thumb="public/images/products/<?php echo $img3; ?>">
				<div class="thumb-image ex1"> <img src="public/images/products/<?php echo $img3; ?>" class="img-responsive"> </div>
			</li>
		<?php endif; ?>
		<?php if (!empty($img4)) : ?>
			<li data-thumb="public/images/products/<?php echo $img4; ?>">
				<div class="thumb-image ex1"> <img src="public/images/products/<?php echo $img4; ?>" class="img-responsive"> </div>
			</li>
		<?php endif; ?>
	</ul>
	<div class="clearfix"></div>
</div>