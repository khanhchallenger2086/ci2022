<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
    private $name_item = 'sản phẩm';
    private $name_class = 'product';
    
    public function __construct() {
        parent::__construct();
        
        //load model item

        $this->load->model('product_m', 'item');
        $this->load->model('configs_m');
    }

    public function index() {

        $this->data['temp'] = 'home/index';
        $this->load->view('admin/main', $this->data);
    }
 public function huycute() {

        $this->data['temp'] = 'home/huycute';
        $this->load->view('admin/main', $this->data);
    }
    public function top() {
        $where = array(
            'key' => 'home-top'
        );

        $obj_general = $this->configs_m->get_info_rule($where);
        $general = json_decode($obj_general->values);
        $this->data['general'] = $general;

        if ($this->input->post()) {
            //path uplaod to folder home
            $path = ROOT_PATH . '/uploads/images/home/';
            //upload image new
            $files = $_FILES['image_link'];
            $image = null;
            foreach($files['name'] as $key => $val_name) {
                if($val_name) {
                    $file_name = now() . '-' . $val_name;
                    move_uploaded_file($files['tmp_name'][$key], $path . $file_name);
                    $image[] = $file_name;
                }else {
                    $image[] = 0;
                }
            }
            //clear image old
            $image_link =  json_decode($general->image_link);
            if($image_link) {
                foreach($image_link as $k => $val) {
                    //kiểm tra hình có được cập nhật, nếu có thì xóa hình cũ, ngược lại lưu lại tên hình cũ
                    if($image[$k]) {
                        @unlink($path . $val);
                    }else {
                        $image[$k] = $val;
                    }
                }
            }

            $value = array(
                'title' => json_encode($this->input->post('title', true)),
                'content' => json_encode($this->input->post('content', true)),
                'image_link' => json_encode($image),
            );
            $data = array(
                'values' => json_encode($value)
            );

            if ($this->configs_m->update(2, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
            }

            redirect(base_url() . 'admincp/home/top');
        }
        $this->data['title'] = 'Nhập liệu home top';
        $this->data['temp'] = 'home/top';
        $this->load->view('admin/main', $this->data);
    }

    public function about() {
        $where = array(
            'key' => 'about'
        );

        $obj_general = $this->configs_m->get_info_rule($where);
        $general = json_decode($obj_general->values);
        $this->data['general'] = $general;

        if ($this->input->post()) {
            //path uplaod to folder home
            $path = ROOT_PATH . '/uploads/images/home/';
            
            $files = $_FILES['image_link'];
            $image = null;
            if($files['name']) {
                $file_name = now() . '-' . $files['name'];
                //clear image old
                @unlink($path . $general->image_link);
                //upload image new
                move_uploaded_file($files['tmp_name'], $path . $file_name);
                $image = $file_name;
            }else {
                $image = $general->image_link;
            }

            $value = array(
                'title' => $this->input->post('title', true),
                'content' => $this->input->post('content', true),
                'link' => $this->input->post('link', true),
                'image_link' => $image
                
            );
            $data = array(
                'values' => json_encode($value)
            );

            if ($this->configs_m->update(3, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
            }

            redirect(base_url() . 'admincp/home/about');
        }
        $this->data['title'] = 'Giới thiệu';
        $this->data['temp'] = 'home/about';
        $this->load->view('admin/main', $this->data);
    }

    public function thong_ke() {
        $where = array(
            'key' => 'thong-ke'
        );


        $obj_general = $this->configs_m->get_info_rule($where);
        $general = json_decode($obj_general->values);
        $this->data['general'] = $general;

        if ($this->input->post()) {
            //path uplaod to folder home
            $path = ROOT_PATH . '/uploads/images/home/';
            //upload image new
            $files = $_FILES['image_link'];
            $image = null;
            foreach($files['name'] as $key => $val_name) {
                if($val_name) {
                    $file_name = now() . '-' . $val_name;
                    move_uploaded_file($files['tmp_name'][$key], $path . $file_name);
                    $image[] = $file_name;
                }else {
                    $image[] = 0;
                }
            }
            //clear image old
            $image_link =  json_decode($general->image_link);
            if($image_link) {
                foreach($image_link as $k => $val) {
                    //kiểm tra hình có được cập nhật, nếu có thì xóa hình cũ, ngược lại lưu lại tên hình cũ
                    if($image[$k]) {
                        @unlink($path . $val);
                    }else {
                        $image[$k] = $val;
                    }
                }
            }

            $value = array(
                'title' => json_encode($this->input->post('title', true)),
                'content' => json_encode($this->input->post('content', true)),
                'image_link' => json_encode($image),
            );
            $data = array(
                'values' => json_encode($value)
            );

            if ($this->configs_m->update(4, $data)) {
                $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
            }

            redirect(base_url() . 'admincp/home/thong_ke');
        }
        $this->data['title'] = 'Thống kê';
        $this->data['temp'] = 'home/thong_ke';
        $this->load->view('admin/main', $this->data);
    }

}
