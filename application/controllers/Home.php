<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends MY_Controller {

    public function __construct(){

        parent::__construct();

        // $this->load->model('ads_m');

        //$this->load->model('articles_m');

        // $this->load->model('configs_m');

        // $this->load->model('staticpage_m');

        $this->load->model('product_m');

        // $this->load->model('ads_category_m');

        $this->load->model('product_category_m');

    }



    public function index() {  
        // //flag to show or hidden bottom sidebar_product_category
        // $this->data['is_show_bottom_sidebar_product_category'] = 1;
        // $this->data['limit_product_sidebar_sell'] = 5;
        
        //  product-category
 
        $input = array();
        $input['where'] = array('status' => 1, 'pid' => 0);
        // $input['order'][0] = 'position_home';
        // $input['order'][1] = 'ASC';
        $input['limit'] = array(4, 0);
   
        $cate_son = $this->product_category_m->get_list($input);
        if($cate_son) {
            foreach($cate_son as $row) {
                $input = array();
                $input['where'] = array('status' => 1, 'pid' => $row->id);
                $input['limit'] = array(4, 0);
                $row->list_items = $this->product_category_m->get_list($input);  // lấy ra danh mục con 4 cái 
            }
        }
       $this->data['list_product_new'] =  $cate_son;

        //load product top
        $input = array();
        $input['where'] = array('status' => 1, 'pid'=>0);
        $input['order'][0] = 'position_home';
        $input['order'][1] = 'ASC';
        $input['limit'] = array(4, 0);
   
        $obj_cate_top = $this->product_category_m->get_list($input);
        // var_dump($obj_cate_top);
        if($obj_cate_top) {
            foreach($obj_cate_top as $row) {
                $input = array();
                $input['where'] = array('status' => 1, 'cid' => $row->id);
                $input['limit'] = array(4, 0);
                $row->list_items = $this->product_m->get_list($input);
            }
        }
        $this->data['obj_cate_top'] = $obj_cate_top;
      

        // //load partner
        // $input = array();
        // $input['where'] = array('status' => 1, 'cid' => 2);

        // $this->data['list_partner'] = $this->ads_m->get_list($input);

        // //load product
        // $input = array();
        // $input['where'] = array('status' => 1, 'is_home' => 1);
        // $this->data['list_product'] = $this->product_m->get_list($input);

        // //load articles
        // $input1 = array();
        // $input1['where'] = array('status' => 1, 'cid' => 3);
        // $this->data['list_articles'] = $this->articles_m->get_list($input1);


        //list service home
        // $input = array();
        // $input['where'] = array('status' => 1, 'cid' => 3);
        // $input['limit'] = array(8, 0);
        // $this->data['list_service'] = $this->articles_m->get_list($input);

        // //load ABOUTS
        // $input = array();
        // $input['where'] = array('status' => 1, 'id' => 1);

        // $this->data['list_abouts'] = $this->staticpage_m->get_row($input);

        $this->data['temp'] = 'home/index';
        $this->one_col($this->data);

    }





}