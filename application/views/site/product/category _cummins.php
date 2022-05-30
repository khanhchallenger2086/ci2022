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
			$properties = [];
			if(!empty($row->properties)) {
				$properties = json_decode($row->properties);
			}
			$xhtmlListItems .= '<tr>
									<th scope="row">'.$row->vn_name.'</th>
									<td>'.(isset($properties->pw_1) ? $properties->pw_1 : '').'</td>
									<td>'.(isset($properties->pw_2) ? $properties->pw_2 : '').'</td>
									<td>'.(isset($properties->pw_3) ? $properties->pw_3 : '').'</td>
									<td>'.(isset($properties->pw_4) ? $properties->pw_4 : '').'</td>
									<td>'.$row->code.'</td>
									<td><a class="btn btn-primary" href="'.base_url($row->vn_slug . '-p' . $row->id).'.html" title="'.$row->vn_name.'">Chi tiết</a></td>
								</tr>';

        }

    }else{

        $xhtmlListItems = '<tr><td colspan="7">Dữ liệu đang cập nhật</td></tr>';

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
			<div class="container rcontent">
				<h4><?= $category->vn_name ?></h4>
				<div><?= $category->vn_sapo ?></div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th rowspan="2">Máy phát điện</th>
							<th colspan="2">Công suất dự phòng</th>
							<th colspan="2">Công suất liên tục</th>
							<th rowspan="2">Mã động cơ</th>
							<th rowspan="2">Đặc tính kỹ thuật</th>
						</tr>
						<tr>
							<th scope="col">KVA</th>
							<th scope="col">KW</th>
							<th scope="col">KVA</th>
							<th scope="col">KW</th>
						</tr>
					</thead>
					<tbody>
						<?php echo $xhtmlListItems;?>
					</tbody>
				</table>
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