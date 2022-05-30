<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Customer extends MY_Controller {



    public function __construct() {

        parent::__construct();

        //load model item

        $this->load->model('ads_m', 'item');

        //load model category_item

        $this->load->model('ads_category_m', 'category_item');

    }



    public function index() {





        //get list item

        $input = array();

        $input['where'] = array('cid' => 5);
        $list = $this->item->get_list($input);

        //get category name

        foreach($list as $row) {

            $obj_product_category = $this->category_item->get_info($row->cid);

            $row->name_category = $obj_product_category->vn_name;

        }

        $this->data['list'] = $list;

        //get category item

        $input['where'] = array('pid' => 0);

        $catalogs = $this->category_item->get_list($input);



        foreach ($catalogs as $row) {

            $input['where'] = array('pid' => $row->id);

            $subs = $this->category_item->get_list($input);

            $row->subs = $subs;

        }       

        $this->data['catalogs'] = $catalogs;



        $this->data['title'] = 'Danh sách khách hàng';

        $this->data['temp'] = 'customer/index';

        $this->load->view('admin/main', $this->data);

    }



    public function detail($id = 0) {

        $input = array();

        $input['where'] = array('pid' => 0, 'status' => 1);

        $catalogs = $this->category_item->get_list($input);

        foreach ($catalogs as $row) {

            $input['where'] = array('pid' => $row->id, 'status' => 1);

            $subs = $this->category_item->get_list($input);

            $row->subs = $subs;

        }

        $this->data['catalogs'] = $catalogs;



        $info = $this->item->get_info($id);



        $this->data['info'] = $info;



        if ($this->input->post()) {



            $this->form_validation->set_rules('vn_name', 'Tên khách hàng', 'required');



            //$this->form_validation->set_rules('cid', 'Danh mục khách hàng', 'required');



            if ($this->form_validation->run()) {
                $cid = $this->input->post('cid', true);
                //path uplaod to folder
                $path_upload = ROOT_PATH . '/uploads/images/customer/';
                $path_small = $path_upload . 'small/';
                $path_large = $path_upload . 'large/';

                //upload image large
                $upload_data = $this->system_library->upload($path_large, 'image_link');
                $image_link = '';

                $width = 677;
                $height = 449;
                //upload
                if ($upload_data != NULL && !isset($info->image_link)) {
                    $image_link = $upload_data;
                    //crop image small
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, $width, $height);
                } elseif ($upload_data != NULL && $info->image_link) {//edit
                    $image_link = $upload_data;
                    //clear image large old
                    @unlink($path_large. $info->image_link);
                    //clear image small old
                    @unlink($path_small. $info->image_link);
                    //crop image new
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, $width, $height);
                } else {
                    $image_link = $info->image_link;
                }



                $data = array(

                    'cid' => 5,

                    'vn_name' => $this->input->post('vn_name', true),

                    'vn_sapo' => $this->input->post('vn_sapo', true),

                    'link' => $this->input->post('link', true),

                    'image_link' => $image_link,

                    'status' => $this->input->post('status', true),

                    'created' => now(),

                );



                if (!$id) {



                    if ($this->item->create($data)) {

                        $this->session->set_flashdata('message', 'Thêm khách hàng thành công');

                    } else {

                        $this->session->set_flashdata('message', 'Thêm khách hàng thất bại');

                    }

                } else {

                    if ($this->item->update($id, $data)) {

                        $this->session->set_flashdata('message', 'Cập nhật khách hàng thành công');

                    } else {

                        $this->session->set_flashdata('message', 'Cập nhật khách hàng thất bại');

                    }

                }



                if ($cid) {

                    redirect(base_url('admincp/customer?id=&vn_name=&cid=' . 5));

                } else {

                    redirect(base_url() . 'admincp/customer/index/');

                }

            }

        }



        $this->data['title'] = 'Thêm khách hàng';



        $this->data['temp'] = 'customer/detail';

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



        redirect(base_url('admincp/customer'));

    }



}

