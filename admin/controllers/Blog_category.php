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
 * @property Blog_category_model blog_category_model
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
        checkRole();
        $dataView = $this->{$this->router->class . '_model'}->get_list();
        foreach ($dataView as $key => $value) {
            $dataView[$key]['parent'] = $this->blog_category_model->get($dataView[$key]['parent_id']);
        }
        $data = array(
            'meta_title' => lang($this->router->class),
            'data_header' => lang($this->router->class),
            'data' => $dataView
        );

        //load view to display
        $this->load->view($this->router->class . '/list', $data);
    }

    function edit($id = '')
    {
        checkRole();
        if ($this->input->post('name')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;
                $this->{$this->router->class . '_model'}->update($dataEdit);
                redirect('/' . $this->router->class . '/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                unset($dataEdit['id']);
                $dataId = '';
                $this->{$this->router->class . '_model'}->insert($dataEdit, $dataId);
                redirect('/' . $this->router->class . '/detail/' . $dataId);
            }
        }
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        $parentCategory = $this->blog_category_model->get_list('id, name');
        $dataView['parent_category'] = array('0' => lang('[none]'));
        foreach ($parentCategory as $item) {
            $dataView['parent_category'][$item['id']] = $item['name'];
        }
        unset($dataView['parent_category'][$id]);
        $data = array(
            'meta_title' => $id ? $dataView['name'] : lang($this->router->class),
            'data_header' => $id ? lang($this->router->class) . ':' . $dataView['name'] : lang('create_' . $this->router->class),
            'data_id' => $id,
            'data' => $dataView
        );
        $this->load->view($this->router->class . '/edit', $data);
    }

    function detail($id = '')
    {
        checkRole();
        if ($id == '') redirect('/' . $this->router->class . '/index');
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        unset($dataView['id']);
        $dataView['user_created'] = $this->user_model->get($dataView['user_created']);
        $dataView['user_modifiled'] = $this->user_model->get($dataView['user_modifiled']);
        $dataView['parent_category'] = $this->blog_category_model->get($dataView['parent_id'],'name');
        $data = array(
            'meta_title' => $dataView['name'],
            'data_header' => lang($this->router->class) . ':' . $dataView['name'],
            'data_id' => $id,
            'data' => $dataView
        );
        $this->load->view($this->router->class . '/detail', $data);
    }

    function delete($id = '')
    {
        checkRole();
        $this->{$this->router->class . '_model'}->delete($id);
        redirect('/' . $this->router->class . '/index');
    }

    function deleteList()
    {
        checkRole();
        if ($recods = $this->input->post('record_selected')) {
            foreach ($recods as $id) {
                $this->{$this->router->class . '_model'}->delete($id);
            }
        }
        redirect('/' . $this->router->class . '/index');
    }
}