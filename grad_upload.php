<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class grad_upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->helper('file');
    }

    public function index() {
        $this->load->view('grad_upload_view', array('error' => ''));
    }

   public function do_upload()
   {
      $this->load->model('grad_upload_img');
   }

}

?>
