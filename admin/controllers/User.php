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
        $data = array(
            'meta_header' => array(
                'title' => lang($this->router->class),
                'description' => ''
            ),
            'data_header' => lang($this->router->class),
            'data' => $this->{$this->router->class . '_model'}->get_list()
        );
        $this->load->view($this->router->class . '/list', $data);
    }

    function edit($id = '')
    {
        if ($this->input->post('username')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;

                //upload file
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('avatar')) {
                    $dataEdit['avatar'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
                }

                //send data to update
                $this->user_model->update($dataEdit);

                //update userLogined
                $temp = $this->user_model->getByUsername($this->session->userdata('userLogined')['username']);
                $this->session->set_userdata('userLogined', $temp);

                redirect('/' . $this->router->class . '/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                unset($dataEdit['id']);

                //upload file
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('avatar')) {
                    $dataEdit['avatar'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
                }else{
                    $dataEdit['avatar'] = base_url('uploads/images/user.jpg');
                }

                //send data
                $this->user_model->insert($dataEdit, $dataId);

                redirect('/' . $this->router->class . '/detail/' . $dataId);
            }
        }
        $dataView = $id ? $this->{$this->router->class . '_model'}->get($id) : '';
        $data = array(
            'meta_header' => array(
                'title' => lang($this->router->class),
                'description' => ''
            ),
            'data_header' => $id ? $dataView['first_name'] . ' ' . $dataView['last_name'] : lang('create_' . $this->router->class),
            'data_id' => $id,
            'data' => $dataView
        );
        $this->load->view($this->router->class . '/'.$this->router->method, $data);
    }

    function detail($id = '')
    {
        if ($id == '') redirect('/' . $this->router->class . '/index');
        $detail = $this->{$this->router->class . '_model'}->get($id);
        unset($detail['id']);
        $data = array(
            'meta_header' => array(
                'title' => $detail['first_name'] . ' ' . $detail['last_name'],
                'description' => $detail['description']
            ),
            'data_header' => $detail['first_name'] . ' ' . $detail['last_name'],
            'data_id' => $id,
            'data' => $detail
        );
        $this->load->view($this->router->class . '/'.$this->router->method, $data);
    }

    function delete($id = '')
    {
        if ($id) {
            $this->{$this->router->class . '_model'}->delete($id);
        }
        redirect('/' . $this->router->class . '/index');
    }

    function deleteList()
    {
        if ($this->input->post('record_selected')) {
            foreach ($this->input->post('record_selected') as $id) {
                $this->{$this->router->class . '_model'}->delete($id);
            }
        }
        redirect('/' . $this->router->class . '/index');
    }

    function change_password()
    {
        $data = array(
            'meta_header' => array(
                'title' => lang('change_password'),
                'description' => ''
            ),
            'data_header' => lang('change_password'),
            'data_id' => '',
            'data' => '',
            'alert'=>''
        );
        $oldPassword = $this->input->post('old_password',true);
        $newPassword = $this->input->post('new_password',true);
        if ($oldPassword && $newPassword) {
            $userLogined = $this->session->userdata('userLogined');
            if ($this->user_model->verify($userLogined['username'], $oldPassword)) {
                $dataUpdate = array(
                    'id' => $userLogined['id'],
                    'password' => $newPassword
                );
                if($this->user_model->update($dataUpdate)){
                    $data['alert'] = array(
                        'type'=>'success',
                        'message'=>lang('password_changed')
                    );

                }else{
                    $data['alert'] = array(
                        'type'=>'error',
                        'message'=>lang('occur_error')
                    );
                }
            }else{
                $data['alert'] = array(
                    'type'=>'error',
                    'message'=>lang('old_password_invalid')
                );
            }
        }
        $this->load->view($this->router->class . '/'.$this->router->method, $data);
    }
}
/**
 * Khi tạo 1 controller
 * copy model từ file model mẫu ra và đổi tên bảng cho model
 * thêm model vào trong config autoload
 * tạo các lang: tên model, create_tên model, update_tên model
 * tạo các lang: trùng tên field
 */