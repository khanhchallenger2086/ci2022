<?php 
    $xhtmlBreadcrumb = '';
    if(isset($breadcrumb)){
        $xhtmlBreadcrumb .= '<div class="bc-icons"><nav aria-label="breadcrumb"><ol class="breadcrumb">';
        $xhtmlBreadcrumb .= '<li class="breadcrumb-item"><a href="'.base_url().'">Trang chủ</a></li>';

        foreach($breadcrumb as $k => $row){
            if($k == count($breadcrumb) - 1){
                $xhtmlBreadcrumb .= '<li class="breadcrumb-item active">'.$row['name'].'</li>';
            }else{
                $xhtmlBreadcrumb .= '<li class="breadcrumb-item"><a href="'.$row['url'].'">'.$row['name'].'</a></li>';
            }
        }

        $xhtmlBreadcrumb .= '</ol></nav></div>';
    }
    echo $xhtmlBreadcrumb;
?>



                
                
