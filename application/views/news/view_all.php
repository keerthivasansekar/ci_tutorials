<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="w3l-service-breadcrum">
	<div class="breadcrum-bg py-sm-5 py-4">
		<div class="container py-lg-3 py-2">
			<h2>News</h2>			
		</div>
	</div>
</section>
<section class="w3l-features-8">
	<!-- /features -->
	<div class="features py-5" id="services">
		<div class="container py-md-3">
			<div class="heading text-center mx-auto">
				<h3 class="head">Latest News</h3>
				<p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
			</div>
			<div class="fea-gd-vv text-center row mt-5 pt-3">
				<?php foreach ($all_news as $news): ?>
				<div class="float-top col-lg-4 col-md-6">	
					<a href="#"><img src="assets/images/g7.jpg" class="img-responsive" alt=""></a>
					<div class="float-lt feature-gd">	
						<h3><a href="<?php echo base_url('news/view/').$news['slug'] ?>"><?php echo $news['title'] ?></a> </h3>
						<a href="<?php echo base_url('news/view/').$news['slug'] ?>" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>  
	</div>
</div>
<!-- //features -->
</section>
<!-- services page block 3 -->