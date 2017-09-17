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
 * @property Blog_model $blog_model
 * @property Blog_category_model $blog_category_model
 */
class Blog_category extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('userLogined')) redirect('/login', 'refresh');
    }

    function index()
    {
        $dataTemp = $this->{$this->router->class . '_model'}->get_list();
        foreach ($dataTemp as $key => $value) {
            $dataTemp[$key]['user_created'] = $this->user_model->get($dataTemp[$key]['user_created']);
            $dataTemp[$key]['user_modifiled'] = $this->user_model->get($dataTemp[$key]['user_modifiled']);
        }
        $data = array(
            'meta_title' => lang($this->router->class),
            'data_header' => lang($this->router->class),
            'data' => $dataTemp
        );
        $this->load->view($this->router->class . '/list', $data);
    }

    function edit($id = '')
    {
        if ($this->input->post('name')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;

                //upload file
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $dataEdit['image'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
                }

                $this->{$this->router->class . '_model'}->update($dataEdit);
                redirect('/blog_category/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                unset($dataEdit['id']);

                //upload file
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $dataEdit['image'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
                } else {
                    $dataEdit['image'] = base_url('uploads/icons/none.jpg');
                }
                $dataId = '';
                $this->{$this->router->class . '_model'}->insert($dataEdit, $dataId);
                redirect('/blog_category/detail/' . $dataId);
            }
        }
        $dataView = $id ? $this->blog_category_model->get($id) : '';

        $data = array(
            'meta_title' => $id ? $dataView['name'] : lang('blog_category'),
            'data_header' => $id ? lang('blog_category') . ':' . $dataView['name'] : lang('create_blog_category'),
            'data_id' => $id,
            'data' => $dataView
        );

        $this->load->view('blog_category/edit', $data);
    }

    function detail($id = '')
    {
        if ($id == '') redirect('/blog_category/index');
        $detail = $this->blog_category_model->get($id);
        unset($detail['id']);
        $detail['user_created'] = $this->user_model->get($detail['user_created']);
        $detail['user_modifiled'] = $this->user_model->get($detail['user_modifiled']);
        $data = array(
            'title' => $detail['name'],
            'data_header' => lang('blog_category') . ':' . $detail['name'],
            'data_id' => $id,
            'data' => $detail
        );
        $this->load->view('blog_category/detail', $data);
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
}