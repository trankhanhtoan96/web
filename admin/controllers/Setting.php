<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Benchmark $benchmark
 * @property CI_Calendar $calendar
 * @property CI_Cart $cart
 * @property CI_Config $config
 * @property CI_Email $email
 * @property CI_Encrypt $encrypt
 * @property CI_Encryption $encryption
 * @property CI_Upload $upload
 * @property CI_Form_validation $form_validation
 * @property CI_FTP $ftp
 * @property CI_Image_lib image_lib
 * @property CI_Input $input
 * @property CI_Javascript $javascript
 * @property CI_Lang $lang
 * @property CI_Loader $load
 * @property CI_DB_forge $dbforge
 * @property CI_Output $output
 * @property CI_Pagination $pagination
 * @property CI_Security $security
 * @property CI_Session $session
 * @property CI_Table $table
 * @property CI_URI $uri
 * @property CI_User_agent $agent
 * @property CI_Xmlrpc $xmlrpc
 * @property CI_Xmlrpcs $xmlrpcs
 * @property CI_Zip $zip
 * @property CI_DB $db
 * @property User_model user_model
 * @property CI_Router router
 * @property Setting_model setting_model
 */
class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('userLogined')) redirect('/login', 'refresh');
    }

    function index()
    {
        checkRole('setting_edit');
        if ($this->input->post('input_setting')) {
            $dataEdit = $this->input->post();

            //upload file
            $config['upload_path'] = 'uploads/images/';
            $config['allowed_types'] = 'jpg|png';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('logo')) {
                $dataEdit['logo'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
            }
            if ($this->upload->do_upload('icon')) {
                $dataEdit['icon'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
            }

            //send data
            $this->setting_model->update($dataEdit);
        }

        //send data to view
        $data = array(
            'meta_title' => lang($this->router->class),
            'data_header' => lang($this->router->class),
            'data_id' => '',
            'data' => $this->setting_model->get_list()
        );
        $this->load->view($this->router->class . '/' . $this->router->method, $data);
    }
}