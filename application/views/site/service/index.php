<?php

    $xhtmlListItems = '';
    if(!empty($list_items)){
        foreach($list_items as $row){
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
													<h5>'.word_limiter($row->vn_name, 10).'</h5>
												</div>
												<div class="content_item--text_decription">
													<p>'.word_limiter($row->vn_sapo, 20).'</p>
												</div>
											</div>
										</a>
									</div>
								</div>';

        }

    }else{

        $xhtmlListItems = '<p>Dữ liệu đang cập nhật</p>';

    }



?>
<?php $this->load->view('site/include_elements/breadcrumb');?>
<div class="block-blog_content">
	<div class="block-blog_content--title title-block">
		<h2>Dịch vụ của chúng tôi</h2>
		<div class="line-custom"></div>
	</div>
	<div class="block-blog_content--content">
		<div class="row">
			<?php echo $xhtmlListItems;?>
		</div>
		<nav>
			<ul class="pagination justify-content-end">
				<?=$pagination?>
			</ul>
		</nav>
	</div>
</div>
<?php $this->load->view('site/include_elements/customer')?>