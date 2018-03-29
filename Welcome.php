<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome  extends CI_Controller {

        //Reference the model and load necessary libraries and helpers
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Form_model');
                $this->load->library(array('form_validation', 'session'));
                $this->load->helper(array('url', 'html', 'form'));
        }

        public function index()
        {
                //If the form FAILS to validate, reload the inputView page, else load the results view
                if ($this->Form_model->validate() == FALSE)
                {
                        $this->load->view('inputView', $this->session->all_userdata());
                }
                else
                {
                        $this->load->view('results', $this->session->all_userdata());
                }
        }
}
?>
