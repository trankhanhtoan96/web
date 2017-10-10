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
 * @property Email_model email_model
 * @property Role_model role_model
 * @property Mail mail
 * @property Email_template_model email_template_model
 * @property Email_sent_model email_sent_model
 * @property Email_sent_user_model email_sent_user_model
 * @property Email_sent_email_model email_sent_email_model
 */
class Email extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->has_userdata('userLogined')) redirect('/login', 'refresh');
    }

    function index()
    {
        if (!checkRole($this->router->class . '_view')) redirect('/', 'refresh');
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
        if (!checkRole($this->router->class . '_edit')) redirect('/', 'refresh');
        if ($this->input->post('email_address')) {
            if ($id) {
                $dataEdit = $this->input->post();
                $dataEdit['id'] = $id;
                if ($dataEdit['validation'] == 'on') $dataEdit['validation'] = 1;
                else $dataEdit['validation'] = 0;
                $this->{$this->router->class . '_model'}->update($dataEdit);
                redirect('/' . $this->router->class . '/detail/' . $id);
            } else {
                $dataEdit = $this->input->post();
                if ($dataEdit['validation'] == 'on') $dataEdit['validation'] = 1;
                else $dataEdit['validation'] = 0;
                unset($dataEdit['id']);
                $dataId = '';
                $this->{$this->router->class . '_model'}->insert($dataEdit, $dataId);
                redirect('/' . $this->router->class . '/detail/' . $dataId);
            }
        }
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        if ($id == '') $dataView['validation'] = '1';
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
        if (!checkRole($this->router->class . '_view')) redirect('/', 'refresh');
        if ($id == '') redirect('/' . $this->router->class . '/index');
        $dataView = $this->{$this->router->class . '_model'}->get($id);
        unset($dataView['id']);
        $dataView['user_created'] = $this->user_model->get($dataView['user_created']);
        $dataView['user_modifiled'] = $this->user_model->get($dataView['user_modifiled']);
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
        if (!checkRole($this->router->class . '_delete')) redirect('/', 'refresh');
        $this->{$this->router->class . '_model'}->delete($id);
        redirect('/' . $this->router->class . '/index');
    }

    function deleteList()
    {
        if (!checkRole($this->router->class . '_delete')) redirect('/', 'refresh');
        if ($recods = $this->input->post('record_selected')) {
            foreach ($recods as $id) {
                $this->{$this->router->class . '_model'}->delete($id);
            }
        }
        redirect('/' . $this->router->class . '/index');
    }

    function send_mail($email_template_id = '')
    {
        if (!checkRole('email_send_mail')) redirect('/', 'refresh');

        //send mail when submit
        if ($this->input->post('subject')) {
            $this->load->library('mail');
            $this->mail->mailer->Subject = $this->input->post('subject');
            $this->mail->mailer->Body = $this->input->post('body_email');

            $addressTO = explode(',', $this->input->post('email_to'));
            $addressCC = explode(',', $this->input->post('email_cc'));
            $addressBCC = explode(',', $this->input->post('email_bcc'));
            $addressTotal = array();

            //giới hạn số email gởi 1 lần
            $limit = 25;
            $sendSuccess = 0;
            $sendError = 0;
            $count = -1;
            while ($count != 0) {
                if ($count != -1) sleep(15);
                $count = 0;
                $TO = $addressTO;
                $CC = $addressCC;
                $BCC = $addressBCC;
                foreach ($TO as $key => $item) {
                    if ($count == $limit) break;
                    $item = trim($item);
                    if ($this->mail->mailer->addAddress($item)) {
                        $count++;
                        $addressTotal[] = $item;
                    }
                    unset($addressTO[$key]);
                }
                foreach ($CC as $key => $item) {
                    if ($count == $limit) break;
                    $item = trim($item);
                    if ($this->mail->mailer->addCC($item)) {
                        $count++;
                        $addressTotal[] = $item;
                    }
                    unset($addressCC[$key]);
                }
                foreach ($BCC as $key => $item) {
                    if ($count == $limit) break;
                    $item = trim($item);
                    if ($this->mail->mailer->addBCC($item)) {
                        $count++;
                        $addressTotal[] = $item;
                    }
                    unset($addressBCC[$key]);
                }

                //gửi mail
                if ($this->mail->mailer->send()) $sendSuccess += $count;
                else $sendError += $count;

                //clear address trước khi tiến hành gởi lần tiếp theo
                $this->mail->mailer->clearAllRecipients();
            }

            //lưu email đã gởi
            $dataEmailSent = array(
                'name' => $this->mail->mailer->Subject,
                'content' => $this->mail->mailer->Body
            );
            $idEmailSent = '';
            $this->email_sent_model->insert($dataEmailSent, $idEmailSent);

            //tiến hành lưu quan hệ với email đã gởi
            foreach ($addressTotal as $key => $item) {
                $sql = "SELECT id FROM user WHERE email='{$key}'";
                $result = $this->db->query($sql)->result_array();
                if (count($result) > 0) {
                    foreach ($result as $i) {
                        $dataTemp = array(
                            'user_id' => $i['id'],
                            'email_sent_id' => $idEmailSent
                        );
                        $this->email_sent_user_model->insert($dataTemp);
                    }
                } else {
                    //lưu quan hệ với danh sách email
                    $sql = "SELECT id FROM email WHERE email_address='{$key}'";
                    $result = $this->db->query($sql)->result_array();
                    if (count($result) > 0) {
                        foreach ($result as $i) {
                            $dataTemp = array(
                                'email_id' => $i['id'],
                                'email_sent_id' => $idEmailSent
                            );
                            $this->email_sent_email_model->insert($dataTemp);
                        }
                    }
                }
            }

            //thông báo ra màn hình
            if ($sendSuccess > 0) {
                $alert = $this->load->view('alert/success', array('message' => lang('send_mail_success') . ' : ' . $sendSuccess), true);
            }
            if ($sendError > 0) {
                $alert = $this->load->view('alert/error', array('message' => lang('send_mail_error') . ':' . $sendError), true);
            }
        }

        $dataView = array();

        //user_role_type_select
        $roles = array('1' => lang('all'));
        foreach ($this->role_model->get_list('id, name') as $item) {
            $roles[$item['id']] = $item['name'];
        }

        $dataView['user_role_type_select'] = getHtmlSelection($roles, '', array('name' => 'user_role_type_select', 'id' => 'user_role_type_select'));

        //select_add_address
        $selectAddAddress = array(
            'to' => 'TO',
            'cc' => 'CC',
            'bcc' => 'BCC'
        );
        $dataView['select_add_address'] = getHtmlSelection($selectAddAddress, '', array('name' => 'select_add_address', 'class' => 'select_add_address'));


        //table_user_email
        $users = $this->user_model->get_list();
        $dataTableUserEmail = array(
            'dataTbody' => array(),
            'dataIds' => array()
        );
        foreach ($users as $item) {
            $dataTableUserEmail['dataTbody'][] = array(
                $item['first_name'] . ' ' . $item['last_name'],
                $item['email'],
                $item['admin'] == 1 ? 1 : $this->role_model->get($item['role_id'], 'name')['name']
            );
            $dataTableUserEmail['dataIds'][] = $item['id'];
        }
        $dataView['table_user_email'] = $this->load->view('email/template/table_user', $dataTableUserEmail, true);
        //end

        //table_email
        $users = $this->email_model->get_list();
        $dataTableEmail = array(
            'dataTbody' => array(),
            'dataIds' => array()
        );
        foreach ($users as $item) {
            $dataTableEmail['dataTbody'][] = array(
                $item['name'],
                $item['email_address']
            );
            $dataTableEmail['dataIds'][] = $item['id'];
        }
        $dataView['table_email'] = $this->load->view('email/template/table_email', $dataTableEmail, true);
        //end

        //email template
        if ($email_template_id != '') {
            $emailTemplate = $this->email_template_model->get($email_template_id);
            $dataView['subject'] = $emailTemplate['name'];
            $dataView['body_email'] = $emailTemplate['content'];
        }

        $data = array(
            'meta_title' => lang('send_mail'),
            'data_header' => lang('send_mail'),
            'data_id' => '',
            'alert' => !empty($alert) ? $alert : '',
            'data' => $dataView
        );
        $this->load->view('email/send_mail', $data);
    }
}