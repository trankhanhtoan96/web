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
class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('userLogined')) redirect('/login', 'refresh');
    }

    function index()
    {
        $dataView = $this->{$this->router->class . '_model'}->get_list();
        foreach ($dataView as $key => $value) {
            $dataView[$key]['user_created'] = $this->user_model->get($dataView[$key]['user_created']);
            $dataView[$key]['user_modifiled'] = $this->user_model->get($dataView[$key]['user_modifiled']);

            $dataView[$key]['blog_category'] = "";
            if ($dataView[$key]['blog_category_id'] != 'null') {
                $temp = json_decode(html_entity_decode($dataView[$key]['blog_category_id']), true);
                foreach ($temp as $item) {
                    $temp2 = $this->blog_category_model->get($item, 'id,name');
                    $dataView[$key]['blog_category'] .= "<a href='" . base_url('blog_category/detail/' . $temp2['id']) . "'>{$temp2['name']}</a>, ";
                }
            }
        }
        $data = array(
            'meta_header' => array(
                'title' => lang($this->router->class),
                'description' => ''
            ),
            'data_header' => lang($this->router->class),
            'data' => $dataView
        );
        $this->load->view($this->router->class . '/list', $data);
    }

    function edit($id = '')
    {
        if ($this->input->post('name')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['blog_category_id'] = json_encode($dataEdit['blog_category_id']);
                $dataEdit['id'] = $id;

                //upload file
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|png';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $dataEdit['image'] = base_url($config['upload_path'] . $this->upload->data('file_name'));
                }

                $this->{$this->router->class . '_model'}->update($dataEdit);
                redirect('/blog/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                $dataEdit['blog_category_id'] = json_encode($dataEdit['blog_category_id']);
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
                redirect('/blog/detail/' . $dataId);
            }
        }
        $dataView['blog_category_id'] = '';
        if ($id) {
            $dataView = $this->blog_model->get($id);
            $dataView['blog_category_id'] = json_decode(html_entity_decode($dataView['blog_category_id']), true);
        }
        $temps = $this->blog_category_model->get_list('id,name');
        foreach ($temps as $temp) {
            $dataView['blog_category'][$temp['id']] = $temp['name'];
        }
        $data = array(
            'meta_header' => array(
                'title' => $id ? $dataView['name'] : lang('blog'),
                'description' => $id ? $dataView['meta_description'] : lang('blog')
            ),
            'data_header' => $id ? lang('blog') . ':' . $dataView['name'] : lang('create_blog'),
            'data_id' => $id,
            'data' => $dataView
        );
        $this->load->view('blog/edit', $data);
    }

    function detail($id = '')
    {
        if ($id == '') redirect('/blog/index');
        $detail = $this->blog_model->get($id);
        unset($detail['id']);
        $detail['user_created'] = $this->user_model->get($detail['user_created']);
        $detail['user_modifiled'] = $this->user_model->get($detail['user_modifiled']);
        if($detail['blog_category_id']!='null') {
            $detail['blog_category'] = "";
            $temp = json_decode(html_entity_decode($detail['blog_category_id']), true);
            foreach ($temp as $item) {
                $temp2 = $this->blog_category_model->get($item, 'id,name');
                $detail['blog_category'] .= "<li><a href='" . base_url('blog_category/detail/' . $temp2['id']) . "'>{$temp2['name']}</a></li>";
            }
        }

        $data = array(
            'meta_header' => array(
                'title' => $detail['name'],
                'description' => $detail['meta_description']
            ),
            'data_header' => lang('blog') . ':' . $detail['name'],
            'data_id' => $id,
            'data' => $detail
        );
        $this->load->view('blog/detail', $data);
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