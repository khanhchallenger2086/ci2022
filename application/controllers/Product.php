<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    private $name_class = 'product';

    public function __construct() {
        parent::__construct();
        //load model item
        $this->load->model('product_m', 'item');
        //load model category_item
        $this->load->model('product_category_m', 'category_item');
    }

    public function index() {

        $slug = 'san-pham';

        $where = array(
            'status' => 1
        );

        $breadcrumb[] = array(
            'url' => '',
            'name' => 'Sản phẩm',
        );

        $total_rows = $this->item->get_total($input);
        //load ra thu vien phan trang
        $config = array();
        $config['total_rows'] = $total_rows;
        $config['base_url'] = base_url($slug . '/page/');
        $config['first_url'] = base_url($slug) .'.html';
        $config['per_page'] = 12;
        $config['num_links'] = 5;
        
        //custom pagination
        $config = array_merge($config, $this->system_library->pagination_site());
        //khoi tao cac cau hinh phan trang

        $this->pagination->initialize($config);
        $segment = $this->uri->segment(3);
        $segment = intval($segment);

        $this->data["pagination"] = $this->pagination->create_links();

        $input['limit'] = array($config['per_page'], $segment);

        $this->data['list_items'] = $this->item->get_list($input);
//         echo "<pre>";
//    print_r($this->item->get_list($input));
// echo "</pre>";
        $this->data['breadcrumb'] = $breadcrumb;
        $this->data['title_site'] = $category->vn_title;
        $this->data['keyword_site'] = $category->vn_keyword;
        $this->data['description_site'] = $category->vn_description;

        $this->data['temp'] = $this->name_class . '/index';
        $this->one_col($this->data);
    }

    public function category($slug = '') {

        $where = array(
            'status' => 1,
            'vn_slug' => $slug
        );

        $category = $this->category_item->get_info_rule($where);
        

        if ($category) {
            if($category->pid == 0) {
                //set breadcrumb
                $breadcrumb[] = array(
                    'url' => "",
                    'name' => $category->vn_name,
                );
                //get list articles_category has pid
                $where = array();
                $where['where'] = array('status' => 1, 'pid' => $category->id);
                $list_category_sub = $this->category_item->get_list($where);
                if($list_category_sub) {
                    foreach($list_category_sub as $row) {
                        $array_cid[] = $row->id;
                    }
                    //set where
                    $input['where_in'] = array('cid', $array_cid);
                    $input['where'] = array('status' => 1);
                }else {
                    //set where
                    $input['where'] = array(
                        'status' => 1,
                        'cid' => $category->id,
                    );
                }
            }else {
                $category_parent = $this->category_item->get_info($category->pid);
                if($category_parent) {
                    $breadcrumb[] = array(
                        'url' => base_url() . $category_parent->vn_slug . '.html',
                        'name' => $category_parent->vn_name,
                    );
                    $breadcrumb[] = array(
                        'url' => "",
                        'name' => $category->vn_name,
                    );
                }
                //set where
                $input['where'] = array(
                    'status' => 1,
                    'cid' => $category->id,
                );
            }

            $total_rows = $this->item->get_total($input);
            //load ra thu vien phan trang
            $config = array();
            $config['total_rows'] = $total_rows;
            $config['base_url'] = base_url($slug . '/page/');
            $config['first_url'] = base_url($slug) .'.html';
            $config['per_page'] = 12;
            $config['num_links'] = 5;
            
            //custom pagination
            $config = array_merge($config, $this->system_library->pagination_site());
            //khoi tao cac cau hinh phan trang

            $this->pagination->initialize($config);
            $segment = $this->uri->segment(3);
            $segment = intval($segment);

            $this->data["pagination"] = $this->pagination->create_links();

            $input['limit'] = array($config['per_page'], $segment);

            $this->data['list_items'] = $this->item->get_list($input);

            $this->data['category'] = $category;
            $this->data['breadcrumb'] = $breadcrumb;
            $this->data['title_site'] = $category->vn_title;
            $this->data['keyword_site'] = $category->vn_keyword;
            $this->data['description_site'] = $category->vn_description;
        }
        $this->data['temp'] = $this->name_class . '/category';
        if($category->pid != 0) {//check load view cate cummins
            $this->data['temp'] = $this->name_class . '/category _cummins';
        }
        $this->one_col($this->data);
    }
   

    public function detail($slug = '', $id = '') {
        $where = array(
            'status' => 1,
            'vn_slug' => $slug,
        );
        //get item by vn_slug
        $object = $this->item->get_info_rule($where);

        if ($object) {
            $this->data['object'] = $object;
            $category = $this->category_item->get_info($object->cid);
            $this->data['category']  = $category;
            //cap nhat lai luot xem cua san pham
            $data = array();
            $data['view'] = $object->view + 1;
            $this->item->update($object->id, $data);
            //get articles related
            $input_related['where'] = array(
                'id <>' => $object->id,
                'cid' => $object->cid,
                'status' => 1
            );
            $input_related['order'][0] = 'id';
            $input_related['order'][1] = 'RANDOM';
            
            $input_related['limit'] = array(3, 0);
            
            $this->data['related_news'] = $this->item->get_list($input_related);

            //get breadcrumb
            $breadcrumb = array(
                array(
                    'url' => base_url($category->vn_slug . '.html'),
                    'name' => $category->vn_name,
                ),
                array(
                    'url' => '',
                    'name' => $object->vn_name,
                )
            );

            $this->data['breadcrumb'] = $breadcrumb;

            $this->data['title_site'] = $object->vn_title;
            $this->data['keyword_site'] = $object->vn_keyword;
            $this->data['description_site'] = $object->vn_description;
        }


        $this->data['temp'] = $this->name_class . '/detail';
        $this->one_col($this->data);
    }

    public function search() {

        if($_GET['key_search'] || $_GET['cid'] > 0) {
            $input['where']['status'] = 1;
            //set where  
            $key_search = $_GET['key_search'];
            if($key_search != '') {
                $input['like'] = array('vn_name', $_GET['key_search']);
            }
            //set where cid (id category product)
            if($_GET['cid']) {
                $input['where']['cid'] = $_GET['cid'];
            }
            $this->data['list_items'] = $this->item->get_list($input);
            $this->data['key_search'] = $key_search;
            $this->data['cid'] =  $_GET['cid'];
        }
        
        //get breadcrumb
        $breadcrumb = array(
            array(
                'url' => '',
                'name' => 'Tìm kiếm',
            )
        );
        $this->data['breadcrumb'] = $breadcrumb;
        $this->data['title_site'] = 'Tìm kiếm';
        $this->data['keyword_site'] = 'Tìm kiếm';
        $this->data['description_site'] = 'Tìm kiếm';
        $this->data['temp'] = $this->name_class . '/search';
        $this->one_col($this->data);
    }
    
    
    //ajax watch faster product
    public function ajax_get_item() {
        $xhtml = null;
        if($_POST['id'] > 0) {    
            $id = $_POST['id'];
            $item = $this->item->get_info($id);
            if($item) {
                $link_img = base_url().'public/site/img/default-1024x512.png';
                if(!empty($item->image_link)){
                    $link_img = base_url().'uploads/images/product/small/'.$item->image_link;
                }
                $xhtml .= '<div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Xem nhanh sản phẩm</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="modal-img"><img src="'.$link_img.'" /></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="quickview-detail">
                                            <h3>'.$item->vn_name.'</h3>
                                            <h4 class="price-product">Giá: Liên hệ</h4>
                                            <h5>'.$item->vn_sapo.'</h5>
                                            <div class="quantity"><a href="'.base_url('lien-he.html').'">Liên hệ đặt hàng ngay</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-dismiss="modal">Đóng</button>
                            </div>';
            }
        }
        echo $xhtml;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
