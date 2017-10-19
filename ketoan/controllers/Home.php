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
 * @property Setting_model setting_model
 * @property Blog_model blog_model
 * @property Page_model page_model
 * @property Blog_category_model blog_category_model
 * @property Email_model email_model
 * @property User_model user_model
 */
class Home extends CI_Controller
{
    function index()
    {
        $dataView = array();
        $dataView['blog_news'] = $this->blog_model->get_list('*', array(), 'date_modifiled', 'DESC', 4);
        foreach ($dataView['blog_news'] as $key => $item) {
            $sql = "SELECT name FROM router WHERE target_id='{$item['id']}'";
            $result = $this->db->query($sql)->result_array();
            if (count($result) == 1) $dataView['blog_news'][$key]['routerName'] = $result[0]['name'];
        }
        $data = array(
            'meta_title' => $this->setting_model->get('page_title'),
            'meta_description' => $this->setting_model->get('page_description'),
            'data' => $dataView
        );
        $this->load->view('home', $data);
    }

    function blog($routerName)
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
            $dataView['blog'] = $this->blog_model->get($id);

            //lấy tên danh mục bài viết để đưa vào breakcrum
            $sql = "SELECT c.id,c.name FROM blog_category AS c
                    INNER JOIN blog_category_blog as bc on bc.blog_category_id=c.id
                    INNER JOIN blog as b on b.id=bc.blog_id
                    WHERE b.id='{$id}'";
            $result = $this->db->query($sql);
            if ($result->num_rows() > 0) {
                $rows = $result->result_array();
                $dataView['blog']['category_name'] = $rows[0]['name'];
                $dataView['blog']['category_id'] = $rows[0]['id'];
            }

            //lay ten nguoi tao
            $dataView['blog']['user_modifiled'] = $this->user_model->get($dataView['blog']['user_modifiled']);

            //bài viết relate
            $sql = "SELECT r.name as router_name,
                           b.name, b.date_modifiled, b.image
                    FROM blog as b
                    INNER JOIN blog_category_blog as bc on bc.blog_id=b.id
                    inner join router as r on r.target_id=b.id
                    where bc.blog_category_id='{$dataView['blog']['category_id']}'
                          and (b.date_modifiled>'{$dataView['blog']['date_modifiled']}' or b.date_modifiled='{$dataView['blog']['date_modifiled']}')
                          and b.id<>'{$id}'
                    order by b.date_modifiled asc
                    limit 4";
            $result = $this->db->query($sql);
            if ($result->num_rows() > 0) {
                $rows = $result->result_array();
                $dataView['blog_relate'][] = $rows[0];
                $dataView['blog_relate'][] = $rows[1];
                $dataView['blog_relate'][] = $rows[2];
                $dataView['blog_relate'][] = $rows[3];
            }

            $sql = "SELECT r.name as router_name,
                           b.name, b.date_modifiled, b.image
                    FROM blog as b
                    INNER JOIN blog_category_blog as bc on bc.blog_id=b.id
                    inner join router as r on r.target_id=b.id
                    where bc.blog_category_id='{$dataView['blog']['category_id']}'
                          and b.date_modifiled<'{$dataView['blog']['date_modifiled']}'
                          and b.id<>'{$id}'
                    order by b.date_modifiled desc
                    limit 2";
            $result = $this->db->query($sql);
            if ($result->num_rows() > 0) {
                $rows = $result->result_array();
                $dataView['blog_relate'][2] = $rows[0];
                $dataView['blog_relate'][3] = $rows[1];
            }
            //end bài viết relate

