<div class="go-top" title="Lên đầu trang"><span></span><span></span></div>
<header>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-3">
				<a href="<?=base_url()?>">
					<img class="image_logo" src="<?=base_url()?>uploads/images/ads/<?=$logo_menu->image_link?>" alt="<?=@$config->alt_web?>">
				</a>
			</div>
			<div class="col-12 col-sm-9">
				<div class="contact_top">
					<div class="item_top_content"><i class="fa fa-phone"></i> <?=@$config->hotline?></div>
					<div class="item_top_content"><i class="fa fa-envelope"></i> <?=@$config->email?></div>
					<!-- <div class="item_top_content"><i class="fa fa-shopping-cart"></i> <a href="<?=base_url('gio-hang.html')?>">Giỏ hàng (<?= count($_SESSION['cart'])?>)</a></div> -->
				</div>
				<div class="menu wow">
					<div class="main-menu">
						<ul class="nav">
							<div class="nav-close"><i class="mdi mdi-close d-block d-lg-none"></i></div>
							<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Trang chủ</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('dich-vu.html') ?>">Dịch vụ</a></li>
							
							<li class="nav-item"><a class="nav-link" href="<?= base_url('san-pham.html')?>">Sản phẩm<i class="mdi mdi-chevron-down"></i></a>
								<ul class="menu-1">
									<?php if(@$categorys){?>
										<?php foreach ($categorys as $row) { ?>
											<li><a href="<?= base_url() . $row->vn_slug ?>.html"><?= $row->vn_name ?></a>
												<ul class="menu-2">
									<?php 
									$input_sub['where'] = array('status' => 1, 'pid' => $row->id);
									$input_sub['order'][0] = 'position';
           							$input_sub['order'][1] = 'ASC';
           							$subb = $this->product_category_m->get_list($input_sub);
									?>
										<?php foreach ($subb as $row) { ?>
											<li><a href="<?= base_url() . $row->vn_slug ?>.html"><?= $row->vn_name ?></a></li>
										<?php } ?>
								
								</ul>

											</li>
										<?php } ?>
									<?php } ?>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('tin-tuc.html')?>">Tin tức</a></li>
							<li class="nav-item"><a class="nav-link" href="<?= base_url('gioi-thieu.html')?>">Giới thiệu</a></li>
							
							
							<li class="nav-item"><a class="nav-link" href="<?= base_url('lien-he.html')?>">Liên hệ</a></li>
							<li class="nav-item search_1"><i class="fa fa-search" onclick="openSearch()"></i></li>
							<li class="nav-item search_2"><form action="<?= base_url('tim-kiem.html')?>" method="GET">
						<input type="text" name="key_search" value="<?= $key_search ?>" placeholder="Nhập từ khóa . . ." />
						
						<button><i class="fa fa-search"></i></button>
					</form></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?=base_url()?>"><img style="max-height: 35px;" src="<?=base_url()?>uploads/images/ads/<?=$logo_menu->image_link?>" alt="<?=@$config->alt_web?>"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>">Trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('dich-vu.html')?>">Dịch vụ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        	<a class="dropdown-item" href="<?= base_url()?>san-pham.html">Tất cả sản phẩm</a>
          <?php if(@$categorys){?>
										<?php foreach ($categorys as $row) { ?>
										
											 <a class="dropdown-item" href="<?= base_url() . $row->vn_slug ?>.html"><?= $row->vn_name ?></a>
										<?php } ?>
									<?php } ?>
        </div>

									
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('tin-tuc.html')?>">Tin tức</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('gioi-thieu.html')?>">Giới thiệu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('lien-he.html')?>">Liên hệ</a>
      </li>
    </ul>
  </div>
</nav>

	<div class="overlay-menu"></div>
</header>
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<?php foreach ($slider_home as $key => $va) {?>
		<li><a href="<?=$va->link?>"><img src="<?=base_url()?>uploads/images/ads/<?=$va->image_link?>" alt="<?=$va->vn_name?>" alt="<?=@$config->alt_web?>"/></a></li>
		
	<?php }?>
	</ul></div>
	
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="<?=base_url('public/site/')?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?=base_url('public/site/')?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->	

<div class="modal quickview fade product-modal-1 show" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
	<div class="modal-content">
	</div>
</div>
</div>
