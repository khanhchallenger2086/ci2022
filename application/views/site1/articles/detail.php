<article>
	<section class="bread-crumb">
		<div class="container">
			<?php 
				//load breadcrumb
				$this->load->view('site/include_elements/breadcrumb'); 
			?>
		</div>
	</section>
	<section class="page-detail news-page">
		<div class="container">
			<?php if(isset($object)){?>
				<h2><?= $object->vn_name ?></h2>
				<h4 class="date"><i class="mdi mdi-clock-outline"></i><?= date('d/m/y',  $object->created) ?></h4>
				<div><?= $object->vn_detail ?></div>
				<?php if($related_news) { ?>
					<div class="similar">
						<div class="title-page">
							<h1> <a>Tin tức liên quan</a></h1>
						</div>
						<div class="news-zone">
							<?php
								$xhtmlListItems = '';
								foreach($related_news as $row){
									$link_img = base_url().'public/site/img/default-1024x512.png';
									if(!empty($row->image_link)){
										$link_img = base_url().'uploads/images/articles/small/'.$row->image_link;
									}
									$day    = date('d', $row->created);
									$month  = date('m/Y', $row->created);
									$xhtmlListItems .= '<div class="box-news">
															<div class="box-news-img"><a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html"><img alt="'.@$config->alt_web.'" src="'.$link_img.'" />
																	<h5>'.date('d/m/y',  $row->created).'</h5>
																</a></div>
															<div class="box-news-detail">
																<h4> <a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a></h4>
																<h5>'.$row->vn_sapo.'</h5>
																<p><a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html">Xem thêm</a></p>
															</div>
														</div>';
								}
								echo $xhtmlListItems;
							?>
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
	</section>
</article>