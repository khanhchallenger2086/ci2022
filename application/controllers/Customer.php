<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('ads_m');
    }

    public function index($slug = '') {
        $cid = $slug == 'khach-hang' ? 5 : 5;

        $input['where'] = array(
            'status' => 1,
            'cid' => $cid 
        );
        //get category articles
        // $category = $this->category->get_info($cid);
        // $this->data['category']  = $category;

        $breadcrumb[] = array(
            'url' => "",
            'name' => 'Khach hàng',
        );

        $total_rows = $this->ads_m->get_total($input);
        //load ra thu vien phan trang
        $config = array();
        $config['total_rows'] = $total_rows;
        $config['base_url'] = base_url($slug . '/page/');
        $config['first_url'] = base_url($slug) .'.html';
        $config['per_page'] = 9;
        $config['num_links'] = $total_rows;
        
        //custom pagination
        $config = array_merge($config, $this->system_library->pagination_site());
        //khoi tao cac cau hinh phan trang

        $this->pagination->initialize($config);
        $segment = $this->uri->segment(3);
        $segment = intval($segment);

        $this->data["pagination"] = $this->pagination->create_links();

        $input['limit'] = array($config['per_page'], $segment);

        $this->data['list_items'] = $this->ads_m->get_list($input);

        $this->data['breadcrumb'] = $breadcrumb;
        $this->data['title_site'] = $category->vn_title;
        $this->data['keyword_site'] = $category->vn_keyword;
        $this->data['description_site'] = $category->vn_description;

        $this->data['temp'] = 'customer/index';
        $this->one_col($this->data);
    }

    // public function detail($slug = '') {
    //     $where = array(
    //         'status' => 1,
    //         'vn_slug' => $slug,
    //     );
    //     //get articel by vn_slug
    //     $object = $this->articles_m->get_info_rule($where);

    //     if ($object) {
    //         $this->data['object'] = $object;
    //         $category = $this->category->get_info($object->cid);
    //         $this->data['category']  = $category;
    //         //cap nhat lai luot xem cua san pham
    //         $data = array();
    //         $data['view'] = $object->view + 1;
    //         $this->articles_m->update($object->id, $data);
    //         //get articles related
    //         $input_related['where'] = array(
    //             'id <>' => $object->id,
    //             'cid' => $object->cid,
    //             'status' => 1
    //         );
            
    //         $input_related['limit'] = array(6, 0);
            
    //         $this->data['related_news'] = $this->articles_m->get_list($input_related);

    //         //get breadcrumb
    //         $breadcrumb = array(
    //             array(
    //                 'url' => base_url($category->vn_slug . '.html'),
    //                 'name' => $category->vn_name,
    //             ),
    //             array(
    //                 'url' => '',
    //                 'name' => $object->vn_name,
    //             )
    //         );

    //         $this->data['breadcrumb'] = $breadcrumb;

    //         $this->data['title_site'] = $object->vn_title;
    //         $this->data['keyword_site'] = $object->vn_keyword;
    //         $this->data['description_site'] = $object->vn_description;
    //     }


    //     $this->data['temp'] = 'articles/detail';
    //     $this->one_col($this->data);
    // }


}
