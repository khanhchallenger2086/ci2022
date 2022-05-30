
<?php $this->load->view('site/include_elements/breadcrumb');?>
<div class="block_about--introduce">
	<?php if(isset($object)){?>
		<?= $object->vn_detail ?>
	<?php 
		// end object
		}else{
			echo 'Dữ liệu đang cập nhật';
		}
	?>
</div>
<?php
	$xhtmlListItems = '';
	foreach($related_news as $row){
		$link_img = base_url().'public/site/img/default-1024x512.png';
		if(!empty($row->image_link)){
			$link_img = base_url().'uploads/images/articles/small/'.$row->image_link;
		}
		$day    = date('d', $row->created);
		$month  = date('m/Y', $row->created);
		$xhtmlListItems .= '<div class="col-12 col-md-6 col-lg-3">
								<div class="blog_content--content_item">
									<a href="'.base_url($row->vn_slug . '-s' . $row->id) .'.html">
										<div class="content_item--img">
											<img src="'.$link_img.'" alt="'.$row->vn_name.'">
										</div>
										<div class="content_item--text">
											<div class="content_item--text_title">
												<h5>'.$row->vn_name.'</h5>
											</div>
											<div class="content_item--text_decription">
												<p>'.$row->vn_sapo.'</p>
											</div>
										</div>
									</a>
								</div>
							</div>';
	}
?>		
<?php if($related_news) { ?>
	<div class="block-blog_content">
		<div class="block-blog_content--title title-block">
			<h2>DỊCH VỤ LIÊN QUAN</h2>
			<div class="line-custom"></div>
		</div>
		<div class="block-blog_content--content">
			<div class="row">
				<?php echo $xhtmlListItems;?>
			</div>
		</div>
	</div>
<?php } // end related_news ?>
<?php $this->load->view('site/include_elements/customer')?>