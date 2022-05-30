<div class="category-body menuleft">
<h4 class="text-center">Danh mục sản phẩm</h4>
	<ul>
		<?php if(@$categorys){?>
			<?php foreach ($categorys as $row) { ?>
				<li><a href="<?= base_url() . $row->vn_slug ?>.html" title="<?= $row->vn_name ?>"><i class="mdi mdi-star-circle-outline"></i><?= $row->vn_name ?></a>
					<ul class="menu-2">
									<?php 
									$input_sub['where'] = array('status' => 1, 'pid' => $row->id);
									$input_sub['order'][0] = 'position';
           							$input_sub['order'][1] = 'ASC';
           							$subb = $this->product_category_m->get_list($input_sub);
									?>
										<?php foreach ($subb as $row) { ?>
											<li><a href="<?= base_url() . $row->vn_slug ?>.html" title="<?= $row->vn_name ?>"><i class="mdi mdi-star-circle-outline"></i><?= $row->vn_name ?></a></li>
										<?php } ?>
								
								</ul>
				</li>
			<?php } ?>
		<?php } ?>
	</ul>
	<?php if($is_show_bottom_sidebar_product_category) { ?>
		<div class="more"> <i class="mdi mdi-plus"></i>Xem đầy đủ danh mục</div>
		<div class="less d-none"><i class="mdi mdi-minus"></i>Ẩn bớt danh mục</div>
	<?php } ?>
</div>