<div class="d-lg-block d-none col-md-3">
    <div class="container menuleft category-body">
        <!-- <h4 class="text-center">Danh mục sản phẩm</h4>
        <ul class="nav flex-column">
            <?php
                        // $xhtmlListCateMenu1 = '';
                        // if(!empty($categorys)){
                        //     foreach($categorys as $row){
                        //         $xhtmlListCateMenu1 .= '<li class="nav-item">';
                        //             $xhtmlListCateMenu1 .=  '<a class="nav-link" href="'.base_url($row->vn_slug).'.html">'.$row->vn_name.'</a>';
                        //             if(!empty($row->subs)) {
                        //                 $xhtmlListCateMenu1 .= '<ul>';
                        //                 foreach($row->subs as $row_subs){
                        //                     $xhtmlListCateMenu1 .= '<li><a href="'.base_url($row_subs->vn_slug).'.html" title="'.$row_subs->vn_name.'">'.$row_subs->vn_name.'</a></li>';
                        //                 }
                        //                 $xhtmlListCateMenu1 .= '</ul>';
                        //             }
                        //         $xhtmlListCateMenu1 .=   '</li>';
                        //     }

                        // }
                        // echo $xhtmlListCateMenu1;
                    ?>
        </ul> -->

        <div class="category-body">
        <h4 class="text-center">Danh mục sản phẩm</h4>
   <ul>
   <?php
        $xhtmlListCateMenu1 = '';
        if(!empty($categorys)){
            foreach($categorys as $row){
                $xhtmlListCateMenu1 .= '<li class="nav-item">';
                    $xhtmlListCateMenu1 .=  '<a class="nav-link" href="'.base_url($row->vn_slug).'.html">'.$row->vn_name.'</a>';
                    if(!empty($row->subs)) {
                        $xhtmlListCateMenu1 .= '<ul>';
                        foreach($row->subs as $row_subs){
                            $xhtmlListCateMenu1 .= '<li><a href="'.base_url($row_subs->vn_slug).'.html" title="'.$row_subs->vn_name.'">'.$row_subs->vn_name.'</a></li>';
                        }
                        $xhtmlListCateMenu1 .= '</ul>';
                    }
                $xhtmlListCateMenu1 .=   '</li>';
            }

        }
        echo $xhtmlListCateMenu1;
    ?>
   </ul>
</div>

    </div>
    <div class="container menuleft">
        <h4 class="text-center">Hỗ Trợ Trực Tuyến</h4>
        <!-- <div class="title_main">Hỗ Trợ Trực Tuyến</div> -->
        <?php
					$xhtmlListSupport = '';
					if(!empty($list_supports)){
						foreach($list_supports as $k_sld => $row){
                            $xhtmlListSupport .= '<div class="row hotroleft">
                                                    <div class="col-md-2 col text-center"><img src="'. base_url('public/site/') .'images/index_47.gif" class="rounded"
                                                            alt="'.$row->fullname.'"> </div>
                                                    <div class="col-md-10 col text-left">
                                                        <p>'.$row->cell.'</p>
                                                    </div>
                                                </div>';
						}

					}
					echo $xhtmlListSupport;
				?>
        <div class="row mangxh">
            <div class="col-md-3 col">
                <img src="<?=base_url('public/site/')?>images/index_51.gif" class="rounded" alt="New York">
            </div>
            <div class="col-md-3 col">
                <img src="<?=base_url('public/site/')?>images/index_53.gif" class="rounded" alt="New York">
            </div>
            <div class="col-md-3 col">
                <img src="<?=base_url('public/site/')?>images/index_56.gif" class="rounded" alt="New York">
            </div>
            <div class="col-md-3 col">
                <img src="<?=base_url('public/site/')?>images/index_59.gif" class="rounded" alt="New York">
            </div>
        </div>

    </div>
    <div class="container menuleft d-none d-sm-block">
        <h4 class="text-center">Thống kê truy cập</h4>
        <!-- <div class="title_main">Thống kê truy cập</div> -->

        <div class="row hotroleft">
            <div class="col-md-4 col text-center"><img width="100" src="<?=base_url('public/site/')?>images/index_65.gif"
                    class="rounded" alt="New York"> </div>
            <div class="col-md-8 col text-left">
                <p>Online : <?= $userOnline ?></p>
                <p>Tổng truy cập : <?= round($counters->year) ?></p>
            </div>
        </div>


    </div>

    <div class="container menuleft d-none d-sm-block dkm">
        <h4 class="text-center">Dịch vụ của chúng tôi</h4>
        <!-- <div class="title_main">Dịch vụ của chúng tôi</div> -->

        <div class="hotroleft">
        <?php
                $xhtmlListArticle = '';
                if(!empty($list_articles)){
                    foreach($list_articles as $k_sld => $row){
                        $link_img = base_url().'public/site/img/default-1024x512.png';
                        if(!empty($row->image_link)){
                            $link_img = base_url().'uploads/images/articles/small/'.$row->image_link;
                        }
                        $xhtmlListArticle .= '<div class="box-seller">
                                                <div class="box-seller-img">
                                                    <a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html"><img src="'.$link_img.'"></a>
                                                </div>
                                                <div class="box-seller-detail">
                                                    <h6>
                                                        <a href="'.base_url($row->vn_slug . '-a' . $row->id) .'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a>
                                                    </h6>
                                                </div>
                                            </div>';
                    }

                }
                echo $xhtmlListArticle;
            ?>
        </div>
        <div class="hotroleft">
            <?php
					$xhtmlListBannerLeftHome = '';
					if(!empty($list_banner_left_home)){
						foreach($list_banner_left_home as $k_sld => $row){
							$link_img = base_url().'public/site/img/default-1024x512.png';
							if(!empty($row->image_link)){
								$link_img = base_url().'uploads/images/ads/'.$row->image_link;
							}
							$classActive = $k_sld == 0 ? 'active' : '';
							$xhtmlListBannerLeftHome .= '<div class="banner-left">
													<a href="'.$row->link.'"><img src="'.$link_img.'" alt="'.$row->vn_name.'"></a>
												</div>';
						}

					}
					echo $xhtmlListBannerLeftHome;
			?>
        </div>
    </div>
</div>