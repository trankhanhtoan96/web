<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class User_model
 * @property CI_DB $db
 */
class Page_model extends CI_Model
{
    private $tableName = 'page';
    private $fields = array();

    function __construct()
    {
        parent::__construct();
        $this->fields = $this->db->list_fields($this->tableName);
    }

    /**
     * @param string $select
     * @param string $orderBy
     * @param string $direction [ACS,DESC]
     * @param int $limit
     * @param int $ofset
     * @return array
     */
    function get_list($select = '*', $orderBy = 'date_entered', $direction = 'DESC', $limit = 0, $ofset = 0)
    {
        $this->db->reset_query();
        $this->db->select($select);
        $this->db->from($this->tableName);
        if ($orderBy != '' && $direction != '') {
            $this->db->order_by($orderBy, $direction);
        }
        if ($limit != 0) {
            $this->db->limit($limit, $ofset);
        }
        return $this->db->get()->result_array();
    }

    /**
     * @param $id
     * @param string $select
     * @return array
     */
    function get($id, $select = '*')
    {
        $this->db->reset_query();
        $this->db->select($select);
        $this->db->from($this->tableName);
        $this->db->where('id', $id);
        $result = $this->db->get();
        $arr = array();
        if ($result->num_rows() == 1) {
            $arr = $result->result_array();
            $arr = $arr[0];
        }
        return $arr;
    }

    /**
     * @param array $data
     * @param string $id
     * @return bool
     */
    function insert(array $data, &$id = '')
    {
        //remove field not exist
        foreach ($data as $key => $value) {
            if (!in_array($key, $this->fields)) {
                unset($data[$key]);
            }
        }
        $id = createId();
        $data['id'] = $id;
        $data['date_entered'] = date("Y-m-d H:i:s");
        $data['date_modifiled'] = $data['date_entered'];
        $data['user_created'] = $this->session->userdata('userLogined')['id'];
        $data['user_modifiled'] = $data['user_created'];
        $this->db->reset_query();
        if ($this->db->insert($this->tableName, $data)) return true;
        return false;
    }

    /**
     * @param array $data
     * @return bool
     */
    function update(array $data)
    {
        if (empty($data['id'])) return false;
        $id = $data['id'];
        unset($data['id']);
        unset($data['date_entered']);
        unset($data['user_created']);
        $data['date_modifiled'] = date("Y-m-d H:i:s");
        $data['user_modifiled'] = $this->session->userdata('userLogined')['id'];
        //remove field not exist
        foreach ($data as $key => $value) {
            if (!in_array($key, $this->fields)) {
                unset($data[$key]);
            }
        }
        $this->db->reset_query();
        $this->db->where('id', $id);
        if ($this->db->update($this->tableName, $data)) return true;
        return false;
    }

    /**
     * @param $id
     * @return bool
     */
    function delete($id)
    {
        $this->db->reset_query();
        $this->db->where('id', $id);
        if ($this->db->delete($this->tableName)) return true;
        return false;
    }
}