<div class="seller">
    <div class="title-left">
        <h4>Sản phẩm bán chạy</h4>
    </div>
    <div class="seller-zone">
        <?php
            //show list product
            $xhtmlListItems = '';
            if(!empty($list_product_sell)){
                foreach($list_product_sell as $key => $row_item){
                    $link_img = base_url().'public/site/img/default-1024x512.png';
                    if(!empty($row_item->image_link)){
                        $link_img = base_url().'uploads/images/product/small/'.$row_item->image_link;
                    }
                    if(isset($limit_product_sidebar_sell)) {
                        if($key < $limit_product_sidebar_sell) {
                            $xhtmlListItems .= '<div class="box-seller">
                                                    <div class="box-seller-img">
                                                        <a href="'.base_url($row_item->vn_slug . '-p' . $row_item->id).'.html"><img src="'.$link_img.'" alt="'.@$config->alt_web.'"/></a>
                                                    </div>
                                                    <div class="box-seller-detail">
                                                        <h5><a href="'.base_url($row_item->vn_slug . '-p' . $row_item->id).'.html" title="'.$row_item->vn_name.'">'.$row_item->vn_name.'</a></h5>
                                                        <p>MSP: '.$row_item->code.'</p>
                                                    </div>
                                                </div>'; 
                        }
                    }else {
                        $xhtmlListItems .= '<div class="box-seller">
                                                <div class="box-seller-img">
                                                    <a href="'.base_url($row_item->vn_slug . '-p' . $row_item->id).'.html"><img src="'.$link_img.'" alt="'.@$config->alt_web.'"/></a>
                                                </div>
                                                <div class="box-seller-detail">
                                                    <h5><a href="'.base_url($row_item->vn_slug . '-p' . $row_item->id).'.html" title="'.$row_item->vn_name.'">'.$row_item->vn_name.'</a></h5>
                                                    <p>MSP: '.$row_item->code.'</p>
                                                </div>
                                            </div>'; 
                    }   
                }
            }
            echo $xhtmlListItems;
        ?>
    </div>
</div>