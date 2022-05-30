<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supports extends MY_Controller {

    private $name_item = 'hỗ trợ';
    private $name_class = 'supports';

    public function __construct() {

        parent::__construct();

        //load model item

        $this->load->model('supports_m', 'item');

    }



    public function index() {



        //get list item

        $list = $this->item->get_list();

        $this->data['list'] = $list;

        $this->data['title'] = 'Danh sách ' . $this->name_item;

        $this->data['temp'] = $this->name_class . '/index';

        $this->load->view('admin/main', $this->data);

    }



    public function detail($id = 0) {

        //check item exist

        if($id){

            $info = $this->item->get_info($id);

            if(!empty($info)){

                $this->data['info'] = $info;

            }else{

                $this->session->set_flashdata('message', 'Dịch vụ muốn chỉnh sửa không tồn tại');

                redirect(base_url() . 'admincp/'.$this->name_class.'/index/');

            }

        }



        if ($this->input->post()) {

            

            $this->form_validation->set_rules('fullname', 'Tên ' . $this->name_item, 'required');



            if ($this->form_validation->run()) {



                //path uplaod to folder

                $path_upload = ROOT_PATH . '/uploads/images/'.$this->name_class.'/';

                //upload image large

                $upload_data = $this->system_library->upload($path_upload, 'image_link');



                $image_link = '';



                //upload

                if ($upload_data != NULL && !isset($info->image_link)) {

                    $image_link = $upload_data;

                } elseif ($upload_data != NULL && $info->image_link) {//edit

                    $image_link = $upload_data;

                    //clear image

                    @unlink($path_upload. $info->image_link);

                } else {

                    $image_link = $info->image_link;

                }

                

                //Kết thúc xử lý hình ảnh

                $data = array(
                    'fullname' => $this->input->post('fullname'),
                    'nick_skype' => $this->input->post('nick_skype', true),
                    'nick_yahoo' => $this->input->post('nick_yahoo', true),
                    'cell' => $this->input->post('cell', true),
                    'email' => $this->input->post('email', true),
                    'status' => $this->input->post('status', true),
                    'created' => now(),

                );



                if (!$id) {

                    if ($this->item->create($data)) {

                        $this->session->set_flashdata('message', 'Thêm '.$this->name_item.' thành công');

                    } else {

                        $this->session->set_flashdata('message', 'Thêm '.$this->name_item.' thất bại');

                    }

                } else {

                    if ($this->item->update($id, $data)) {

                        $this->session->set_flashdata('message', 'Cập nhật '.$this->name_item.' thành công');

                    } else {

                        $this->session->set_flashdata('message', 'Cập nhật '.$this->name_item.' thất bại');

                    }

                }



                if ($pid) {

                    redirect(base_url('admincp/'.$this->name_class.'?id=&vn_name=&cid=' . $cid));

                } else {

                    redirect(base_url() . 'admincp/'.$this->name_class.'/index/');

                }

            }

        }



        if($id){

            $this->data['title'] = 'Chỉnh sửa '. $this->name_item;

        }else{

            $this->data['title'] = 'Thêm ' . $this->name_item;

        }



        $this->data['temp'] = $this->name_class. '/detail';

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



        redirect(base_url('admincp/' . $this->name_class));

    }

    

    



}

