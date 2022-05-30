<div class="container-fluid logohead content_header">
	<div class="container">
		<!-- <nav class="navbar navbar-expand-md">
			<a class="navbar-brand logotop" href="<?= base_url() ?>"><img class="img-responsive" src="<?=base_url('uploads/images/ads/' . $logo_menu->image_link )?>"
					alt="Logo" style="width:100%"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>

			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
				<?php
					$xhtmlListCateMenu = '';
					if(!empty($categorys)){
						foreach($categorys as $row){
							$xhtmlListCateMenu .= '<li class="nav-item">
														<a class="nav-link" href="'.base_url($row->vn_slug).'.html">'.$row->vn_name.'</a>
													</li>';
						}

					}
					echo $xhtmlListCateMenu;
				?>
					<li class="nav-item">
						<a class="nav-link" href="<?=base_url(@$article_menu->vn_slug . '.html')?>"><?= @$article_menu->vn_name ?></a>
					</li>
				</ul>
			</div>
		</nav> -->
		
		
		<!-- <section class="content_header"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<!-- <div class="name_header"><a href="http://hoanggiaphat.vn/">HOÀNG GIA PHÁT</a></div> -->
				<div><img class="img-responsive" src="<?=base_url('uploads/images/ads/' . $logo_menu->image_link )?>"
					alt="Logo" style="width:100%"></div>
			</div>
			<div  class="col-md-7 flex-center">
				<div class="search_header">
				<form action="<?= base_url('tim-kiem.html')?>" method="GET">
					<input type="text" name="key_search" value="<?= $key_search ?>" />
					<button><i class="fa fa-search" aria-hidden="true"></i> <?=lang('search')?></button>
				</form>
				</div>
			</div>
			<div  class="col-md-2 flex-center">
				<div>
					<div class="right_ct">
						<a href="<?= base_url('tin-tuc.html') ?>"><i class="fa fa-user" aria-hidden="true"></i> Tuyển dụng</a>
					</div>
					<div class="right_ct1">
						<a href="<?= base_url('tin-tuc.html') ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i>  Tin tức</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- </section> -->
	</div>

	<section class="menu wow">
   <div class="container">
      <div class="main-menu">
		  
         <ul class="nav">
            <!-- <div class="nav-close"><i class="mdi mdi-close d-block d-lg-none" alt="close"></i></div> -->
            <!-- <li class="nav-item"><a class="nav-link active" href="http://hoanggiaphat.vn/">Trang chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="http://hoanggiaphat.vn/gioi-thieu.html">Giới thiệu</a></li>
            <li class="nav-item ">
               <a class="nav-link" href="http://hoanggiaphat.vn/may-phat-dien.html">Máy phát điện<i class="mdi mdi-chevron-down" alt="chevron"></i></a>
               <ul>
                  <li><a href="http://hoanggiaphat.vn/may-phat-dien-cummins.html">Máy phát điện Cummins</a>
                  </li>
               </ul>
            </li>
            <li class="nav-item ">
               <a class="nav-link" href="http://hoanggiaphat.vn/phu-tung.html">Phụ tùng<i class="mdi mdi-chevron-down" alt="chevron"></i></a>
               <ul>
                  <li><a href="http://hoanggiaphat.vn/bo-loc.html">Bộ lọc</a>
                  </li>
               </ul>
			</li> -->
			<div class="nav-close"><i class="fas fa-times d-block d-lg-none"></i></div>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url() ?>">Trang chủ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('gioi-thieu.html') ?>">Giới Thiệu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('san-pham.html') ?>">Sản Phẩm</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('tin-tuc.html') ?>">Bài Viết</a>
			</li>
			
			<?php
					// $xhtmlListCateMenu = '';
					// if(!empty($categorys)){
					// 	foreach($categorys as $row){
					// 		$xhtmlListCateMenu .= '<li class="nav-item">
					// 									<a class="nav-link" href="'.base_url($row->vn_slug).'.html">'.$row->vn_name.'</a>
					// 								</li>';
					// 	}

					// }
					// echo $xhtmlListCateMenu;
				?>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('cho-thue-may-phat-dien-gia-re.html') ?>">Cho thuê máy phát điện</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('chinh-sach-bao-hanh.html') ?>">Bảo trì máy phát điện</a>
			</li>
            <li class="nav-item">
						<a class="nav-link" href="<?= base_url('lien-he.html') ?>">Liên Hệ</a>
			</li>
         </ul>
      </div>
   </div>
</section>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
				<?php
					$xhtmlListSlider1 = '';
					if(!empty($slider_home)){
						foreach($slider_home as $k_sld1 => $row){
							$classActive = $k_sld1 == 0 ? 'active' : '';
							$xhtmlListSlider1 .= '<li data-target="#demo" data-slide-to="'.$k_sld1.'" class="'.$classActive.'"></li>';
						}

					}
					echo $xhtmlListSlider1;
				?>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
				<?php
					$xhtmlListSlider = '';
					if(!empty($slider_home)){
						foreach($slider_home as $k_sld => $row){
							$link_img = base_url().'public/site/img/default-1024x512.png';
							if(!empty($row->image_link)){
								$link_img = base_url().'uploads/images/ads/'.$row->image_link;
							}
							$classActive = $k_sld == 0 ? 'active' : '';
							$xhtmlListSlider .= '<div class="carousel-item '.$classActive.'">
													<img src="'.$link_img.'" class="mx-auto d-block" alt="'.$row->vn_name.'">
												</div>';
						}

					}
					echo $xhtmlListSlider;
				?>
		</div>

		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</div>

