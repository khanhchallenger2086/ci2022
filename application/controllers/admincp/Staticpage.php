<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Staticpage extends MY_Controller {

    function __construct() {
        parent::__construct();
        //load model item
        $this->load->model('staticpage_m', 'item');
    }

    public function index() {
        //get list item
        $list = $this->item->get_list();
        $this->data['list'] = $list;

        $this->data['title'] = 'Danh sách trang tĩnh';
        $this->data['temp'] = 'staticpage/index';
        $this->load->view('admin/main', $this->data);
    }

    public function detail($id = 0) {

        $info = $this->item->get_info($id);

        $this->data['info'] = $info;

        if ($this->input->post()) {

            $this->form_validation->set_rules('vn_name', 'Tên trang tĩnh', 'required');

            if ($this->form_validation->run()) {

                //path uplaod to folder
                $path_upload = ROOT_PATH . '/uploads/images/staticpage/';
                $path_small = $path_upload . 'small/';
                $path_large = $path_upload . 'large/';

                //upload image large
                $upload_data = $this->system_library->upload($path_large, 'image_link');
                $image_link = '';
                //upload
                if ($upload_data != NULL && !isset($info->image_link)) {
                    $image_link = $upload_data;
                    //crop image small
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, 500, 310);
                } elseif ($upload_data != NULL && $info->image_link) {//edit
                    $image_link = $upload_data;
                    //clear image large old
                    @unlink($path_large. $info->image_link);
                    //clear image small old
                    @unlink($path_small. $info->image_link);
                    //crop image new
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, 500, 310);

                } else {

                    $image_link = $info->image_link;

                }




                $data = array(
                    'vn_name' => $this->input->post('vn_name', true),
                    'vn_slug' => $this->input->post('vn_slug', true),
                    'h1' => $this->input->post('h1', true),
                    'h2' => $this->input->post('h2', true),
                    'h3' => $this->input->post('h3', true),
                    'h4' => $this->input->post('h4', true),
                    'h5' => $this->input->post('h5', true),
                    'vn_keyword' => $this->input->post('vn_keyword', true),
                    'vn_title' => $this->input->post('vn_title', true),
                    'vn_description' => $this->input->post('vn_description', true),
                    'title' => $this->input->post('title', true),
                    'vn_sapo' => $this->input->post('vn_sapo'),
                    'vn_detail' => $this->input->post('vn_detail'),
                    'image_link' => $image_link,
                    'status' => $this->input->post('status', true),
                    'created' => now()
                );

                if (!$id) {
                    if ($this->item->create($data)) {
                        $this->session->set_flashdata('message', 'Thêm trang tĩnh thành công');
                    } else {
                        $this->session->set_flashdata('message', 'Thêm trang tĩnh thất bại');
                    }
                } else {
                    if ($this->item->update($id, $data)) {
                        $this->session->set_flashdata('message', 'Cập nhật trang tĩnh thành công');
                    } else {
                        $this->session->set_flashdata('message', 'Cập nhật trang tĩnh thất bại');
                    }
                }

                redirect(base_url('admincp/staticpage'));
            }
        }

        $this->data['title'] = 'Thêm trang tĩnh';

        $this->data['temp'] = 'staticpage/detail';
        $this->load->view('admin/main', $this->data);
    }

    public function config() {

        $name = $this->input->post('name', true); //name obj

        $action = $this->input->post('key', true); //'del_all';

        $id = $this->input->post('id', true);

        $ids = $this->input->post('ids', true); //array(4, 5, 6);

        if ($ids) {
            $array_id = implode(',', $ids);

            $input = 'id IN (' . $array_id . ')';
        }

        $status = 0;
        $msg    = '';

        switch ($action) {
            case 'del': 
                if ($this->item->update($id, array('status' => 3))) {
                    $msg = 'Xóa ' . $name . ' thành công';
                    $status = 3;
                    
                }else {
                    $msg = 'Xóa' . $name . ' không thành công';                   
                }                
                break;
            case 'del_all':
                if ($this->item->update_rule($input, array('status' => 3))) {
                    $msg = 'Xóa ' . count($ids). ' ' . $name . ' thành công';
                    $status = 3;                   
                }else {
                    $msg = 'Xóa ' . $name . ' không thành công';
                }
                break;
            case 'enable':
                if ($this->item->update($id, array('status' => 1))) {
                    $msg = 'Hiển thị ' . $name . ' thành công';
                    $status = 1;
                    
                }else {
                    $msg = 'Hiển thị ' . $name . ' không thành công';
                }
                break;
            case 'enable_all':
                if ($this->item->update_rule($input, array('status' => 1))) {
                    $msg = 'Hiển thị ' . count($ids). ' ' . $name . ' thành công';
                    $status = 1;                   
                }else {
                    $msg = 'Hiển thị ' . $name . ' không thành công';
                }
                break;
            case 'disable':
                if ($this->item->update($id, array('status' => 2))) {
                    $msg = 'Ẩn ' . $name . ' thành công';
                    $status = 2;
                    
                }else {
                    $msg = 'Ẩn' . $name . ' không thành công';
                }
                break;

            case 'disable_all':
                if ($this->item->update_rule($input, array('status' => 2))) {
                    $msg = 'Ẩn ' . count($ids). ' ' . $name . ' thành công';
                    $status = 2;                   
                }else {
                    $msg = 'Ẩn ' . $name . ' không thành công';
                }
                break;
        }
        //return string JSON
        echo json_encode(array('msg' => $msg, 'status' => $status));
    }

    public function clean_trash() {

        $where['where'] = array(
            'status' => 3
        );
        $check_del = $this->item->get_list($where);

        if ($check_del) {

            if ($this->item->del_rule("status = 3")) {
                $this->session->set_flashdata('message', 'Dọn rác thành công');
            }
        } else {
            $this->session->set_flashdata('message', 'Không có gì trong thùng rác');
        }

        redirect(base_url('admincp/staticpage'));
    }
}
