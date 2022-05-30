<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-sm-6">
				<div class="contact">
					<h4><?= @$config->cn_1_name ?><i class="mdi mdi-chevron-down"></i></h4>
					<ul>
						<li><i class="mdi mdi-map-outline"></i><?= @$config->cn_1_address ?></li>
						<li><i class="mdi mdi-deskphone"></i><?= @$config->cn_1_phone ?></li>
						<li><i class="mdi mdi-fax"></i>Fax: <?= @$config->cn_1_fax ?></li>
						<li><i class="mdi mdi-email"></i>Mail: <?= @$config->cn_1_email ?></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-sm-6">
				<div class="contact">
					<h4><?= @$config->cn_2_name ?><i class="mdi mdi-chevron-down"></i></h4>
					<ul>
						<li><i class="mdi mdi-map-outline"></i><?= @$config->cn_2_address_1 ?></li>
						<li><i class="mdi mdi-deskphone"></i><?= @$config->cn_2_phone ?></li>
						<li><i class="mdi mdi-fax"></i>Fax: <?= @$config->cn_2_fax ?></li>
						<li><i class="mdi mdi-email"></i>Mail: <?= @$config->cn_2_email ?></li>
					</ul>
				</div>
			</div>
		
			<div class="col-xl-4 col-lg-4 col-sm-6">
				<div class="support">
					<h4>
						Hỗ trợ trực tuyến<i class="mdi mdi-chevron-down"></i></h4>
					<ul>
						<?php if(@$list_supports){?>
							<?php foreach ($list_supports as $row) { ?>
								<li><a href="tel:<?= $row->cell ?>"><img src="<?=base_url('public/site/')?>img/skype.png" title="Nhấn để liên hệ" /></a>
									<h5><?= $row->fullname ?></h5>
									<h6><?= $row->cell ?></h6>
								</li>
							<?php } ?>
						<?php } ?>
						<li>Đang truy cập: <?= $userOnline ?></li>
						<li>Truy cập trong ngày: <?= round($counters->today) ?></li>
						<li>Truy cập trong tháng: <?= round($counters->month) ?></li>
						<li>Tổng lượt truy cập: <?= round($counters->year) ?></li>
					
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
			<h5>Copyright @ 2019 <?=@$config->vn_title_site?>. All Reserved. Designed by Tri Viet</h5>
		</div>
	</div>
</section>