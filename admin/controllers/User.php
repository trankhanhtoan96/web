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
 */
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('userLogined')) redirect('/login', 'refresh');
    }

    function index()
    {

    }

    function edit($id = '')
    {
        if ($this->input->post('username')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;
                $this->user_model->update($dataEdit);
                redirect('/'.$this->router->class.'/detail/'.$id);
            }
        }
        $data = array(
            'meta_header' => array(
                'title' => lang($this->router->class),
                'description' => ''
            ),
            'data_header' => $id ? lang('update_' . $this->router->class) : lang('create_' . $this->router->class),
            'data_id' => $id,
            'data' => $id ? $this->{$this->router->class . '_model'}->get($id) : ''
        );
        $this->load->view('user/edit', $data);
    }

    function detail($id)
    {
        $this->load->view('home/index');
    }
}
/**
 * Khi tạo 1 controller
 * copy model từ file model mẫu ra và đổi tên bảng cho model
 * thêm model vào trong config autoload
 * tạo các lang: tên model, create_tên model, update_tên model
 * tạo các lang: trùng tên field
 */