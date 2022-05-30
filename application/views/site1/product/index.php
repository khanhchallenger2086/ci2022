<?php

    $xhtmlListItems = '';

    if(!empty($list_items)){
        foreach($list_items as $row){
            $link_img = base_url().'public/site/img/default-1024x512.png';
            if(!empty($row->image_link)){
                $link_img = base_url().'uploads/images/product/small/'.$row->image_link;
            }
            $day    = date('d', $row->created);
            $month  = date('m/Y', $row->created);
			$xhtmlListItems .= '<div class="box-product">
									<div class="box-product-img"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html"><img
												src="'.$link_img.'" alt="'.@$config->alt_web.'"/></a></div>
									<div class="box-product-detail">
										<div class="box-product-detail-custom">
										    <a class="custom-quickview"><i onclick="getItem('.$row->id.');" class="mdi mdi-eye-plus-outline"></i></a>
										</div>
										<h5><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a></h5>
										<p>MSP: '.$row->code.'</p>
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
	<section class="product-page">
		<div class="container">
			<div class="left">
				<?php 
					//load view sidebar product sell
					$this->load->view('site/include_elements/sidebar_product_category');
				?>
				<?php 
					//load view sidebar product sell
					$this->load->view('site/include_elements/sidebar_product_sell');
				?>
			</div>
			<div class="main">
				<h3>Sản phẩm</h3>
				<div class="product-zone">
					<?php echo $xhtmlListItems;?>
				</div>
				<div class="main-paging">
					<nav>
						<ul class="pagination justify-content-end">
							<?=$pagination?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>
</article>