<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    private $name_item = 'sản phẩm';
    private $name_class = 'product';

    public function __construct() {
        parent::__construct();
        //load model item
        $this->load->model('product_m', 'item');
        //load model category_item
        $this->load->model('product_category_m', 'category_item');
        $this->load->model('list_image_product_m');
    }

    public function index() {      
        // $otherdb = $this->load->database('anotherdb', TRUE);
                
        //         $query = $this->db->get('products');
        //         $otherdb->query("SELECT * FROM `products`");
        //                 $query = $otherdb->query("SELECT * FROM `products` ORDER BY `id` ASC");
        //                 $data = $query->result();
                
        //                 // echo '<pre>';
        //                 // print_r($data);
        //                 // echo '<pre>';die();
        //                 foreach ($query->result() as $row)
        //                             {
                                        
        //                                 if ($row->id > 0){

        //                                     $data = array(
        //                                         'vn_title' => $row->vn_title_site,
        //                                     );
                                            
        //                                     //$this->product_m->update($row->slug, $data);
        //                                     $this->item->update($row->id, $data);

    
        //                                 }

        //                             }die();
                                                    
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



        $this->data['title'] = 'Danh sách ' . $this->name_item;

        $this->data['temp'] = $this->name_class . '/index';

        $this->load->view('admin/main', $this->data);

    }

    public  function ajax_datatable() {
        $get = $_GET;
        $data = [];
        $result = [];
        //get list cate
        $input = array();
        $input['select'] = ['id', 'vn_name'];
        $list_cate = $this->item->get_list_ver2($input);

        $input = array();
        $input['select'] = ['id', 'cid', 'vn_name', 'status', 'created'];       
        //filter  
        $key_search = $get['search']['value'];
        if($key_search != '') {
            $input['like'] = array('vn_name', $key_search);
        }
        //panigation
        $total_rows = $this->item->get_total($input);
        $data['recordsTotal'] = $total_rows;
        $data['recordsFiltered'] = $total_rows;
        $data['draw'] = $get['draw'];
        $iTemPerPage = $get['length'];
        $offset = $get['start'];
        $input['limit'] = array($iTemPerPage, $offset);

        $list = $this->item->get_list($input);
        if(!empty($list)) {
            //get category name
            foreach($list as $k => $row) {
                $obj_product_category = $this->category_item->get_info($row->cid);
                $result[$k]['input'] = '<label class="check-box">
                                            <input name="id[]" value="'.$row->id.'" type="checkbox" />
                                            <span class="checkmark"></span>
                                        </label>';
                $result[$k]['id'] = $row->id;
                $result[$k]['name_cate'] = $obj_product_category->vn_name;
                $result[$k]['vn_name'] = $row->vn_name;
                $result[$k]['status'] = '<div class="status status-'.$row->id.'">                                        
                                            '. ($row->status == 1 ? '<h5 class="btn-success">Hiển thị</h5>' : ($row->status == 2 ? '<h5 class="btn-warning">Ẩn</h5>' : '<h5 class="btn-danger">Xóa</h5>')). '                                        
                                        </div>';
                $result[$k]['created'] = date('d-m-Y H:m:s', $row->created);
                $result[$k]['action'] = '<div class="action-zone">
                                            <a class="action btn-light" href="'. base_url('admincp/product/detail/') . $row->id.'">
                                                <span>Chỉnh sửa</span>
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                            <a class="action btn-light active-single">
                                                <span>Hiển thị</span>
                                                <i class="mdi mdi-eye-outline" onclick="action_item('.$row->id .', "enable", "'. base_url("admincp/product/config").'", "sản phẩm");"></i>
                                            </a>
                                            <a class="action btn-light private-single">
                                                <span>Ẩn</span>
                                                <i class="mdi mdi-crosshairs-gps" onclick="action_item('.$row->id.', "disable", "'. base_url('admincp/product/config') .'", "sản phẩm");"></i>
                                            </a>
                                            <a class="action btn-light delete-single">
                                                <span>Xóa</span>
                                                <i class="mdi mdi-trash-can-outline" onclick="action_item('.$row->id.', "del", "'. base_url('admincp/product/config') .'", "sản phẩm");"></i>
                                            </a>
                                        </div>';
                $result[$k]['list_cate'] = $list_cate;
            }
        }

        $data['data'] = $result;
        echo json_encode($data);
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
                $input = array();
                $input['where'] = array('product_id' => $id);
                $info->list_img = $this->list_image_product_m->get_list($input);
                $this->data['info'] = $info;

            }else{

                $this->session->set_flashdata('message', 'Dịch vụ muốn chỉnh sửa không tồn tại');

                redirect(base_url() . 'admincp/'.$this->name_class.'/index/');

            }

        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('vn_name', 'Tên ' . $this->name_item, 'required');
            if ($this->form_validation->run()) {
                //path uplaod to folder
                $path_upload = ROOT_PATH . '/uploads/images/'.$this->name_class.'/';
                $path_small = $path_upload . 'small/';
                $path_large = $path_upload . 'large/';
                //upload image large
                $upload_data = $this->system_library->upload($path_large, 'image_link');
                $image_link = '';
                //upload
                if ($upload_data != NULL && !isset($info->image_link)) {
                    $image_link = $upload_data;
                    //crop image small
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, 250, 250);
                } elseif ($upload_data != NULL && $info->image_link) {//edit
                    $image_link = $upload_data;
                    //clear image large old
                    @unlink($path_large. $info->image_link);
                    //clear image small old
                    @unlink($path_small. $info->image_link);
                    //crop image new
                    $this->system_library->resize_image('crop', $path_large . $image_link, $path_small . $image_link, 250, 250);

                } else {

                    $image_link = $info->image_link;

                }

                $slug = $this->input->post('vn_slug', true);
                $cid = $this->input->post('cid', true);

                $data = array(

                    'cid' => $cid,

                    'vn_name' => $this->input->post('vn_name', true),

                    'vn_slug' => $slug,

                    'vn_keyword' => $this->input->post('vn_keyword', true),

                    'vn_title' => $this->input->post('vn_title', true),

                    'vn_description' => $this->input->post('vn_description', true),

                    'vn_sapo' => $this->input->post('vn_sapo', true),

                    'vn_detail' => $this->input->post('vn_detail'),
                    'properties' => json_encode($this->input->post('properties')),
                    'h1' => $this->input->post('h1', true),
                    'h2' => $this->input->post('h2', true),
                    'h3' => $this->input->post('h3', true),
                    'h4' => $this->input->post('h4', true),
                    'h5' => $this->input->post('h5', true),
                    'image_link' => $image_link,
                    'image_list' => '',
                    'code' => $this->input->post('code', true),
                    'is_home' => $this->input->post('is_home', true),

                    'is_sell' => $this->input->post('is_sell', true),

                    'status' => $this->input->post('status', true),

                    'created' => now(),

                );



                if (!$id) {

                    if ($id = $this->item->create($data)) {

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

                //upload cac anh kem theo
                $image_list = array();
                $image_list = $this->system_library->upload_file($path_large, 'image_list');
                $old_images = $this->input->post('old_images', true);//array image remove
                $arrIdImg = [];
                //create new
                if(!empty($image_list) && count($image_list) > 0) {
                    foreach ($image_list as $img_new) {
                        $data_img = array(
                            'product_id' => $id,           
                            'name' => $img_new,        
                            'created' => now(),
        
                        );
                        $arrIdImg[] = $this->list_image_product_m->create($data_img);
                    }  
                }
                //edit image
                if (!empty($info)) {
                    //get list image old product
                    $input = array();
                    $input['where'] = array('product_id' => $info->id);
                    $list_old_img = $this->list_image_product_m->get_list($input);
                    //clear image old
                    if(!empty($list_old_img)) {
                        foreach ($list_old_img as $obj_img_old) {
                            if(!in_array($obj_img_old->id, $arrIdImg) && !in_array($obj_img_old->name, $old_images)) {
                                if(file_exists($path_large. $obj_img_old->name)) {
                                    @unlink($path_large. $obj_img_old->name);
                                }
                                $this->list_image_product_m->delete($obj_img_old->id);
                            }
                        }  
                    }
                }
                //Kết thúc xử lý hình ảnh

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
            //path uplaod to folder
            $path_upload = ROOT_PATH . '/uploads/images/'.$this->name_class.'/';
            $path_small = $path_upload . 'small/';
            $path_large = $path_upload . 'large/';

            foreach($check_del as $row) {
                //clear image small
                @unlink($path_small . $row->image_link);
                //clear image large
                @unlink($path_large . $row->image_link);
                //get list image old product
                $input = array();
                $input['where'] = array('product_id' => $row->id);
                $list_old_img = $this->list_image_product_m->get_list($input);
                //clear image old
                if(!empty($list_old_img)) {
                    foreach ($list_old_img as $obj_img_old) {
                        if(file_exists($path_large. $obj_img_old->name)) {
                            @unlink($path_large. $obj_img_old->name);
                        }                     
                    }
                    $this->list_image_product_m->del_rule("product_id = " . $row->id); 
                }               
            }

            if ($this->item->del_rule("status = 3")) {

                $this->session->set_flashdata('message', 'Dọn rác thành công');

            }

        } else {

            $this->session->set_flashdata('message', 'Không có gì trong thùng rác');

        }



        redirect(base_url('admincp/' . $this->name_class));

    }

    

    



}

