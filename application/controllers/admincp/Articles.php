<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Articles extends MY_Controller {
    //width image upload
    public $width = 187;
    //width height upload
    public $height = 134;

    public function __construct() {
        parent::__construct();
        //load model item
        $this->load->model('articles_m', 'item');
        //load model category_item
        $this->load->model('articles_category_m', 'category_item');
    }

    public function index() {
        //get list item
        $list = $this->item->get_list();
        //get category name
        foreach($list as $row) {
            $obj_product_category = $this->category_item->get_info($row->cid);
            $row->name_category = $obj_product_category->vn_name;
        }
        $this->data['list'] = $list;
        //get category item
        $input = array();
        $input['where'] = array('pid' => 0);
        $catalogs = $this->category_item->get_list($input);
        foreach ($catalogs as $row) {
            $input['where'] = array('pid' => $row->id);
            $subs = $this->category_item->get_list($input);
            $row->subs = $subs;
        }       
        $this->data['catalogs'] = $catalogs;
        $this->data['title'] = 'Danh sách bài viết';
        $this->data['temp'] = 'articles/index';
        $this->load->view('admin/main', $this->data);
    }

    public function detail($id = 0) {
        $input = array();
        $input['where'] = array('pid' => 0, 'status' => 1);
        $input['order'][0] = 'position';
        $input['order'][1] = 'ASC';      

        $catalogs = $this->category_item->get_list($input);
        foreach ($catalogs as $row) {
            $input['where'] = array('pid' => $row->id, 'status' => 1);
            $subs = $this->category_item->get_list($input);
            $row->subs = $subs;
        }

        $this->data['catalogs'] = $catalogs;
        //check item exist
        if($id){
            $info = $this->item->get_info($id);
            if(!empty($info)){
                $this->data['info'] = $info;
            }else{
                $this->session->set_flashdata('message', 'Dịch vụ muốn chỉnh sửa không tồn tại');
                redirect(base_url() . 'admincp/articles/index/');
            }
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('vn_name', 'Tên sản phẩm', 'required');
            if ($this->form_validation->run()) {
                //path uplaod to folder
                $path_upload = ROOT_PATH . '/uploads/images/articles/';
                $path_small = $path_upload . 'small/';
                $path_large = $path_upload . 'large/';

                //upload image large
                $upload_data = $this->system_library->upload($path_large, 'image_link');
                $image_link = '';
                //set width height for news and service
                // if($info->cid == 3) {
                //     $width = 449;
                //     $height = 677;
                // }else if($info->cid == 5) {
                //     $width = 677;
                //     $height = 449;
                // }
                //upload
                if ($upload_data != NULL && !isset($info->image_link)) {
                    $image_link = $upload_data;
                    //crop image small
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, $this->width, $this->height);
                } elseif ($upload_data != NULL && $info->image_link) {//edit
                    $image_link = $upload_data;
                    //clear image large old
                    @unlink($path_large. $info->image_link);
                    //clear image small old
                    @unlink($path_small. $info->image_link);
                    //crop image new
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, $this->width, $this->height);
                } else {
                    $image_link = $info->image_link;
                }
    
                //Kết thúc xử lý hình ảnh
                $slug = $this->input->post('vn_slug', true);
                $cid = $this->input->post('cid', true);
                $data = array(
                    'cid' => $cid,
                    'videos_id' => $this->input->post('videos_id', true),
                    'vn_name' => $this->input->post('vn_name', true),
                    'vn_slug' => $slug,
                    'vn_keyword' => $this->input->post('vn_keyword', true),
                    'vn_title' => $this->input->post('vn_title', true),
                    'h1' => $this->input->post('h1', true),
                    'h2' => $this->input->post('h2', true),
                    'h3' => $this->input->post('h3', true),
                    'h4' => $this->input->post('h4', true),
                    'h5' => $this->input->post('h5', true),
                    'vn_description' => $this->input->post('vn_description', true),
                    'vn_sapo' => $this->input->post('vn_sapo', true),
                    'vn_detail' => $this->input->post('vn_detail'),
                    'image_link' => $image_link,
                    'is_home' => $this->input->post('is_home', true),
                    'is_hot' => $this->input->post('is_hot', true),
                    'status' => $this->input->post('status', true),
                    'created' => now(),
                );

                if (!$id) {
                    if ($this->item->create($data)) {
                        $this->session->set_flashdata('message', 'Thêm sản phẩm thành công');
                    } else {
                        $this->session->set_flashdata('message', 'Thêm sản phẩm thất bại');
                    }
                } else {
                    if ($this->item->update($id, $data)) {
                        $this->session->set_flashdata('message', 'Cập nhật sản phẩm thành công');
                    } else {
                        $this->session->set_flashdata('message', 'Cập nhật sản phẩm thất bại');
                    }
                }

                if ($pid) {
                    redirect(base_url('admincp/articles?id=&vn_name=&cid=' . $cid));
                } else {
                    redirect(base_url() . 'admincp/articles/index/');
                }
            }
        }

        if($id){
            $this->data['title'] = 'Chỉnh sửa bài viết';
        }else{
            $this->data['title'] = 'Thêm bài mới';
        }

        $this->data['temp'] = 'articles/detail';
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
            //path uplaod to folder
            $path_upload = ROOT_PATH . '/uploads/images/articles/';
            $path_small = $path_upload . 'small/';
            $path_large = $path_upload . 'large/';

            foreach($check_del as $row) {
                //clear image small
                @unlink($path_small . $row->image_link);
                //clear image large
                @unlink($path_large . $row->image_link);    
                @unlink($path_upload . $row->image_link);             
            }


            if ($this->item->del_rule("status = 3")) {

                $this->session->set_flashdata('message', 'Dọn rác thành công');

            }

        } else {

            $this->session->set_flashdata('message', 'Không có gì trong thùng rác');

        }



        redirect(base_url('admincp/articles'));

    }

    

    



}

