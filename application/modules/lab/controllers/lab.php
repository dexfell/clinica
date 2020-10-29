<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lab extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('lab_model');
        $this->load->model('doctor/doctor_model');
        $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);
        $this->load->model('patient/patient_model');
        $this->load->model('accountant/accountant_model');
        $this->load->model('receptionist/receptionist_model');
        $this->load->model('settings/settings_model');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        if (!$this->ion_auth->in_group(array('admin', 'Accountant', 'Receptionist', 'Nurse', 'Laboratorist', 'Doctor'))) {
            redirect('home/permission');
        }
    }

    public function index() {

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $data['settings'] = $this->settings_model->getSettings();
        $data['labs'] = $this->lab_model->getLab();

        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('lab', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function lab() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $data['settings'] = $this->settings_model->getSettings();
        $data['labs'] = $this->lab_model->getLab();

        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('lab', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function addLabView() {
        $data = array();


        $id = $this->input->get('id');

        if (!empty($id)) {
            $data['lab'] = $this->lab_model->getLabById($id);
        }

        $data['settings'] = $this->settings_model->getSettings();
        $data['categories'] = $this->lab_model->getLabCategory();
        $data['patients'] = $this->patient_model->getPatient();
        $data['doctors'] = $this->doctor_model->getDoctor();
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('add_lab_view', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function addLab() {
        $id = $this->input->post('id');

        $report = $this->input->post('report');

        $patient = $this->input->post('patient');

        $p_name = $this->input->post('p_name');
        $p_email = $this->input->post('p_email');
        if (empty($p_email)) {
            $p_email = $p_name . '-' . rand(1, 1000) . '-' . $p_name . '-' . rand(1, 1000) . '@example.com';
        }
        if (!empty($p_name)) {
            $password = $p_name . '-' . rand(1, 100000000);
        }
        $p_phone = $this->input->post('p_phone');
        $p_age = $this->input->post('p_age');
        $p_gender = $this->input->post('p_gender');
        $add_date = date('m/d/y');


        $patient_id = rand(10000, 1000000);



        $d_name = $this->input->post('d_name');
        $d_email = $this->input->post('d_email');
        if (empty($d_email)) {
            $d_email = $d_name . '-' . rand(1, 1000) . '-' . $d_name . '-' . rand(1, 1000) . '@example.com';
        }
        if (!empty($d_name)) {
            $password = $d_name . '-' . rand(1, 100000000);
        }
        $d_phone = $this->input->post('d_phone');

        $doctor = $this->input->post('doctor');
        $date = $this->input->post('date');
        if (!empty($date)) {
            $date = strtotime($date);
        } else {
            $date = time();
        }
        $date_string = date('d-m-y', $date);
        $discount = $this->input->post('discount');
        $amount_received = $this->input->post('amount_received');
        $user = $this->ion_auth->get_user_id();

        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

// Validating Category Field
// $this->form_validation->set_rules('category_amount[]', 'Category', 'min_length[1]|max_length[100]');
// Validating Price Field
        $this->form_validation->set_rules('patient', 'Patient', 'trim|min_length[2]|max_length[100]|xss_clean');
// Validating Price Field
        $this->form_validation->set_rules('discount', 'Discount', 'trim|min_length[1]|max_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            redirect('lab/addLabView');
        } else {
            if (!empty($p_name)) {

                $data_p = array(
                    'patient_id' => $patient_id,
                    'name' => $p_name,
                    'email' => $p_email,
                    'phone' => $p_phone,
                    'sex' => $p_gender,
                    'age' => $p_age,
                    'add_date' => $add_date,
                    'how_added' => 'from_pos'
                );
                $username = $this->input->post('p_name');
// Adding New Patient
                if ($this->ion_auth->email_check($p_email)) {
                    $this->session->set_flashdata('feedback', 'This Email Address Is Already Registered');
                } else {
                    $dfg = 5;
                    $this->ion_auth->register($username, $password, $p_email, $dfg);
                    $ion_user_id = $this->db->get_where('users', array('email' => $p_email))->row()->id;
                    $this->patient_model->insertPatient($data_p);
                    $patient_user_id = $this->db->get_where('patient', array('email' => $p_email))->row()->id;
                    $id_info = array('ion_user_id' => $ion_user_id);
                    $this->patient_model->updatePatient($patient_user_id, $id_info);
                }
//    }
            }

            if (!empty($d_name)) {

                $data_d = array(
                    'name' => $d_name,
                    'email' => $d_email,
                    'phone' => $d_phone,
                );
                $username = $this->input->post('d_name');
// Adding New Patient
                if ($this->ion_auth->email_check($d_email)) {
                    $this->session->set_flashdata('feedback', 'This Email Address Is Already Registered');
                } else {
                    $dfgg = 4;
                    $this->ion_auth->register($username, $password, $d_email, $dfgg);
                    $ion_user_id = $this->db->get_where('users', array('email' => $d_email))->row()->id;
                    $this->doctor_model->insertDoctor($data_d);
                    $doctor_user_id = $this->db->get_where('doctor', array('email' => $d_email))->row()->id;
                    $id_info = array('ion_user_id' => $ion_user_id);
                    $this->doctor_model->updateDoctor($doctor_user_id, $id_info);
                }
            }


            if ($patient == 'add_new') {
                $patient = $patient_user_id;
            }

            if ($doctor == 'add_new') {
                $doctor = $doctor_user_id;
            }

            if (!empty($patient)) {
                $patient_details = $this->patient_model->getPatientById($patient);
                $patient_name = $patient_details->name;
                $patient_phone = $patient_details->phone;
                $patient_address = $patient_details->address;
            } else {
                $patient_name = 0;
                $patient_phone = 0;
                $patient_address = 0;
            }

            if (!empty($doctor)) {
                $doctor_details = $this->doctor_model->getDoctorById($doctor);
                $doctor_name = $doctor_details->name;
            } else {
                $doctor_name = 0;
            }

            $data = array();

            if (empty($id)) {
                $data = array(
                    // 'category_name' => $category_name,
                    'report' => $report,
                    'patient' => $patient,
                    'date' => $date,
                    'doctor' => $doctor,
                    'user' => $user,
                    'patient_name' => $patient_name,
                    'patient_phone' => $patient_phone,
                    'patient_address' => $patient_address,
                    'doctor_name' => $doctor_name,
                    'date_string' => $date_string
                );


                $this->lab_model->insertLab($data);
                $inserted_id = $this->db->insert_id();

                $this->session->set_flashdata('feedback', 'Added');
                redirect("lab/addLabView?id=" . "$inserted_id");
            } else {
                $data = array(
                    //   'category_name' => $category_name,
                    'report' => $report,
                    'patient' => $patient,
                    'doctor' => $doctor,
                    'user' => $user,
                    'patient_name' => $patient_details->name,
                    'patient_phone' => $patient_details->phone,
                    'patient_address' => $patient_details->address,
                    'doctor_name' => $doctor_details->name,
                );
                $this->lab_model->updateLab($id, $data);
                $this->session->set_flashdata('feedback', 'Updated');
                redirect("lab/addLabView?id=" . "$id");
            }
        }
    }

    function editLab() {
        if ($this->ion_auth->in_group(array('admin', 'Accountant', 'Laboratorist', 'Nurse', 'Patient'))) {
            $data = array();
            $data['settings'] = $this->settings_model->getSettings();
            $data['categories'] = $this->lab_model->getLabCategory();
            $data['patients'] = $this->patient_model->getPatient();
            $data['doctors'] = $this->doctor_model->getDoctor();
            $id = $this->input->get('id');
            $data['lab'] = $this->lab_model->getLabById($id);
            $this->load->view('home/dashboard'); // just the header file
            $this->load->view('add_lab_view', $data);
            $this->load->view('home/footer'); // just the footer file
        }
    }

    function delete() {
        $id = $this->input->get('id');
        $this->lab_model->deleteLab($id);
        $this->session->set_flashdata('feedback', 'Deleted');
        redirect('lab/lab');
    }

    public function labCategory() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $data['categories'] = $this->lab_model->getLabCategory();
        $data['settings'] = $this->settings_model->getSettings();
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('lab_category', $data);
        $this->load->view('home/footer'); // just the header file
    }

    public function addLabCategoryView() {
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('add_lab_category');
        $this->load->view('home/footer'); // just the header file
    }

    public function addLabCategory() {
        $id = $this->input->post('id');
        $category = $this->input->post('category');
        $description = $this->input->post('description');
        $reference = $this->input->post('reference_value');


        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
// Validating Category Name Field
        $this->form_validation->set_rules('category', 'Category', 'trim|required|min_length[1]|max_length[100]|xss_clean');
// Validating Description Field
        $this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[1]|max_length[100]|xss_clean');
        // Validating Description Field
        $this->form_validation->set_rules('reference_value', 'Reference Value', 'trim|required|min_length[1]|max_length[1000]|xss_clean');
// Validating Description Field
        $this->form_validation->set_rules('type', 'Type', 'trim|min_length[1]|max_length[100]|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if (!empty($id)) {
                $this->session->set_flashdata('feedback', 'Validation Error !');
                redirect('lab/editLabCategory?id=' . $id);
            } else {
                $data = array();
                $data['setval'] = 'setval';
                $this->load->view('home/dashboard'); // just the header file
                $this->load->view('add_lab_category', $data);
                $this->load->view('home/footer'); // just the header file
            }
        } else {
            $data = array();
            $data = array('category' => $category,
                'description' => $description,
                'reference_value' => $reference,
            );
            if (empty($id)) {
                $this->lab_model->insertLabCategory($data);
                $this->session->set_flashdata('feedback', 'Added');
            } else {
                $this->lab_model->updateLabCategory($id, $data);
                $this->session->set_flashdata('feedback', 'Updated');
            }
            redirect('lab/labCategory');
        }
    }

    function editLabCategory() {
        $data = array();
        $id = $this->input->get('id');
        $data['category'] = $this->lab_model->getLabCategoryById($id);
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('add_lab_category', $data);
        $this->load->view('home/footer'); // just the footer file
    }

    function deleteLabCategory() {
        $id = $this->input->get('id');
        $this->lab_model->deleteLabCategory($id);
        redirect('lab/labCategory');
    }

    function invoice() {
        $data = array();
        $id = $this->input->get('id');
        $data['settings'] = $this->settings_model->getSettings();
        $data['lab'] = $this->lab_model->getLabById($id);
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('invoice', $data);
        $this->load->view('home/footer'); // just the footer fi
    }

    function patientLabHistory() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }
        $patient = $this->input->get('patient');
        if (empty($patient)) {
            $patient = $this->input->post('patient');
        }

        $date_from = strtotime($this->input->post('date_from'));
        $date_to = strtotime($this->input->post('date_to'));
        if (!empty($date_to)) {
            $date_to = $date_to + 86399;
        }

        $data['date_from'] = $date_from;
        $data['date_to'] = $date_to;

        if (!empty($date_from)) {
            $data['labs'] = $this->lab_model->getLabByPatientIdByDate($patient, $date_from, $date_to);
            $data['deposits'] = $this->lab_model->getDepositByPatientIdByDate($patient, $date_from, $date_to);
        } else {
            $data['labs'] = $this->lab_model->getLabByPatientId($patient);
            $data['pharmacy_labs'] = $this->pharmacy_model->getLabByPatientId($patient);
            $data['ot_labs'] = $this->lab_model->getOtLabByPatientId($patient);
            $data['deposits'] = $this->lab_model->getDepositByPatientId($patient);
        }



        $data['patient'] = $this->patient_model->getPatientByid($patient);
        $data['settings'] = $this->settings_model->getSettings();



        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('patient_deposit', $data);
        $this->load->view('home/footer'); // just the header file
    }

    function financialReport() {
        $date_from = strtotime($this->input->post('date_from'));
        $date_to = strtotime($this->input->post('date_to'));
        if (!empty($date_to)) {
            $date_to = $date_to + 86399;
        }
        $data = array();
        $data['lab_categories'] = $this->lab_model->getLabCategory();
        $data['expense_categories'] = $this->lab_model->getExpenseCategory();


// if(empty($date_from)&&empty($date_to)) {
//    $data['labs']=$this->lab_model->get_lab();
//     $data['ot_labs']=$this->lab_model->get_ot_lab();
//     $data['expenses']=$this->lab_model->get_expense();
// }
// else{

        $data['labs'] = $this->lab_model->getLabByDate($date_from, $date_to);
        $data['ot_labs'] = $this->lab_model->getOtLabByDate($date_from, $date_to);
        $data['deposits'] = $this->lab_model->getDepositsByDate($date_from, $date_to);
        $data['expenses'] = $this->lab_model->getExpenseByDate($date_from, $date_to);
// } 
        $data['from'] = $this->input->post('date_from');
        $data['to'] = $this->input->post('date_to');
        $data['settings'] = $this->settings_model->getSettings();
        $this->load->view('home/dashboard'); // just the header file
        $this->load->view('financial_report', $data);
        $this->load->view('home/footer'); // just the footer fi
    }

    function getLab() {
        $requestData = $_REQUEST;
        $start = $requestData['start'];
        $limit = $requestData['length'];
        $search = $this->input->post('search')['value'];

        if ($limit == -1) {
            if (!empty($search)) {
                $data['labs'] = $this->lab_model->getLabBysearch($search);
            } else {
                $data['labs'] = $this->lab_model->getLab();
            }
        } else {
            if (!empty($search)) {
                $data['labs'] = $this->lab_model->getLabByLimitBySearch($limit, $start, $search);
            } else {
                $data['labs'] = $this->lab_model->getLabByLimit($limit, $start);
            }
        }
        //  $data['labs'] = $this->lab_model->getLab();

        foreach ($data['labs'] as $lab) {
            $date = date('d-m-y', $lab->date);
            if ($this->ion_auth->in_group(array('admin', 'Accountant', 'Receptionist'))) {
                $options1 = ' <a class="btn btn-info btn-xs editbutton" title="' . lang('edit') . '" href="lab/editLab?id=' . $lab->id . '"><i class="fa fa-edit"> </i> ' . lang('edit') . '</a>';
            }

            $options2 = '<a class="btn btn-xs invoicebutton" title="' . lang('lab') . '" style="color: #fff;" href="lab/invoice?id=' . $lab->id . '"><i class="fa fa-file-text"></i> ' . lang('report') . '</a>';

            if ($this->ion_auth->in_group(array('admin', 'Accountant', 'Receptionist'))) {
                $options3 = '<a class="btn btn-info btn-xs delete_button" title="' . lang('delete') . '" href="lab/delete?id=' . $lab->id . '" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fa fa-trash-o"></i>' . lang('delete') . '</a>';
            }

            $doctor_info = $this->doctor_model->getDoctorById($lab->doctor);
            if (!empty($doctor_info)) {
                $doctor = $doctor_info->name;
            } else {
                if (!empty($lab->doctor_name)) {
                    $doctor = $lab->doctor_name;
                } else {
                    $doctor = ' ';
                }
            }


            $patient_info = $this->patient_model->getPatientById($lab->patient);
            if (!empty($patient_info)) {
                $patient_details = $patient_info->name . '</br>' . $patient_info->address . '</br>' . $patient_info->phone . '</br>';
            } else {
                $patient_details = ' ';
            }
            $info[] = array(
                $lab->id,
                $patient_details,
                $doctor,
                $date,
                $options1 . ' ' . $options2 . ' ' . $options3,
                    // $options2 . ' ' . $options3
            );
        }


        if (!empty($data['labs'])) {
            $output = array(
                "draw" => intval($requestData['draw']),
                "recordsTotal" => $this->db->get('lab')->num_rows(),
                "recordsFiltered" => $this->db->get('lab')->num_rows(),
                "data" => $info
            );
        } else {
            $output = array(
                // "draw" => 1,
                "recordsTotal" => 0,
                "recordsFiltered" => 0,
                "data" => []
            );
        }




        echo json_encode($output);
    }

}

/* End of file lab.php */
/* Location: ./application/modules/lab/controllers/lab.php */