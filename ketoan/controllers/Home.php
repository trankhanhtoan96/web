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
 * @property Page_model page_model
 * @property Blog_category_model blog_category_model
 */
class Home extends CI_Controller
{
    function index()
    {
        $dataView = array();
        $dataView['blog_news'] = $this->blog_model->get_list('*', array(), 'date_modifiled', 'DESC', 4);
        $data = array(
            'meta_title' => $this->setting_model->get('page_title'),
            'meta_description' => $this->setting_model->get('page_description'),
            'data' => $dataView
        );
        $this->load->view('home', $data);
    }

    function blog_category($routerName)
    {
        $sql = "SELECT target_id FROM router WHERE name='{$routerName}'";
        $result = $this->db->query($sql)->result_array();
        if (count($result) == 0) {
            //404
            $data = array(
                'meta_title' => lang('error_404')
            );
            $this->load->view('errors/404', $data);
        } else {
            $id = $result[0]['target_id'];
            $dataView = array();
            $dataView['blog_category'] = $this->blog_category_model->get($id);

            $sql = "SELECT r.name AS router_name,b.id, b.date_modifiled, b.name, b.excerpt, b.content, b.user_modifiled, b.image
                    FROM blog as b
                    INNER JOIN blog_category_blog AS bc ON b.id=bc.blog_id
                    INNER JOIN blog_category AS c ON c.id=bc.blog_category_id
                    INNER JOIN router AS r ON r.target_id=b.id
                    WHERE c.id='{$id}'
                    ORDER BY b.date_modifiled DESC";
            $dataView['blogs'] = $this->db->query($sql)->result_array();

            $data = array(
                'meta_title' => $dataView['blog_category']['seo_title'],
                'meta_description' => $dataView['blog_category']['seo_description'],
                'data' => $dataView
            );
            $this->load->view('blog_category', $data);
        }
    }

    function page($routerName)
    {
        $sql = "SELECT target_id FROM router WHERE name='{$routerName}'";
        $result = $this->db->query($sql)->result_array();
        if (count($result) == 0) {
            //404
            $data = array(
                'meta_title' => lang('error_404')
            );
            $this->load->view('errors/404', $data);
        } else {
            $id = $result[0]['target_id'];
            $dataView = array();
            $dataView['page'] = $this->page_model->get($id);
            $data = array(
                'meta_title' => $dataView['page']['seo_title'],
                'meta_description' => $dataView['page']['seo_description'],
                'data' => $dataView
            );
            $this->load->view('page', $data);
        }
    }
}