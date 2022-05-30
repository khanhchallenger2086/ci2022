<?php if ($chinh_sach_home) { ?>
	<div>
		<div class="container">
			<div class="chinh-sach">
				<?php foreach ($chinh_sach_home as $key => $cs) { ?>
					<div class="item_chinh_sach">
						<div class="img_chinh_sach"><img src="<?=base_url()?>uploads/images/ads/<?=$cs->image_link?>" alt="<?=@$config->alt_web?>"></div>
						<div class="name_cs"><?=$cs->vn_name?></div>
						<div class="detail_cs"><?=$cs->link?></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>
<div >
	<div class="container">
		<div class="abouts">
			<div class="row">
				<div class="col-sm-7 col-md-7 col-12">
					<div class="title_abouts">VỀ CHÚNG TÔI</div>
					<div class="detail_abouts"><?=$list_abouts->vn_sapo?></div>
				</div>
				<div class="col-sm-5 col-md-5 col-12"><a class="img-shine-2"><img src="<?=base_url()?>uploads/images/staticpage/small/<?=$list_abouts->image_link?>" alt="<?=@$config->alt_web?>"></a></div>
			</div>
		</div>
	</div>
</div>
<?php if ($obj_cate_bottom) {?>
	<div id="cate_product">
		<div class="container">
			<div class="title_category">
				<div class="title_cste">DANH MỤC SẢN PHẨM</div>
				<div><img src="<?=base_url()?>public/site/img/line-title.png" alt="<?=@$config->alt_web?>"></div>
			</div>

			<div class="owl-1 owl-carousel owl-theme">
				<?php for ($i=0; $i <count($obj_cate_bottom) ; $i+=2) { ?>
					<div>
						<div class="item" data-aos="flip-left">
							<div><a href="<?=base_url()?><?=$obj_cate_bottom[$i]->vn_slug?>.html" class="img-shine">
								<img src="<?=base_url()?>uploads/images/product_category/small/<?=$obj_cate_bottom[$i]->image_link?>" alt="<?=@$config->alt_web?>"></a>
							</div>
							<a href="<?=base_url()?><?=$obj_cate_bottom[$i]->vn_slug?>.html" ><div class="name_cate"><?=$obj_cate_bottom[$i]->vn_name?></div></a>
						</div>
						<?php $j=$i+1; if(!empty($obj_cate_bottom[$j])) { ?>
							<div class="item" data-aos="flip-left">
								<div><a href="<?=base_url()?><?=$obj_cate_bottom[$j]->vn_slug?>.html" class="img-shine">
									<img src="<?=base_url()?>uploads/images/product_category/small/<?=$obj_cate_bottom[$j]->image_link?>" alt="<?=@$config->alt_web?>"></a>
								</div>
								<a href="<?=base_url()?><?=$obj_cate_bottom[$j]->vn_slug?>.html" ><div class="name_cate"><?=$obj_cate_bottom[$j]->vn_name?></div></a>
							</div>
						<?php }?>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
<?php }?>
<div  id="product_hot">
	<div class="container">
		<div class="title_product_hot">
			<div class="title_prohot">SẢN PHẨM NỔI BẬT</div>
			<div><img src="<?=base_url()?>public/site/img/line-title.png" alt="<?=@$config->alt_web?>"></div>
		</div>
		<div class="owl-2 owl-carousel owl-theme">
			
			<?php for($i=0;$i<count($list_product);$i+=2) { ?>
				<div>
					<div class="item" data-aos="flip-left">
						<div><a href="<?=base_url()?><?=$list_product[$i]->vn_slug?>-p<?=$list_product[$i]->id?>.html" class="img-shine-2">
							<img src="<?=base_url()?>uploads/images/product/small/<?=$list_product[$i]->image_link?>" alt="<?=@$config->alt_web?>"></a>
						</div>
						<a href="<?=base_url()?><?=$list_product[$i]->vn_slug?>-p<?=$list_product[$i]->id?>.html"><div class="name_pro"><?=substr($list_product[$i]->vn_name,0,65)?></div>

							<button type="submit" class="btn-buy" style="border: none;">Xem chi tiết</button>
						</a>
					</div>
					<?php $j=$i+1; if(!empty($list_product[$j])) { ?>
						<div class="item" data-aos="zoom-in">
							<div><a href="<?=base_url()?><?=$list_product[$j]->vn_slug?>-p<?=$list_product[$j]->id?>.html" class="img-shine-3">
								<img src="<?=base_url()?>uploads/images/product/small/<?=$list_product[$j]->image_link?>" alt="<?=@$config->alt_web?>"></a>
							</div>
							<a href="<?=base_url()?><?=$list_product[$j]->vn_slug?>-p<?=$list_product[$j]->id?>.html"><div class="name_pro"><?=substr($list_product[$j]->vn_name,0,65)?></div>

								<button type="submit" class="btn-buy" style="border: none;">Xem chi tiết</button>
							</a>
						</div>
					<?php }?>
				</div>
			<?php }?>
			

		</div>
	</div>
</div>
<div  id="tintuc">
	<div class="container">
		<div class="title_product_hot">
			<div class="title_cste">TIN TỨC MỚI NHẤT</div>
			<div><img src="<?=base_url()?>public/site/img/line-title-w.png" alt="<?=@$config->alt_web?>"></div>
		</div>
		<div class="owl-3 owl-carousel owl-theme">
			<?php  foreach ($list_articles as $key => $articls) {?>
				<div class="item" data-aos="flip-up">
					<div class="img_articles"><a href="<?=base_url()?><?=$articls->vn_slug?>-a<?=$articls->id?>.html" class="img-shine">
						<img src="<?=base_url()?>uploads/images/articles/small/<?=$articls->image_link?>" alt="<?=@$config->alt_web?>"></a>
						<h5><?=date('d-m-Y',$articls->created)?></h5>
					</div>
					<div class="detail_artiles">
						<a href="<?=base_url()?><?=$articls->vn_slug?>-a<?=$articls->id?>.html">
							<div class="name_articles"><?=$articls->vn_name?></div>
						</a>

						<div class="sapo_articles"><?=substr($articls->vn_sapo, 0,190)?>...</div>


					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>