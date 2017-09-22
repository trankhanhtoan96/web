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
 * @property Role_model role_model
 * @property Module_model module_model
 */
class Role extends CI_Controller
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
        if ($this->input->post('name')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;
                $dataEdit['detail'] = '';
                $modules = $this->module_model->get_list();
                foreach ($modules as $item) {
                    $dataEdit['detail'][$item['name'].'_edit'] = $this->input->post($item['name'].'_edit');
                    $dataEdit['detail'][$item['name'].'_view'] = $this->input->post($item['name'].'_view');
                }
                $dataEdit['detail'] = json_encode($dataEdit['detail']);
                $this->{$this->router->class . '_model'}->update($dataEdit);
                redirect('/' . $this->router->class . '/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                unset($dataEdit['id']);
                $dataEdit['detail'] = '';
                $modules = $this->module_model->get_list();
                foreach ($modules as $item) {
                    $dataEdit['detail'][$item['name'].'_edit'] = $this->input->post($item['name'].'_edit');
                    $dataEdit['detail'][$item['name'].'_view'] = $this->input->post($item['name'].'_view');
                }
                $dataEdit['detail'] = json_encode($dataEdit['detail']);
                $dataId = '';
                $this->{$this->router->class . '_model'}->insert($dataEdit, $dataId);
                redirect('/' . $this->router->class . '/detail/' . $dataId);
            }
        }
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        $modules = $this->module_model->get_list();
        $html = "<table class='table table-bordered'>
                    <thead>
                    <tr>
                        <th>" . lang('name') . "</th>
                        <th>" . lang('edit') . "</th>
                        <th>" . lang('view') . "</th>
                    </tr>
                    </thead><tbody>";
        if (!empty($dataView['detail'])) {
            $detail = json_decode(html_entity_decode($dataView['detail']), true);
        }
        foreach ($modules as $item) {
            $html .= "<tr>
                        <td>{$item['name']}</td>
                        <td><input type='checkbox' name='" . $item['name'] . '_edit' . "' class='flat' " . (isset($detail[$item['name'] . '_edit']) && $detail[$item['name'] . '_edit'] == "on" ? "checked" : '') . " /></td>
                        <td><input type='checkbox' name='" . $item['name'] . '_view' . "' class='flat' " . (isset($detail[$item['name'] . '_view']) && $detail[$item['name'] . '_view'] == "on" ? "checked" : '') . " /></td>
                      </tr>";
        }
        $html .= "</tbody></table>";
        $dataView['detail'] = $html;
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
        if ($id == '') redirect('/' . $this->router->class . '/index');
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        unset($dataView['id']);
        $dataView['user_created'] = $this->user_model->get($dataView['user_created']);
        $dataView['user_modifiled'] = $this->user_model->get($dataView['user_modifiled']);
        $modules = $this->module_model->get_list();
        $html = "<table class='table table-bordered'>
                    <thead>
                    <tr>
                        <th>" . lang('name') . "</th>
                        <th>" . lang('edit') . "</th>
                        <th>" . lang('view') . "</th>
                    </tr>
                    </thead><tbody>";
        if (!empty($dataView['detail'])) {
            $detail = json_decode(html_entity_decode($dataView['detail']), true);
        }
        foreach ($modules as $item) {
            $html .= "<tr>
                        <td>{$item['name']}</td>
                        <td><input type='checkbox' name='" . $item['name'] . '_edit' . "' class='flat' " . (isset($detail[$item['name'] . '_edit']) && $detail[$item['name'] . '_edit'] == "on" ? "checked" : '') . " /></td>
                        <td><input type='checkbox' name='" . $item['name'] . '_view' . "' class='flat' " . (isset($detail[$item['name'] . '_view']) && $detail[$item['name'] . '_view'] == "on" ? "checked" : '') . " /></td>
                      </tr>";
        }
        $html .= "</tbody></table>";
        $dataView['detail'] = $html;
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
        $this->{$this->router->class . '_model'}->delete($id);
        redirect('/' . $this->router->class . '/index');
    }

    function deleteList()
    {
        if ($recods = $this->input->post('record_selected')) {
            foreach ($recods as $id) {
                $this->{$this->router->class . '_model'}->delete($id);
            }
        }
        redirect('/' . $this->router->class . '/index');
    }
}