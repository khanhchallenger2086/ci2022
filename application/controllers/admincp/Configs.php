<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Configs extends MY_Controller {



    public function __construct() {

        parent::__construct();



        $this->load->model('configs_m');

    }



    public function index() {



        $where = array(

            'key' => 'general'

        );



        $general = $this->configs_m->get_info_rule($where);



        $this->data['general'] = json_decode($general->values);



        if ($this->input->post()) {

            $value = array(
                'vn_title_site' => $this->input->post('vn_title_site', true),
                'vn_keyword_site' => $this->input->post('vn_keyword_site', true),
                'vn_description_site' => $this->input->post('vn_description_site', true),
                'about' => $this->input->post('about', true),
                'address' => $this->input->post('address', true),
                'email' => $this->input->post('email', true),
                'hotline' => $this->input->post('hotline', true),
                'zalo' => $this->input->post('zalo', true),
                'cn_1_name' => $this->input->post('cn_1_name', true),
                'cn_1_address' => $this->input->post('cn_1_address', true),
                'cn_1_phone' => $this->input->post('cn_1_phone', true),
                'cn_1_hotline' => $this->input->post('cn_1_hotline', true),
                'cn_1_email' => $this->input->post('cn_1_email', true),
                'cn_1_fax' => $this->input->post('cn_1_fax', true),
                'cn_2_name' => $this->input->post('cn_2_name', true),
                'cn_2_address_1' => $this->input->post('cn_2_address_1', true),
                'cn_2_address_2' => $this->input->post('cn_2_address_2', true),
                'cn_2_phone' => $this->input->post('cn_2_phone', true),
                'cn_2_hotline' => $this->input->post('cn_2_hotline', true),
                'cn_2_email' => $this->input->post('cn_2_email', true),
                'cn_2_fax' => $this->input->post('cn_2_fax', true),
                'cn_3_name' => $this->input->post('cn_3_name', true),
                'cn_3_address' => $this->input->post('cn_3_address', true),
                'cn_3_phone' => $this->input->post('cn_3_phone', true),
                'cn_3_hotline' => $this->input->post('cn_3_hotline', true),
                'cn_3_email' => $this->input->post('cn_3_email', true),
                'cn_3_fax' => $this->input->post('cn_3_fax', true),
                'alt_web' => $this->input->post('alt_web', true),
                'h1' => $this->input->post('h1', true),
                'h2' => $this->input->post('h2', true),
                'h3' => $this->input->post('h3', true),
                'h4' => $this->input->post('h4', true),
                'h5' => $this->input->post('h5', true),
                'about_footer' => $this->input->post('about_footer'),
                'facebook' => $this->input->post('facebook', true),
                'youtube' => $this->input->post('youtube', true),
                'address_website' => $this->input->post('address_website'),
            );

            $data = array(

                'values' => json_encode($value)

            );



            if ($this->configs_m->update(1, $data)) {

                $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');

            }



            redirect(base_url() . 'admincp/configs');

        }



        $this->data['title'] = 'Cấu hình tổng quát';

        $this->data['temp'] = 'configs/index';

        $this->load->view('admin/main', $this->data);

    }



}

