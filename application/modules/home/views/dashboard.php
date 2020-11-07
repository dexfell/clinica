<!DOCTYPE html>
<html lang="en" <?php if ($this->db->get('settings')->row()->language == 'arabic') { ?> dir="rtl" <?php } ?>>
    <head>
        <base href="<?php echo base_url(); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Grupo6">
        <meta name="keyword" content="Php, Hospital, Clinic, Management, Software, Php, CodeIgniter, Hms, Accounting">
        <link rel="shortcut icon" href="uploads/Logo2.png">
        <title><?php echo $this->router->fetch_class(); ?> | <?php echo $this->db->get('settings')->row()->system_vendor; ?> </title>
        <!-- Bootstrap core CSS -->
        <link href="common/css/bootstrap.min.css" rel="stylesheet">
        <link href="common/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="common/assets/DataTables/datatables.min.css" rel="stylesheet" />
        <link href="common/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="common/css/style.css" rel="stylesheet">
        <link href="common/css/style-responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="common/assets/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-timepicker/compiled/timepicker.css">
        <link rel="stylesheet" type="text/css" href="common/assets/jquery-multi-select/css/multi-select.css" />
        <link href="common/css/invoice-print.css" rel="stylesheet" media="print">
        <link href="common/assets/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="common/assets/select2/css/select2.min.css"/>
        <link rel="stylesheet" type="text/css" href="common/assets/bootstrap-fileupload/bootstrap-fileupload.css" />


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->


        <?php if ($this->db->get('settings')->row()->language == 'arabic') { ?>
            <style>

                #main-content {
                    margin-right: 211px;
                    margin-left: 0px; 
                }

                body {
                    background: #f1f1f1;

                }





            </style>

        <?php } ?>

    </head>

    <body>
        <section id="container" class="">
            <!--header start-->
            <header class="header white-bg">
                <div class="sidebar-toggle-box">
                    <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-dedent fa-bars tooltips"></div>
                </div>
                <!--logo start-->
                <?php
                $settings_title = $this->db->get('settings')->row()->title;
                $settings_title = explode(' ', $settings_title);
                ?>
                <a href="" class="logo">
                    <strong>
                        <?php echo $settings_title[0]; ?>
                        <span>
                            <?php
                            if (!empty($settings_title[1])) {
                                echo $settings_title[1];
                            }
                            ?>
                        </span>
                    </strong>
                </a>
                <!--logo end-->
                
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- Payment notification start-->
                        <!-- <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?> 
                            <li id="header_inbox_bar" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="fa fa-money"></i>
                                    <span class="badge bg-important"> 
                                        <?php
                                        $query = $this->db->get('payment');
                                        $query = $query->result();
                                        foreach ($query as $payment) {
                                            $payment_date = date('y/m/d', $payment->date);
                                            if ($payment_date == date('y/m/d')) {
                                                $payment_number[] = '1';
                                            }
                                        }
                                        if (!empty($payment_number)) {
                                            echo $payment_number = array_sum($payment_number);
                                        } else {
                                            $payment_number = 0;
                                            echo $payment_number;
                                        }
                                        ?>        
                                    </span>
                                </a>
                                <ul class="dropdown-menu extended inbox">
                                    <div class="notify-arrow notify-arrow-red"></div>
                                    <li>
                                        <p class="red"> <?php
                                            echo $payment_number . ' ';
                                            if ($payment_number <= 1) {
                                                echo lang('payment_today');
                                            } else {
                                                echo lang('payments_today');
                                            }
                                            ?></p>
                                    </li>
                                    <li>
                                        <a href="finance/payment"><p class="green"> <?php echo lang('see_all_payments'); ?></p></a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>-->
                        
                        <!-- payment notification end -->  
                        <!-- patient notification start-->
                        <!--<?php if ($this->ion_auth->in_group(array('admin', 'Accountant', 'Doctor', 'Nurse', 'Laboratorist'))) { ?> 
                            <li id="header_notification_bar" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="fa fa-user"></i>
                                    <span class="badge bg-warning">   
                                        <?php
                                        $this->db->where('add_date', date('m/d/y'));
                                        $query = $this->db->get('patient');
                                        $query = $query->result();
                                        foreach ($query as $patient) {
                                            $patient_number[] = '1';
                                        }
                                        if (!empty($patient_number)) {
                                            echo $patient_number = array_sum($patient_number);
                                        } else {
                                            $patient_number = 0;
                                            echo $patient_number;
                                        }
                                        ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <div class="notify-arrow notify-arrow-yellow"></div>
                                    <li>
                                        <p class="yellow"><?php
                                            echo $patient_number . ' ';
                                            if ($patient_number <= 1) {
                                                echo lang('patient_registerred_today');
                                            } else {
                                                echo lang('patients_registerred_today');
                                            }
                                            ?> </p>
                                    </li>    
                                    <li>
                                        <a href="patient"><p class="green"><?php echo lang('see_all_patients'); ?></p></a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?> -->
                        
                        <!-- patient notification end -->  
                      
                        <!-- medicine notification start-->
                        <?php if ($this->ion_auth->in_group(array('admin', 'Pharmacist', 'Doctor'))) { ?> 
                            <li id="header_notification_bar" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <i class="fa fa-medkit"></i>
                                    <span class="badge bg-success">                          
                                        <?php
                                        $this->db->where('add_date', date('m/d/y'));
                                        $query = $this->db->get('medicine');
                                        $query = $query->result();
                                        foreach ($query as $medicine) {
                                            $medicine_number[] = '1';
                                        }
                                        if (!empty($medicine_number)) {
                                            echo $medicine_number = array_sum($medicine_number);
                                        } else {
                                            $medicine_number = 0;
                                            echo $medicine_number;
                                        }
                                        ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <div class="notify-arrow notify-arrow-yellow"></div>
                                    <li>
                                        <p class="yellow"><?php
                                            echo $medicine_number . ' ';
                                            if ($medicine_number <= 1) {
                                                echo lang('medicine_registerred_today');
                                            } else {
                                                echo lang('medicines_registered_today');
                                            }
                                            ?> </p>
                                    </li>
                                    <li>
                                        <a href="medicine"><p class="green"><?php echo lang('see_all_medicines'); ?></p></a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?> 
                        <!-- medicine notification end -->  
                      
                    </ul>
                </div>
                
                <div class="top-nav ">
                    <?php
                    $message = $this->session->flashdata('feedback');
                    if (!empty($message)) {
                        ?>
                        <div class="flashmessage pull-left"><i class="fa fa-check"></i> <?php echo $message; ?></div>
                    <?php } ?> 
                    <ul class="nav pull-right top-menu">
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="uploads/user.png" width="21" height="23">
                                <span class="username"><?php echo $this->ion_auth->user()->row()->username; ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <?php if (!$this->ion_auth->in_group('admin')) { ?> 
                                    <li><a href=""><i class="fa fa-admin"></i> <?php echo lang('dashboard'); ?></a></li>
                                <?php } ?>
                                <li><a href="profile"><i class=" fa fa-suitcase"></i><?php echo lang('profile'); ?></a></li>
                                <?php if ($this->ion_auth->in_group('admin')) { ?> 
                                    <li><a href="settings"><i class="fa fa-cogs"></i> <?php echo lang('settings'); ?></a></li>
                                <?php } ?>

                                <li><a><i class="fa fa-user"></i> <?php echo $this->ion_auth->get_users_groups()->row()->name ?></a></li>
                                <li><a href="auth/logout"><i class="fa fa-sign-out"></i> <?php echo lang('log_out'); ?></a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->

            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href=""> 
                                <i class="fa fa-dashboard"></i>
                                <span><?php echo lang('dashboard'); ?></span>
                            </a>
                        </li>
                        
                        <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-users"></i>
                                    <span><?php echo lang('doctor'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a href="doctor"><i class="fa fa-user"></i><?php echo lang('list_of_doctors'); ?></a></li>
                                    <li><a href="appointment/treatmentReport"><i class="fa fa-money"></i><?php echo lang('treatment_history'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>
                         <?php if ($this->ion_auth->in_group(array('admin', 'Accountant', 'Nurse', 'Doctor', 'Laboratorist', 'Receptionist'))) { ?>

                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-users"></i> 
                                    <span><?php echo lang('patient'); ?></span>
                                </a>
                                <ul class="sub"> 
                                    <li><a href="patient"><i class="fa fa-user"></i><?php echo lang('patient_list'); ?></a></li>
                                    <!--<li><a href="patient/patientPayments"><i class="fa fa-dollar"></i><?php echo lang('payments'); ?></a></li>-->
                                    <li><a href="patient/caseList"><i class="fa fa-book"></i><?php echo lang('case_history'); ?></a></li>
                                    <!--<li><a href="patient/documents"><i class="fa fa-file-text"></i><?php echo lang('documents'); ?></a></li-->
                                </ul>
                            </li>
                        <?php } ?>
                        <?php if ($this->ion_auth->in_group(array('admin', 'Doctor', 'Nurse', 'Receptionist'))) { ?>
                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-stethoscope"></i> 
                                    <span><?php echo lang('appointment'); ?></span>
                                </a>
                                <ul class="sub"> 
                                    <li><a href="appointment"><i class="fa fa-list-alt"></i><?php echo lang('all'); ?></a></li>
                                    <li><a href="appointment/addNew"><i class="fa fa-plus-circle"></i><?php echo lang('add'); ?></a></li>
                                    <li><a href="appointment/todays"><i class="fa fa-list-alt"></i><?php echo lang('todays'); ?></a></li>
                                    <li><a href="appointment/upcoming"><i class="fa fa-list-alt"></i><?php echo lang('upcoming'); ?></a></li>
                                    <li><a href="appointment/calendar"><i class="fa fa-list-alt"></i><?php echo lang('calendar'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        <?php if ($this->ion_auth->in_group('admin')) { ?>
                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-users"></i>
                                    <span><?php echo lang('human_resources'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a href="nurse"><i class="fa fa-user"></i><?php echo lang('nurse'); ?></a></li>
                                    <li><a href="pharmacist"><i class="fa fa-user"></i><?php echo lang('pharmacist'); ?></a></li>
                                    <li><a href="laboratorist"><i class="fa fa-user"></i><?php echo lang('laboratorist'); ?></a></li>
                                    <!--<li><a href="accountant"><i class="fa fa-user"></i><?php echo lang('accountant'); ?></a></li>-->
                                    <li><a href="receptionist"><i class="fa fa-user"></i><?php echo lang('receptionist'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>
                        <!--<?php if ($this->ion_auth->in_group('admin')) { ?>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-dollar"></i>
                                    <span><?php echo lang('financial_activities'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="finance/payment"><i class="fa fa-money"></i> <?php echo lang('payments'); ?></a></li>
                                    <li><a  href="finance/addPaymentView"><i class="fa fa-plus-circle"></i><?php echo lang('add_payment'); ?></a></li>
                                    <li><a  href="finance/paymentCategory"><i class="fa fa-edit"></i><?php echo lang('payment_procedures'); ?></a></li>
                                    <li><a  href="finance/expense"><i class="fa fa-money"></i><?php echo lang('expense'); ?></a></li>
                                    <li><a  href="finance/addExpenseView"><i class="fa fa-plus-circle"></i><?php echo lang('add_expense'); ?></a></li>
                                    <li><a  href="finance/expenseCategory"><i class="fa fa-edit"></i><?php echo lang('expense_categories'); ?> </a></li>
                                </ul>
                            </li>-->
                        <?php } ?>

                        <?php if ($this->ion_auth->in_group('Receptionist')) { ?>
                            <li>
                                <a href="appointment/calendar" >
                                    <i class="fa fa-calendar"></i>
                                    <span> <?php echo lang('calendar'); ?> </span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-dollar"></i>
                                    <span><?php echo lang('financial_activities'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="finance/payment"><i class="fa fa-money"></i> <?php echo lang('payments'); ?></a></li>
                                    <li><a  href="finance/addPaymentView"><i class="fa fa-plus-circle"></i><?php echo lang('add_payment'); ?></a></li>
                                </ul>
                            </li> 
                        <?php } ?>



                        <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                            <li>
                                <a href="prescription/all" >
                                    <i class="fa fa-stethoscope"></i>
                                    <span> <?php echo lang('prescription'); ?> </span>
                                </a>
                            </li>
                        <?php } ?>

                       <?php
                        if ($this->ion_auth->in_group(array('Accountant', 'Receptionist'))) {
                            ?>
                            <li>
                                <a href="finance/UserActivityReport">
                                    <i class="fa fa-dashboard"></i>
                                    <span><?php echo lang('user_activity_report'); ?></span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>



                        <?php if ($this->ion_auth->in_group(array('Doctor'))) { ?>
                            <li>
                                <a href="prescription">
                                    <i class="fa fa-dashboard"></i>
                                    <span><?php echo lang('prescription'); ?></span>
                                </a>
                            </li>   
                        <?php } ?>

 

                        <?php if ($this->ion_auth->in_group(array('admin', 'Doctor', 'Laboratorist'))) { ?>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-flask"></i>
                                    <span><?php echo lang('labs'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="lab"><i class="fa fa-file"></i><?php echo lang('lab_reports'); ?></a></li>
                                    <li><a  href="lab/addLabView"><i class="fa fa-plus-circle"></i><?php echo lang('add_lab_report'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>





                        <?php if ($this->ion_auth->in_group(array('admin', 'Doctor'))) { ?>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-medkit"></i>
                                    <span><?php echo lang('medicine'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="medicine"><i class="fa fa-medkit"></i><?php echo lang('medicine_list'); ?></a></li>
                                    <li><a  href="medicine/addMedicineView"><i class="fa fa-plus-circle"></i><?php echo lang('add_medicine'); ?></a></li>
                                    <li><a  href="medicine/medicineCategory"><i class="fa fa-edit"></i><?php echo lang('medicine_category'); ?></a></li>
                                    <li><a  href="medicine/addCategoryView"><i class="fa fa-plus-circle"></i><?php echo lang('add_medicine_category'); ?></a></li>
                                    <li><a  href="medicine/medicineStockAlert"><i class="fa fa-plus-circle"></i><?php echo lang('medicine_stock_alert'); ?></a></li>

                                </ul>
                            </li>
                        <?php } ?>






                        
                        <!--<?php if ($this->ion_auth->in_group(array('admin', 'Nurse', 'Laboratorist', 'Doctor'))) { ?>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-hospital-o"></i>
                                    <span><?php echo lang('report'); ?></span>
                                </a>
                                <ul class="sub">
                                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                                        <li><a  href="finance/financialReport"><i class="fa fa-book"></i><?php echo lang('financial_report'); ?></a></li>
                                        <li> <a href="finance/AllUserActivityReport">  <i class="fa fa-dashboard"></i>   <span><?php echo lang('user_activity_report'); ?></span> </a></li>
                                    <?php } ?>
                                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                                        <li><a  href="finance/doctorsCommission"><i class="fa fa-edit"></i><?php echo lang('doctors_commission'); ?> </a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>-->
                        <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-envelope-o"></i>
                                    <span><?php echo lang('sms'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="sms/sendView"><i class="fa fa-location-arrow"></i><?php echo lang('write_message'); ?></a></li>
                                    <li><a  href="sms/sent"><i class="fa fa-list-alt"></i><?php echo lang('sent_messages'); ?></a></li>
                                    <?php if ($this->ion_auth->in_group(array('admin'))) { ?>
                                        <!--<li><a  href="sms/settings"><i class="fa fa-gear"></i><?php echo lang('sms_settings'); ?></a></li>-->
                                    <?php } ?>
                                </ul>
                            </li> 
                        <?php } ?>
                        <!--<?php if ($this->ion_auth->in_group(array('admin'))) { ?>

                            <li> <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-cogs"></i>
                                    <span><?php echo lang('settings'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li><a href="settings"><i class="fa fa-gear"></i><?php echo lang('system_settings'); ?></a></li>
                                    <li><a href="settings/language"><i class="fa fa-wrench"></i><?php echo lang('language'); ?></a></li>
                                    <li><a href="settings/backups"><i class="fa fa-smile-o"></i><?php echo lang('backup_database'); ?></a></li>
                                </ul>
                            </li>
                        <?php } ?>   -->

                        <?php if ($this->ion_auth->in_group('Accountant')) { ?>

                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa  fa-hospital-o"></i>
                                    <span><?php echo lang('payments'); ?></span>
                                </a>
                                <ul class="sub">
                                    <li>
                                        <a href="finance/payment" >
                                            <i class="fa fa-money"></i>
                                            <span> <?php echo lang('payments'); ?> </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="finance/addPaymentView" >
                                            <i class="fa fa-plus-circle"></i>
                                            <span> <?php echo lang('add_payment'); ?> </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="finance/paymentCategory" >
                                            <i class="fa fa-edit"></i>
                                            <span> <?php echo lang('payment_procedures'); ?> </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="finance/expense" >
                                    <i class="fa fa-money"></i>
                                    <span> <?php echo lang('expense'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="finance/addExpenseView" >
                                    <i class="fa fa-plus-circle"></i>
                                    <span> <?php echo lang('add_expense'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="finance/expenseCategory" >
                                    <i class="fa fa-edit"></i>
                                    <span> <?php echo lang('expense_categories'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="finance/doctorsCommission" >
                                    <i class="fa fa-edit"></i>
                                    <span> <?php echo lang('doctors_commission'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="finance/financialReport" >
                                    <i class="fa fa-book"></i>
                                    <span> <?php echo lang('financial_report'); ?> </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($this->ion_auth->in_group('Pharmacist')) { ?>
                            <li>
                                <a href="prescription/all" >
                                    <i class="fa fa-stethoscope"></i>
                                    <span> <?php echo lang('prescription'); ?> </span>
                                </a>    
                            </li>   
                            <li>
                                <a href="medicine" >
                                    <i class="fa fa-medkit"></i>
                                    <span> <?php echo lang('medicine_list'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="medicine/addMedicineView" >
                                    <i class="fa fa-plus-circle"></i>
                                    <span> <?php echo lang('add_medicine'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="medicine/medicineCategory" >
                                    <i class="fa fa-medkit"></i>
                                    <span> <?php echo lang('medicine_category'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="medicine/addCategoryView" >
                                    <i class="fa fa-plus-circle"></i>
                                    <span> <?php echo lang('add_medicine_category'); ?> </span>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($this->ion_auth->in_group('Patient')) { ?>
                            <li>
                                <a href="patient/calendar" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('appointment'); ?> <?php echo lang('calendar'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="patient/myCaseList" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('history'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="patient/myPrescription" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('prescription'); ?>  </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="patient/myDocuments" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('documents'); ?> </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="patient/myPayment" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('payment'); ?> </span>
                                </a>
                            </li>

                        <?php } ?>

                        <?php if ($this->ion_auth->in_group('im')) { ?>
                            <li>
                                <a href="patient/addNewView" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('add_patient'); ?> </span>
                                </a>
                            </li>
                            <li>
                                <a href="finance/addPaymentView" >
                                    <i class="fa fa-user"></i>
                                    <span> <?php echo lang('add_payment'); ?>  </span>
                                </a>
                            </li>-->
                        <?php } ?>
                        <li>
                            <a href="profile" >
                                <i class="fa fa-user"></i>
                                <span> <?php echo lang('profile'); ?> </span>
                            </a>
                        </li>

                        <!--multi level menu start-->

                        

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->




