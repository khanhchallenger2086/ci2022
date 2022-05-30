<div class="container">
    <!-- start top container -->
    <?php $this->load->view('site/include_elements/top_container')?>
    <!-- end top container -->
    <div class="row">
        <!-- start left container -->
        <?php 
        // $this->load->view('site/include_elements/left_container')
        ?>
        <!-- end left container -->
            
            <?php
                // $xhtmlListItemsNew = '';
                if(!empty($list_product_new)){
                    foreach($list_product_new as $row){
                        if ($row->list_items != []) {
                             
                ?>
            <div class="col-md-12 cotright">
                <div class="container sanphamhome">
                    <h3><?php echo $row->vn_name ?></h3>
                    <div class="row sanphammoi product-page">
                        <div class="main">
                            <div class="product-zone">
                            <?php
                                 $xhtmlListItemsNew = '';
                                    foreach($row->list_items as $item) {

                                            $link_img = base_url().'public/site/img/default-1024x512.png';
                                        
                                            if(!empty($item->image_link)){
                                                // echo $row->one_product;
                                                $link_img = base_url().'uploads/images/product_category/large/'.$item->image_link;
                                            }
                                        
                                            $day    = date('d', $item->created);
                                            $month  = date('m/Y', $item->created);
                                            $xhtmlListItemsNew .= '<div class="box-product">
                                                                        <div class="box-product-img" style="height: 242.984px;">
                                                                            <a href="'.base_url($item->vn_slug).'.html"><img src="'.$link_img.'" alt="'.$item->vn_name.'"></a>
                                                                        </div>
                                                                        <div class="box-product-detail">
                                                                            <h5><a href="'.base_url($item->vn_slug).'.html" title="'.$item->vn_name.'">'.$item->vn_name.'</a></h5>
                                                                            <p>'.$item->code.'</p>
                                                                        </div>
                                                                    </div>';
                                            }
                                    
                                    echo $xhtmlListItemsNew;
                                ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
        }
            }
            ?>



            <?php if(!empty($obj_cate_top)) { ?>
                <?php foreach($obj_cate_top as $row_cate) { 
                    if(!empty($row_cate->list_items)){
                    ?>
                    
                    <div class="container sanphamhome">

                        <h3><?= $row_cate->vn_name ?></h3>
                        <div class="row sanphammoi product-page">
                            <div class="main">
                                <div class="product-zone">
                                    <?php
                                        $xhtmlListItems = '';
                                        // if(!empty($row_cate->list_items)){
                                            foreach($row_cate->list_items as $row){
                                                $link_img = base_url().'public/site/img/default-1024x512.png';
                                                if(!empty($row->image_link)){
                                                    $link_img = base_url().'uploads/images/product/large/'.$row->image_link;
                                                }
                                                $day    = date('d', $row->created);
                                                $month  = date('m/Y', $row->created);
                                                // $xhtmlListItems .= '<div class="col-md-3 col-6 cotmot">
                                                //                         <img src="'.$link_img.'" class="rounded" alt="'.@$config->alt_web.'">
                                                //                         <p class="text-center tieude"><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html">'.$row->vn_name.'</a></p>
                                                //                         <p class="text-center dienthoai">'.@$config->hotline.'</p>
                                                //                         <p class="text-right chitiet">Chi tiết</p>
                                                //                     </div>';
                                                $xhtmlListItems .= '<div class="box-product">
                                                                        <div class="box-product-img" style="height: 242.984px;">
                                                                            <a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html"><img src="'.$link_img.'" alt="'.@$config->alt_web.'"></a>
                                                                        </div>
                                                                        <div class="box-product-detail">
                                                                            
                                                                            <h5><a href="'.base_url($row->vn_slug . '-p' . $row->id).'.html" title="'.$row->vn_name.'">'.$row->vn_name.'</a></h5>
                                                                            <p>'.$row->code.'</p>
                                                                        </div>
                                                                    </div>';
                                            }

                                        // }
                                        echo $xhtmlListItems;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } }?>
            <?php } ?>
        </div>
    </div>
    <!-- start partner -->
    <?php $this->load->view('site/include_elements/partner_container')?>
    <!-- end partner -->
</div>