            $data = array(
                'meta_title' => $dataView['blog']['seo_title'],
                'meta_description' => $dataView['blog']['seo_description'],
                'data' => $dataView
            );
            $this->load->view('blog', $data);
        }
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

            $page = $this->input->get('page');
            $page = $page ? $page : 1;

            //lấy các bài viết thuộc danh mục và giới hạn theo phân trang
            $sql = "SELECT r.name AS router_name,b.id, b.date_modifiled, b.name, b.excerpt, b.content, b.user_modifiled, b.image
                    FROM blog as b
                    INNER JOIN blog_category_blog AS bc ON b.id=bc.blog_id
                    INNER JOIN blog_category AS c ON c.id=bc.blog_category_id
                    INNER JOIN router AS r ON r.target_id=b.id
                    WHERE c.id='{$id}'
                    ORDER BY b.date_modifiled DESC
                    LIMIT " . ($page - 1) * $this->setting_model->get('num_posts_per_page') . ',' . $this->setting_model->get('num_posts_per_page');
            $dataView['blogs'] = $this->db->query($sql)->result_array();

            //phân trang
            //đếm tổng số bài viết trên danh mục
            $sql = "SELECT COUNT(b.id) AS total_rows FROM blog AS b
                    INNER JOIN blog_category_blog AS bc ON bc.blog_id=b.id
                    INNER JOIN blog_category AS c ON c.id=bc.blog_category_id
                    WHERE c.id='{$id}'";

            $this->load->library('pagination');
            $config['base_url'] = current_url();
            $config['total_rows'] = $this->db->query($sql)->result_array()[0]['total_rows'];
            $config['per_page'] = $this->setting_model->get('num_posts_per_page');
            $this->pagination->initialize($config);
            $dataView['pagination'] = $this->pagination->create_links();

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

    function save_email_subcribe()
    {
        $success = 0;
        $message = '';
        if ($email = $this->input->post('email_subcribe')) {
            $sql = "SELECT COUNT(id) AS num FROM email WHERE email_address='{$email}'";
            if ($row = $this->db->query($sql)->result_array()[0]) {
                if ($row['num'] == 0) {
                    $data = array(
                        'email_address' => $email
                    );
                    if ($this->email_model->insert($data)) {
                        $success = 1;
                        $message = lang('save_success');
                    }
                } else {
                    $success = 0;
                    $message = lang('email_existed_in_system');
                }
            }
        }
        echo json_encode(array(
            'success' => $success,
            'message' => $message
        ));
    }

//    function crawler()
//    {
//        $start = 0;
//        while ($start <= 180) {
//            $start += 10;
//            $html = file_get_contents('http://ketoanbanthoigian.com/kinh-nghiem-ke-toan.html?start=' . $start);
//            preg_match_all('/<h2 itemprop="name">\n<a href="(.*)" itemprop="url">/', $html, $matches);
//            foreach ($matches[1] as $item) {
//                $html = file_get_contents('http://ketoanbanthoigian.com' . $item);
//                $html = preg_replace("/\n/", '', $html);
//
//                preg_match("/<h2 itemprop=\"name\">(.*)<\/h2><\/div><div itemprop=\"articleBody\">/", $html, $title);
//                $title = trim($title[1]);
//
//                preg_match("/<div itemprop=\"articleBody\">(.*)<div class=\"extranews_separator\"><\/div>/", $html, $content);
//                $content = trim($content[1]);
//
//                $data = array(
//                    'name' => $title,
//                    'content' => $content,
//                    'seo_title' => $title,
//                    'seo_description' => $title,
//                    'image' => base_url('uploads/images/KeToanTaiNha.png')
//                );
//                $dataId = '';
//                $this->blog_model->insert($data, $dataId);
//
//                //relationship
//                $id = createId();
//                $date = date("Y-m-d H:i:s");
//                $sql = "INSERT INTO blog_category_blog(id,blog_category_id,blog_id,date_entered,date_modifiled) VALUES('{$id}','0fbfa626124db3cf3b3fb5750da0911cOxbU','{$dataId}','{$date}','{$date}')";
//                $this->db->query($sql);
//
//                //rewrite url
//                $routerName = rewrite($title);
//                if (checkExistRouter($routerName)) {
//                    $i = 0;
//                    while (checkExistRouter($routerName . $i)) $i++;
//                    $routerName .= $i;
//                }
//                $routerId = createId();
//                $sql = "INSERT INTO router(id,name,target_id) VALUES('{$routerId}','{$routerName}','{$dataId}')";
//                $this->db->query($sql);
//            }
//        }
//    }
}