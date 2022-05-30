
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
			<?php if(isset($staticpage)){?>
				<div class="title-page">
					<h1> <a><?=$staticpage->vn_name?></a></h1>
				</div>
				<div class="news-zone">
					<div><?=$staticpage->vn_detail?></div>
				</div>
			<?php 
				// end object
				}else{
					echo 'Dữ liệu đang cập nhật';
				}
			?>
		</div>
	</section>
</article>