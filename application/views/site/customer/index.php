<?php

    $xhtmlListItems = '';
    if(!empty($list_items)){
        foreach($list_items as $row){
            $link_img = base_url().'public/site/img/default-1024x512.png';
            if(!empty($row->image_link)){
                $link_img = base_url().'uploads/images/customer/small/'.$row->image_link;
            }
				$xhtmlListItems .= '<div class="col-12 col-md-6 col-lg-3">
										<div class="related-news--content_item">
											<div class="related-news--content_item--img">
												<img src="'.$link_img.'" alt="'.$row->vn_name.'">
											</div>
											<div class="related-news--content_item--content">
												<p>'.$row->vn_name.'</p>
											</div>
										</div>
									</div>';

        }

    }else{

        $xhtmlListItems = '<p>Dữ liệu đang cập nhật</p>';

    }



?>
<?php $this->load->view('site/include_elements/breadcrumb');?>
<div class="block_blog--related-news">
	<div class="related-news--title title-block">
		<h2>Khách hàng</h2>
	</div>
	<div class="related-news--content">
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