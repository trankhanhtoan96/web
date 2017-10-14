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
 * @property Mail mail
 * @property Setting_model setting_model
 * @property Blog_model blog_model
 */
class Home extends CI_Controller
{
    function index()
    {
        $dataView = array();
        $dataView['blog_news'] = $this->blog_model->get_list('*', array(), 'date_modifiled', 'DESC', 4);
        $data = array(
            'meta_title'=>$this->setting_model->get('page_title'),
            'meta_description'=>$this->setting_model->get('page_description'),
            'data'=>$dataView
        );
        $this->load->view('home/index',$data);
    }

    function blog_category($id)
    {
        echo $this->input->get('page');
    }
}