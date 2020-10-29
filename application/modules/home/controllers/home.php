<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('ion_auth_model');
        $this->load->model('finance/finance_model');
         $this->load->model('appointment/appointment_model');
        $this->load->library('upload');
        $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);
        $this->load->model('settings/settings_model');
        $this->load->model('home_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        } 
    }

    public function index() {

        $data = array();
        $data['settings'] = $this->settings_model->getSettings();
        $data['sum'] = $this->home_model->getSum('gross_total', 'payment');
        $data['payments'] = $this->finance_model->getPayment();
        $data['this_month'] = $this->finance_model->getThisMonth();
        $data['expenses'] = $this->finance_model->getExpense();
        $data['appointments'] = $this->appointment_model->getAppointment();
        $this->load->view('dashboard'); // just the header file
        $this->load->view('home', $data);
        $this->load->view('footer');
        if ($this->ion_auth->in_group(array('Accountant', 'Receptionist'))) {
            redirect('finance/addPaymentView');
        }
        
       // if ($this->ion_auth->in_group(array('Pharmacist'))) {
       //     redirect('finance/pharmacy/home');
       // }
        
        if ($this->ion_auth->in_group(array('Patient'))) {
            $user_id = $this->ion_auth->get_user_id();
            $patient_id = $this->db->get_where('patient', array('ion_user_id' => $user_id))->row()->id;
            redirect('patient/medicalHistory?id='.$patient_id); 
        }
    }

    public function permission() {
        $this->load->view('permission');
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
