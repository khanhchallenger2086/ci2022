
<section class="bread-crumb">
	<div class="container">
		<?php 
			//load breadcrumb
			$this->load->view('site/include_elements/breadcrumb'); 
		?>
	</div>
</section>
<div class="container">
	<!-- start top container -->
	<?php $this->load->view('site/include_elements/top_container')?>
	<!-- end top container -->
	<div class="row">
		<!-- start left container -->
		<?php $this->load->view('site/include_elements/left_container')?>
		<!-- end left container -->
		<div class="col-12 col-lg-9">
				<?php if(isset($object)){?>
				<div class="main">
					<div class="product-detail">
						<div class="product-detail-1">
							<div class="row">
								<div class="col-md-6">
									<div class="product-detail-1-img">
										<img class="main-image xzoom"
											src="<?=base_url('uploads/images/product/large/') . $object->image_link ?>"
											xoriginal="<?=base_url('uploads/images/product/large/') . $object->image_link ?>"
											alt="<?=@$config->alt_web?>" />
										<!-- <div class="xzoom-thumbs">
											<div class="owl-carousel xzoom-carousel owl-theme">

												<div class="item">
													<a
														href="<?=base_url('uploads/images/product/large/') . $object->image_link ?>">
														<img class="xzoom-gallery"
															src="<?=base_url('uploads/images/product/large/') . $object->image_link ?>"
															xpreview="<?=base_url('uploads/images/product/large/') . $object->image_link ?>"
															alt="<?=@$config->alt_web?>" />
													</a>
												</div>
												<?php
														// load ảnh kèm theo
														$list_image = json_decode($object->image_list);
														$xhtmlListImage = '';
														if ($list_image){
															foreach ($list_image as $value){
																$xhtmlListImage .= '<div class="item">
																						<a href="'.base_url('uploads/images/product/large/') .$value.'">
																							<img class="xzoom-gallery" alt="'.@$config->alt_web.'" src="'.base_url('uploads/images/product/large/') .$value.'" xpreview="'.base_url('uploads/images/product/large/') .$value.'" />
																							</a>
																					</div>';
															}
														}
														echo $xhtmlListImage;
													?>


											</div>
										</div> -->
									</div>
								</div>
								<div class="col-md-6">
									<div class="product-detail-1-detail">
										<h3><?=$object->vn_name?></h3>
										<p>Mã sản phẩm: <?=$object->code?></p>
										<h4 class="price-product">Giá: Liên hệ</h4>
										<h5><?=$object->vn_sapo?></h5>
										<a href="<?=base_url('lien-he.html')?>">
											<button type="submit" class="btn-buy" style="border: none;">Liên hệ
												ngay</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product-detail-2">
						<div class="product-detail-2-title">
							<ul class="nav nav-tabs justify-content-center" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="desc-1-tab" data-toggle="tab"
										href="#desc-1" role="tab" aria-controls="desc-1" aria-selected="true">Chi tiết
										sản phẩm</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="desc-1" role="tabpanel"
								aria-labelledby="desc-1-tab">
								<?= $object->vn_detail ?>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<?php if($related_news) { ?>

				<div class="container rcontent product-page">
					<h4>Sản phẩm liên quan</h4>
					<div class="main">
						<div class="product-zone">
							<?php
								$xhtmlListItems = '';
								foreach($related_news as $row){
									$link_img = base_url().'public/site/img/default-1024x512.png';
									if(!empty($row->image_link)){
										$link_img = base_url().'uploads/images/product/large/'.$row->image_link;
									}
									// $xhtmlListItems .= '<div class="col-md-3 col-6 mb-1 cotmot">
									// 						<img src="'.$link_img.'" class="rounded" alt="'.@$config->alt_web.'">
									// 						<p class="text-center tieude"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html">'.$row->vn_name.'</a></p>
									// 						<p class="text-center dienthoai">'.@$config->hotline.'</p>
									// 						<p class="text-right chitiet"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html">Chi tiết</a></p>
									// 					</div>';
									$xhtmlListItems .= '<div class="box-product">
															<div class="box-product-img">
																<a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html"><img src="'.$link_img.'" alt="'.@$config->alt_web.'"></a>
															</div>
															<div class="box-product-detail">
																
																<h5><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a></h5>
																<p>'.$row->code.'</p>
															</div>
														</div>';
								}
								echo $xhtmlListItems;
							?>
						</div>
					</div>
				</div>

				<?php } // end related_news ?>
			<?php 
					// end object
					}else{
						echo 'Dữ liệu đang cập nhật';
					}
				?>
		</div>
	</div>
</div>
<!-- start partner -->
<?php $this->load->view('site/include_elements/partner_container')?>
<!-- end partner -->
</div>