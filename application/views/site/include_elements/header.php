<!-- <div class="container-fluid tophead">
	<div class="container">
		<div class="row topme">
			<div class="col-md-3 col d-none d-sm-block">
				<p><?=@$config->address_website?></p>
			</div>
			<div class="col-md-3 col d-none d-sm-block">
				<p><?=@$config->hotline?></p>
			</div>
			<div class="col-md-6 col-12">
				<ul class="nav topmenu right">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Trang chủ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('gioi-thieu.html') ?>">Giới Thiệu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('dich-vu.html') ?>">Dịch Vụ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('lien-he.html') ?>">Liên Hệ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div> -->

<div class="header_top">
		<div class="container">
			<div class="content_header_top">
				<div class="item_1_ht">
					<div class="item_2_ht">
						<i class="fa fa-phone" aria-hidden="true" alt="hotline"></i>&ensp;Hotline:<?=@$config->hotline?>
					</div>
					<div class="item_2_ht">
						<i class="fa fa-envelope" aria-hidden="true" alt="mail"></i>&ensp;Website: <?=@$config->address_website?>
					</div>
					<div class="item_2_ht">
						<a href="link fb" target="_blank"><img src="http://hoanggiaphat.vn/public/site/img/facebook.png" alt="facebook"></a>
						
					</div>
					<div class="item_2_ht">
						
						<a href="link youtube" target="_blank"><img src="http://hoanggiaphat.vn/public/site/img/youtube.png" alt="youtube"></a>
					</div>
				</div>
				<div class="item_1_ht">
					<div class="bgco">
						<a href="javascript:void(0)"><img id="viet_lang" class="img-responsive" src="http://hoanggiaphat.vn/public/site/img/Image 3.png" alt="Vietnam"></a>
						<!-- <a href="javascript:void(0)"><img id="eng_lang" class="img-responsive" src="http://hoanggiaphat.vn/public/site/img/Image 4.png" alt="english"></a> -->
					</div>
				</div>
			</div>
		</div>
</div>

<section class="header-bottom">
		<div class="container">
			<div class="header-zone">
				<div class="search">
					<form action="<?= base_url('tim-kiem.html')?>" method="GET">
						<input type="text" name="key_search" value="">
						<button>Tìm kiếm</button>
					</form>
				</div>
				<div class="hotline"><a href="tel:0908 513311"> <i style="float: left;" class="fas fa-mobile-alt"></i>
					<div class="hotline-detail">
						<h5>Liên hệ hotline:</h5>
						<h4>0908 513311</h4>
					</div>
				</a></div>
				<div class="toggleMenu d-block d-lg-none"><i class="fas fa-bars"></i></div>
				<div class="search-btn d-block d-lg-none"><i class="fas fa-search"></i></div>
			</div>
		</div>
	</section>