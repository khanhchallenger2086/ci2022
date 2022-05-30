<?php

    $xhtmlListItems = '';
    if(!empty($list_items)){
        foreach($list_items as $row){
            $link_img = base_url().'public/site/img/default-1024x512.png';
            if(!empty($row->image_link)){
                $link_img = base_url().'uploads/images/articles/large/'.$row->image_link;
            }
            $day    = date('d', $row->created);
            $month  = date('m/Y', $row->created);
            $datetime  = date('d/m/Y', $row->created);
			// $xhtmlListItems .= '<div class="col-12 col-md-6 col-lg-6">
			// 						<div class="blog_content--content_item">
			// 							<a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html">
			// 								<div class="content_item--img h-20_rem">
			// 									<img src="'.$link_img.'" alt="'.$row->vn_name.'">
			// 								</div>
			// 								<div class="content_item--text">
			// 									<div class="content_item--text_title">
			// 										<h5>'.word_limiter($row->vn_name, 10).'</h5>
			// 									</div>
			// 									<div class="content_item--text_decription">
			// 										<p>'.word_limiter($row->vn_sapo, 200).'</p>
			// 									</div>
			// 								</div>
			// 							</a>
			// 						</div>
			// 					</div>';
			$xhtmlListItems .= '<div class="box-news">
									<div class="box-news-img"><a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html"><img src="'.$link_img.'">
											<h5>'.$datetime.'</h5>
										</a></div>
									<div class="box-news-detail">
										<h4> <a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a></h4>
										<h5>
											<p><strong>'.$row->vn_sapo.'</strong></p></h5>
										<p><a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html">Xem thêm</a></p>
									</div>
								</div>';

        }

    }else{

        $xhtmlListItems = '<p>Dữ liệu đang cập nhật</p>';

    }



?>

<article>
	<section class="bread-crumb">
		<div class="container">
			<?php 
				//load breadcrumb
				$this->load->view('site/include_elements/breadcrumb'); 
			?>
		</div>
	</section>
	<section class="news-page">
		<div class="container">
			<div class="news-zone">
				<?php echo $xhtmlListItems;?>
			</div>
			<div class="main-paging mb-2">
				<nav>
					<ul class="pagination justify-content-end">
						<?=$pagination?>
					</ul>
				</nav>
			</div>
		</div>
	</section>
</article>