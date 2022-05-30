<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends MY_Controller {

    public function __construct() {
        parent::__construct();

           $this->load->model('orders_m');
              $this->load->model('order_item_m');

        $this->load->model('product_m');

    }

    public function index() {

      

        $order = $this->orders_m->get_list($input);

        $this->data['list'] = $order;

        $this->data['title'] = 'Danh sách đơn hàng';

        $this->data['temp'] = 'orders/index';
        $this->load->view('admin/main', $this->data);
    }

    public function view($id = 0) {

        $view = $this->orders_m->get_info($id);

       $data= array(
        'status' => 2,

       );
       if ($this->orders_m->update($id, $data)) {
                         redirect(base_url() . 'admincp/order');
                    } else {
                        redirect(base_url() . 'admincp/order');
                    }


    }

    public function del($id) {

        $del = $this->order_m->get_info($id);

        if ($del) {

            if ($this->order_m->update($id, array("status" => 3))) {
                redirect(base_url('admincp/order'));
            }
        }
    }

    public function clean_trash() {

        $where['where'] = array(
            'status' => 3
        );
        $check_del = $this->order_m->get_list($where);

        if ($check_del) {

            if ($this->order_m->del_rule("status = 3")) {
                $this->session->set_flashdata('message', 'Dọn rác thành công');
            }
        } else {
            $this->session->set_flashdata('message', 'Không có gì trong thùng rác');
        }

        redirect(base_url('admincp/ads'));
    }
       function detail($id='0'){

      $orderObject = $this->orders_m->getObject('id',$id);

      $this->data['orderObject'] = $orderObject;

         $this->data['temp'] = 'orders/detail';
        $this->load->view('admin/main', $this->data);
    }

}
