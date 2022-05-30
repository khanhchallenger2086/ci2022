<div class="row hatop">
        <div class="col-md-3">
            <?php
					if(!empty($one_top_container)){
							$link_img = base_url().'public/site/img/default-1024x512.png';
							if(!empty($one_top_container->image_link)){
								$link_img = base_url().'uploads/images/ads/'.$one_top_container->image_link;
							}
                            echo '<img src="'.$link_img.'" class="rounded" alt="'.$one_top_container->vn_name.'">';
					}
				?>
        </div>

        <div class="col-md-9 col-ms-12">
            <div class="row col-ms-12">
                <?php
					$xhtmlListTopContainer= '';
					if(!empty($list_top_container)){
						foreach($list_top_container as $k_sld => $row){
							$link_img = base_url().'public/site/img/default-1024x512.png';
							if(!empty($row->image_link)){
								$link_img = base_url().'uploads/images/ads/'.$row->image_link;
							}
                            $xhtmlListTopContainer .= '<div class="col-md-3 col">
                                                        <img src="'.$link_img.'" class="rounded" alt="'.$row->vn_name.'">
                                                    </div>';
						}

					}
					echo $xhtmlListTopContainer;
				?>
            </div>

        </div>
    </div>