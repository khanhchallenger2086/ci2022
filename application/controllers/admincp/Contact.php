<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('contact_m');
    }

    public function index() {
        $this->data['list'] = $this->contact_m->get_list();

        $this->data['title'] = 'Danh sách liên hệ';
        $this->data['temp'] = 'contact/index';
        $this->load->view('admin/main', $this->data);
    }

    public function view($id = 0) {

        $view = $this->contact_m->get_info($id);

        if ($view) {

            $this->contact_m->update($id, array('status' => 1));

            $this->data['view'] = $view;
        }

        $this->load->view('admin/contact/view', $this->data);
    }

    public function del() {
        $id = $this->uri->rsegment('3');
        $id = intval($id);

        //lay thong tin cua quan tri vien
        $info = $this->contact_m->get_info($id);
        if (!$info) {
            $this->session->set_flashdata('message', 'Thông tin tài khoản không tồn tại');
            redirect(base_url('admincp/contact'));
        }
        //thuc hiện xóa
        $this->contact_m->delete($id);

        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(base_url('admincp/contact'));
    }

    public function ajax_view_contact($id) {
        $xhtml = '';
        if($id) {
            //lay thong tin don hang
            $info = $this->contact_m->get_info($id);
            if($info) {
                //upload status = 1
                $data =  array('status' => 1);
                $this->contact_m->update($id, $data);
                $xhtml .= '<div class="modal-header">
                                <h5 class="modal-title">Chi tiết liên hệ</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="order-detail">
                                    <h4>Thông tin liên hệ</h4>
                                    <ul>
                                        <li>
                                            <h5>Họ tên:</h5><span>'.$info->name.'</span>
                                        </li>
                                        <li>
                                            <h5>Điện thoại:</h5><span>'.$info->phone.'</span>
                                        </li>
                                        <li>
                                            <h5>Email:</h5><span>'.$info->email.'</span>
                                        </li>
                                        <li>
                                            <h5>Địa chỉ:</h5><span>'.$info->address.'</span>
                                        </li>
                                        <li>
                                            <h5>Lời nhắn:</h5><span>'.$info->content.'</span>
                                        </li>
                                    </ul>
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
