<?php

    $xhtmlListItems = '';

    if(!empty($list_items)){
        foreach($list_items as $row){
            $link_img = base_url().'public/site/img/default-1024x512.png';
            if(!empty($row->image_link)){
                $link_img = base_url().'uploads/images/product/large/'.$row->image_link;
            }
            $day    = date('d', $row->created);
            $month  = date('m/Y', $row->created);
			// $xhtmlListItems .= '<div class="col-md-3 col-6 mb-1 cotmot">
			// 							<img src="'.$link_img.'" class="rounded" alt="'.@$config->alt_web.'">
			// 							<p class="text-center tieude"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html">'.$row->vn_name.'</a></p>
			// 							<p class="text-center dienthoai">'.@$config->hotline.'</p>
			// 							<p class="text-right chitiet"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html">Chi tiết</a></p>
			// 						</div>';
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

    }else{

        $xhtmlListItems = '<p class="capnhatgege">Dữ liệu đang cập nhật</p>';

    }



?>

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
		<div class="col-md-9">
			<div class="container rcontent product-page">
				<h4><?= $category->vn_name ?></h4>
				<div><?= $category->vn_sapo ?></div>
				<div class="main">
					<div class="product-zone">
						<?php echo $xhtmlListItems;?>
					</div>
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
	</div>
	<!-- start partner -->
	<?php $this->load->view('site/include_elements/partner_container')?>
	<!-- end partner -->
</div>