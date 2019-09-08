<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Share_model extends CI_Model
{
    private $_table = "wish";

    public $name;
    public $wish;
    public $description;

    public function rules() {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'wish',
            'label' => 'Wish',
            'rules' => 'required'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->_table)->result();
    }

    public function save() {
        $post =  $this->input->post();
        $this->wish_id = uniqid();
        $this->name = $post['name'];
        $this->wish = $post['wish'];
        $this->description = $post['description'];
        $this->db->insert($this->_table, $this);
    }

    public function wish_count() {
        return $this->db->count_all($this->_table);
    }

    public function today_wish_count() {
        $today_wish = $this->db->get_where($this->_table, ["timestamp > CURDATE()"])->result_array();
        return $today_wish_count = count($today_wish);
    }

    public function today_wish() {
        return $today_wish = $this->db->get_where($this->_table, ["timestamp > CURDATE()"])->result();
    }
}
