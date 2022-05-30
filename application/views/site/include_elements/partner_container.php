<div class="row doitac d-none d-sm-block">
        <div class="container">
            <h3> <a href="#">Đối tác</a>
                <div class="row">
                    <div class="autoplay slider">
                        <?php
                            // $xhtmlListPartner = '';
                            if(!empty($list_partner)){
                                foreach($list_partner as $k_sld => $row){
                                    $link_img = base_url().'public/site/img/default-1024x512.png';
                                    if(!empty($row->image_link)){
                                        $link_img = base_url().'uploads/images/ads/'.$row->image_link;
                                    }
                                     ?>
                                    <div>
                                        <img src="<?php echo $link_img?>" class="rounded" alt="<?php echo $row->vn_name?>">
                                    </div>';
                                <?php
                                }

                            }
                            // echo $xhtmlListPartner;
                        ?>
                        </div>
                    </div>
                </div>
        </div>

    </div>

   
			