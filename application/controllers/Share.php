<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Share extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('share_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['wish'] = $this->share_model->getAll();
        $data['count'] = $this->share_model->wish_count();
        $data['today'] = $this->share_model->today_wish_count();
        $data['header'] = $this->load->view('template/header', NULL, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

        $this->load->view('content/home', $data);
    }

    public function list() {
        $data['header'] = $this->load->view('template/header', NULL, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);
        $data['wish'] = $this->share_model->getAll();
        
        $this->load->view('content/wish_list', $data);
    }

    public function recent() {
        $data['header'] = $this->load->view('template/header', NULL, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);
        $data['wish'] = $this->share_model->today_wish();
        
        $this->load->view('content/today', $data);
    }

    public function add() {
        $data['header'] = $this->load->view('template/header', NULL, TRUE);
        $data['footer'] = $this->load->view('template/footer', NULL, TRUE);

        $this->load->view('content/new_form', $data);
    }

    public function save() {
        $wish = $this->share_model;
        $validation = $this->form_validation;
        $validation->set_rules($wish->rules());

        if ($validation->run()) {
            $wish->save();
            $this->session->set_flashdata('success', 'Your wish shared!');
        } else {
            $this->session->set_flashdata('warning', 'Try again later!');
        }

        redirect(site_url('list'));
    }
}