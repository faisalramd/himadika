<section id="featured" class="bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Slider -->
				<div id="main-slider" class="main-slider flexslider">
					<ul class="slides">
						<?php foreach ($slide_images as $key => $value): ?>
							<li>
								<img src="<?php echo $value ?>" alt="" />
								<div class="flex-caption">
									<h3><?php echo $slide_title[$key] ?></h3>
									<p><?php echo $slide_subtitle[$key] ?></p>
								</div>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
				<!-- end slider -->
			</div>
		</div>
	</div>


</section>
<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="cta-text">
					<h2>Tentang Program Studi <span>Manajemen Divisi Kamar</span></h2>
					<p> Program Studi Manajemen Divisi Kamar merupakan program studi vokasi yang menghasilkan alumni yang mampu menjadi supervisor dalam bidang Room Division khususnya Front Office dan Housekeeping.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="cta-btn">
					<a href="#" class="btn btn-theme btn-lg">Selanjutnya</a>
				</div>
			</div>
		</div>
	</div>
</section>