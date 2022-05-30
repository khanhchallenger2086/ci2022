<?php



Class MY_Controller extends CI_Controller {



    //bien gui du lieu sang ben view

    public $data = array();



    function __construct() {

        //ke thua tu CI_Controller

        parent::__construct();



        $controller = $this->uri->segment(1);

        switch ($controller) {

            case 'admincp' : {

                    $this->_check_login();

                    break;

                }

            default: {



                    $this->load->model('configs_m');



                    $where = array('key' => 'general');



                    $config = $this->configs_m->get_info_rule($where);



                    $config = json_decode($config->values);



                    $this->data['config'] = $config;



                    #Meta head

                    $this->data['title_page'] = $config->vn_title_site;



                    $this->data['keyword_page'] = $config->vn_keyword_site;



                    $this->data['description_page'] = $config->vn_description_site;



                    $this->data['url'] = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];



                    $this->data['img_page'] = base_url('public/site/images/bannerfacebook.jpg');



                    $this->user_online();

                }

        }

    }



    public function one_col($data) {
        $this->load->model('product_category_m');
        $this->load->model('product_m');
        $this->load->model('supports_m');
        $this->load->model('ads_m');
        $this->load->model('articles_m');
        $this->load->model('staticpage_m');
        $this->load->model('articles_category_m');

        $input_cate['where'] = array('status' => 1, 'pid' => 0);
        $input_cate['order'][0] = 'position';
        $input_cate['order'][1] = 'ASC';
        //get list product_category
        $categorys = $this->product_category_m->get_list($input_cate);
        foreach ($categorys as $row) {
            $input_cate['where'] = array('status' => 1, 'pid' => $row->id);
            $input_cate['order'][0] = 'position';
            $input_cate['order'][1] = 'ASC';
            $subs = $this->product_category_m->get_list($input_cate);
            $row->subs = $subs;
        }

        $data['categorys'] = $categorys;

        //get list product sell
        // $input = array();
        // $input['where'] = array('status' => 1, 'is_sell' => 1);
        // $input['limit'] = array(6, 0);

        // $data['list_product_sell'] = $this->product_m->get_list($input);


        //get list chinh sach home
        // $input = array();
        // $input['where'] = array('status' => 1, 'cid' => 3);
        // $input['limit'] = array(4, 0);
        // $input['order'][0] = 'id';
        // $input['order'][1] = 'ASC';
        // $data['chinh_sach_home'] = $this->ads_m->get_list($input);
        
        //get list chăm sóc khách hàng
        $input = array();
        $input['where'] = array('status' => 1);
        $data['list_supports'] = $this->supports_m->get_list($input);
        //get logo
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>2);
        $data['logo_menu'] = $this->ads_m->get_row($input);

        //list slider
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>1);
        $data['slider_home'] = $this->ads_m->get_list($input);

        //list partner
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>7);
        $data['list_partner'] = $this->ads_m->get_list($input);
        //list banner left home
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>9);
        $input['limit'] = array(3, 0);
        $data['list_banner_left_home'] = $this->ads_m->get_list($input);
        //list top container
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>8, 'id <>' => 73);
        $data['list_top_container'] = $this->ads_m->get_list($input);
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>8, 'id' => 73);
        $data['one_top_container'] = $this->ads_m->get_row($input);

        //list image real
        // $input = array();
        // $input['where'] = array('status' => 1, 'cid' =>6);
        // $input['limit'] = array(4, 0);
        // $data['list_image_real'] = $this->ads_m->get_list($input);
        //banner
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>1);

        $data['banner'] = $this->ads_m->get_row($input);
        
                //list articles_m
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>3);
        $input['limit'] = array(5, 0);
        $data['list_articles'] = $this->articles_m->get_list($input);
        //get one row dịch vụ
        $input = array();
        $input['where'] = array('status' => 1, 'id' =>3);
        $data['article_menu'] = $this->articles_category_m->get_row($input);
        //list service footer
        // $input = array();
        // $input['where'] = array('status' => 1, 'cid' =>5);
        // $input['limit'] = array(5, 0);
        // $data['list_service_footer'] = $this->articles_m->get_list($input);
        //about sapo home
        // $input = array();
        // $input['where'] = array('status' => 1, 'id' =>1);
        // $data['about_sapo'] = $this->staticpage_m->get_row($input);
        //
        $input = array();
        $input['where'] = array('status' => 1, 'cid' =>4);
        $data['favi'] = $this->ads_m->get_row($input);
        $this->load->view('site/layout', $data);

    }



    /*

     * Kiem tra trang thai dang nhap cua admin

     */



    private function _check_login() {



        $controller = $this->uri->rsegment('1');

        $controller = strtolower($controller);



        $login = $this->session->userdata('isCheckLogin');

        //neu ma chua dang nhap,ma truy cap 1 controller khac login

        if (!$login && $controller != 'login') {

            redirect(base_url('admincp/login'));

        }

        //neu ma admin da dang nhap thi khong cho phep vao trang login nua.

        if ($login && $controller == 'login') {

            redirect(base_url('admincp/home'));

        }

    }



    public function user_online() {

        $session_id = session_id();



        $time = time();



        $timeRefresh = 15 * 60;



        $timeNew = $time - $timeRefresh;



        $local = $_SERVER['PHP_SELF'];



        $this->load->model('useronline_m');

        $this->load->model('counters_m');

        $this->counters_m->resetCounter();

        $check = $this->useronline_m->checkExits($session_id);

        if ($check == 1) {

            $this->useronline_m->updateTime($time, $local, $session_id);

        } else {



            $datas = array('session_id' => $session_id,

                'time' => $time,

                'local' => $local);



            $this->useronline_m->addDatas($datas);

        }

        $this->useronline_m->clear($timeNew);

        $this->counters_m->update();

        $counters = $this->counters_m->getCounter();

        $this->data['counters'] = $counters;

        $this->data['userOnline'] = $this->useronline_m->getOnline();

    }



}