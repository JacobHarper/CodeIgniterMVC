<?php

class Form_model extends CI_Model{

        //Create a contrsuctor that can override the model
        function __construct()
        {
        parent::__construct();
        }

        //Create a function that validates the form information
        function validate()
        {
                //Load the form validation library
                $this->load->library('form_validation');

                //Set validation rules, specifically for email and phone
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('email', 'E-Mail Address', 'required|valid_email');
                $this->form_validation->set_rules('hphone', 'Home Phone', 'required|numeric|max_length[10]');
                $this->form_validation->set_rules('mphone', 'Mobile Phone', 'required|numeric|max_length[10]');
                $this->form_validation->set_rules('street', 'Street Address', 'required');
                $this->form_validation->set_rules('city', 'City', 'required');
                $this->form_validation->set_rules('state', 'State', 'required');
                $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

                //Create an array of variables from the inputView view
                $arraydata = array(
                        'fname'=>$this->input->post('fname'),
                        'lname'=>$this->input->post('lname'),
                        'email'=>$this->input->post('email'),
                        'hphone'=>$this->input->post('hphone'),
                        'mphone'=>$this->input->post('mphone'),
                        'street'=>$this->input->post('street'),
                        'city'=>$this->input->post('city'),
                        'state'=>$this->input->post('state'),
                        'zipcode'=>$this->input->post('zipcode'));

                //Set the array's userdata for the current session
                $this->session->set_userdata($arraydata);

                //If the form FAILS to validate, reload the inputView page, else load the results view
                if ($this->form_validation->run() == FALSE)
                {
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }

        }

        }

?>
