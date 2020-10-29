<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">
            <header class="panel-heading no-print">
                <?php
                if (!empty($lab->id))
                    echo '<i class="fa fa-edit"></i> ' . lang('edit_lab_report');
                else
                    echo '<i class="fa fa-plus-circle"></i> ' . lang('add_lab_report');
                ?>
            </header>
            <div class="col-md-7 no-print">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <!--  <div class="col-lg-12"> -->
                        <div class="">
                           <!--   <section class="panel"> -->
                            <section class="">
                                <!--   <div class="panel-body"> -->
                                <div class="">
                                    <style> 
                                        .lab{
                                            padding-top: 10px;
                                            padding-bottom: 20px;
                                            border: none;

                                        }
                                        .pad_bot{
                                            padding-bottom: 5px;
                                        }  

                                        form{
                                            background: #f1f1f1;
                                            padding: 21px;
                                        }

                                        .modal-body form{
                                            background: #fff;
                                            padding: 21px;
                                        }

                                        .remove{
                                            float: right;
                                            margin-top: -45px;
                                            margin-right: 42%;
                                            margin-bottom: 41px;
                                            width: 94px;
                                            height: 29px;
                                        }

                                        .remove1 span{
                                            width: 33%;
                                            height: 50px !important;
                                            padding: 10px

                                        }

                                        .qfloww {
                                            padding: 10px 0px;
                                            height: 370px;
                                            background: #f1f2f9;
                                            overflow: auto;
                                        }

                                        .remove1 {
                                            background: #5A9599;
                                            color: #fff;
                                            padding: 5px;
                                        }


                                        .span2{
                                            padding: 6px 12px;
                                            font-size: 14px;
                                            font-weight: 400;
                                            line-height: 1;
                                            color: #555;
                                            text-align: center;
                                            background-color: #eee;
                                            border: 1px solid #ccc
                                        }

                                    </style>

                                    <form role="form" id="editLabForm" class="clearfix" action="lab/addLab" method="post" enctype="multipart/form-data">

                                        <div class="">
                                            
                                            <div class="pull-right">
                                                <a data-toggle="modal" href="#myModal">
                                                    <div class="btn-group">
                                                        <button id="" class="btn green">
                                                            <i class="fa fa-plus-circle"></i> <?php echo lang('register_new_patient'); ?>
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                            


                                            <div class="col-md-8 lab pad_bot">
                                                <div class="col-md-3 lab_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('date'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in default-date-picker" name="date" value='<?php
                                                    if (!empty($lab->date)) {
                                                        echo date('d-m-Y', $lab->date);
                                                    } else {
                                                        echo date('d-m-Y');
                                                    }
                                                    ?>' placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-8 lab pad_bot">
                                                <div class="col-md-3 lab_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <select class="form-control m-bot15 js-example-basic-single pos_select" id="pos_select" name="patient" value=''> 
                                                        <option value="">Seleccionar .....</option>
                                                        <option value="add_new" style="color: #41cac0 !important;"><?php echo lang('add_new'); ?></option>
                                                        <?php foreach ($patients as $patient) { ?>
                                                            <option value="<?php echo $patient->id; ?>" <?php
                                                            if (!empty($lab->patient)) {
                                                                if ($lab->patient == $patient->id) {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> ><?php echo $patient->name; ?> </option>
                                                                <?php } ?>
                                                    </select>
                                                </div>
                                            </div> 

                                            <div class="col-md-8 panel"> 
                                            </div>

                                            <div class="pos_client">
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('name'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="p_name" value='<?php
                                                        if (!empty($lab->p_name)) {
                                                            echo $lab->p_name;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('email'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="p_email" value='<?php
                                                        if (!empty($lab->p_email)) {
                                                            echo $lab->p_email;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('phone'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="p_phone" value='<?php
                                                        if (!empty($lab->p_phone)) {
                                                            echo $lab->p_phone;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('age'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="p_age" value='<?php
                                                        if (!empty($lab->p_age)) {
                                                            echo $lab->p_age;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('gender'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <select class="form-control m-bot15" name="p_gender" value=''>

                                                            <option value="Male" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Male') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Hombre </option>   
                                                            <option value="Female" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Female') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Mujer </option>
                                                            <option value="Others" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Others') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Otro </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 lab pad_bot">
                                                <div class="col-md-3 lab_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('refd_by_doctor'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <select class="form-control m-bot15 js-example-basic-single add_doctor" id="add_doctor" name="doctor" value=''>  
                                                        <option value="">Seleccionar .....</option>
                                                        <option value="add_new" style="color: #41cac0 !important;"><?php echo lang('add_new'); ?></option>
                                                        <?php foreach ($doctors as $doctor) { ?>
                                                            <option value="<?php echo $doctor->id; ?>"<?php
                                                            if (!empty($lab->doctor)) {
                                                                if ($lab->doctor == $doctor->id) {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?>><?php echo $doctor->name; ?> </option>
                                                                <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="pos_doctor">
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('name'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_name" value='<?php
                                                        if (!empty($lab->p_name)) {
                                                            echo $lab->p_name;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('email'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_email" value='<?php
                                                        if (!empty($lab->p_email)) {
                                                            echo $lab->p_email;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 lab pad_bot">
                                                    <div class="col-md-3 lab_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('phone'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_phone" value='<?php
                                                        if (!empty($lab->p_phone)) {
                                                            echo $lab->p_phone;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 panel">
                                            </div>



                                        </div>


                                        <div class="col-md-12 lab pad_bot">
                                            <div class="col-md-1"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('report'); ?></label>
                                            </div>
                                            <div class="col-md-10"> 
                                                <textarea class="ckeditor form-control" name="report" value="" rows="10"><?php
                                                    if (!empty($setval)) {
                                                        echo set_value('report');
                                                    }
                                                    if (!empty($lab->report)) {
                                                        echo $lab->report;
                                                    }
                                                    ?>
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4 panel-body">

                                            <div class="col-md-12 lab">
                                                <div class="col-md-12">
                                                    <div class="col-md-3"> 
                                                    </div>  
                                                    <div class="col-md-6"> 
                                                        <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                                                    </div>
                                                    <div class="col-md-3"> 
                                                    </div> 
                                                </div>
                                            </div>


                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($lab->id)) {
                                                echo $lab->id;
                                            }
                                            ?>'>
                                            <div class="row">
                                            </div>
                                            <div class="form-group">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>












            <style>

                th{
                    text-align: center;
                }

                td{
                    text-align: center;
                }

                tr.total{
                    color: green;
                }



                .control-label{
                    width: 100px;
                }



                h1{
                    margin-top: 5px;
                }


                .print_width{
                    width: 50%;
                    float: left;
                } 

                ul.amounts li {
                    padding: 0px !important;
                }

                .invoice-list {
                    margin-bottom: 10px;
                }




                .panel{
                    border: 0px solid #5c5c47;
                    background: #fff !important;
                    height: 100%;
                    margin: 20px 5px 5px 5px;
                    border-radius: 0px !important;

                }



                .table.main{
                    margin-top: -50px;
                }



                .control-label{
                    margin-bottom: 0px;
                }

                tr.total td{
                    color: green !important;
                }

                .theadd th{
                    background: #edfafa !important;
                }

                td{
                    font-size: 12px;
                    padding: 5px;
                    font-weight: bold;
                }

                .details{
                    font-weight: bold;
                }

                hr{
                    border-bottom: 2px solid green !important;
                }

                .corporate-id {
                    margin-bottom: 5px;
                }

                .adv-table table tr td {
                    padding: 5px 10px;
                }



                .btn{
                    margin: 10px 10px 10px 0px;
                }












                @media print {

                    h1{
                        margin-top: 5px;
                    }

                    #main-content{
                        padding-top: 0px;
                    }

                    .print_width{
                        width: 50%;
                        float: left;
                    } 

                    ul.amounts li {
                        padding: 0px !important;
                    }

                    .invoice-list {
                        margin-bottom: 10px;
                    }

                    .wrapper{
                        margin-top: 0px;
                    }

                    .wrapper{
                        padding: 0px 0px !important;
                        background: #fff !important;

                    }



                    .wrapper{
                        border: 2px solid #802f00;
                    }

                    .panel{
                        border: 0px solid #5c5c47;
                        background: #fff !important;
                        padding: 0px 0px;
                        height: 100%;
                        margin: 5px 5px 5px 5px;
                        border-radius: 0px !important;
                        min-height: 1010px;

                    }



                    .table.main{
                        margin-top: -50px;
                    }



                    .control-label{
                        margin-bottom: 0px;
                    }

                    tr.total td{
                        color: green !important;
                    }

                    .theadd th{
                        background: #edfafa !important;
                    }

                    td{
                        font-size: 12px;
                        padding: 5px;
                        font-weight: bold;
                    }

                    .details{
                        font-weight: bold;
                    }

                    hr{
                        border-bottom: 2px solid green !important;
                    }

                    .corporate-id {
                        margin-bottom: 5px;
                    }

                    .adv-table table tr td {
                        padding: 5px 10px;
                    }




                }

            </style>








            <div class="panel panel-primary col-md-4">
                <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                <div class="" style="font-size: 10px;">
                    <div class="row invoice-list">

                        <div class="text-center corporate-id">


                            <h3>
                                <?php echo $settings->title ?>
                            </h3>
                            <h4>
                                <?php echo $settings->address ?>
                            </h4>
                            <h4>
                                Tel: <?php echo $settings->phone ?>
                            </h4>
                            <img alt="" src="<?php echo $this->settings_model->getSettings()->logo; ?>" width="200" height="100">
                            <h4 style="font-weight: bold; margin-top: 20px; text-transform: uppercase;">
                                <?php echo lang('lab') ?> <?php echo lang('lab_report') ?>
                                <hr style="width: 200px; border-bottom: 1px solid #000; margin-top: 5px; margin-bottom: 5px;">
                            </h4>
                        </div>





                        <div class="col-md-12">
                            <div class="col-md-6 pull-left row" style="text-align: left;">
                                <div class="col-md-12 row details" style="">
                                    <p>
                                        <?php
                                        if (!empty($lab)) {
                                            $patient_info = $this->db->get_where('patient', array('id' => $lab->patient))->row();
                                        }
                                        ?>
                                        <label class="control-label"><?php echo lang('patient'); ?> <?php echo lang('name'); ?> </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($patient_info)) {
                                                echo $patient_info->name . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-12 row details" style="">
                                    <p>
                                        <label class="control-label"><?php echo lang('patient_id'); ?>  </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($patient_info)) {
                                                echo $patient_info->id . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-12 row details" style="">
                                    <p>
                                        <label class="control-label"> <?php echo lang('address'); ?> </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($patient_info)) {
                                                echo $patient_info->address . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-12 row details" style="">
                                    <p>
                                        <label class="control-label"><?php echo lang('phone'); ?>  </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($patient_info)) {
                                                echo $patient_info->phone . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>


                            </div>

                            <div class="col-md-6 pull-right" style="text-align: left;">

                                <div class="col-md-12 row details" style="">
                                    <p>
                                        <label class="control-label"> <?php echo lang('lab'); ?> <?php echo lang('report'); ?> <?php echo lang('id'); ?>  </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($lab->id)) {
                                                echo $lab->id;
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>


                                <div class="col-md-12 row details">
                                    <p>
                                        <label class="control-label"><?php echo lang('date'); ?>  </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($lab->date)) {
                                                echo date('d-m-Y', $lab->date) . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>

                                <div class="col-md-12 row details">
                                    <p>
                                        <label class="control-label"><?php echo lang('doctor'); ?>  </label>
                                        <span style="text-transform: uppercase;"> : 
                                            <?php
                                            if (!empty($lab->doctor)) {
                                                echo $this->doctor_model->getDoctorById($lab->doctor)->name . ' <br>';
                                            }
                                            ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div> 


                    <div class="col-md-12 panel-body">
                        <?php
                        if (!empty($lab->report)) {
                            echo $lab->report;
                        }
                        ?>
                    </div>


                </div>


                <!--<div class="text-center invoice-btn col-md-12 row">
                    <a class="btn btn-info btn-lg invoice_button pull-left" onclick="javascript:window.print();"><i class="fa fa-print"></i> Imprimir </a>
                    
                    <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?>
                                 <a href="lab/editLab?id=<?php echo $lab->id; ?>" class="btn btn-info btn-lg invoice_button pull-left"><i class="fa fa-edit"></i> Edit Invoice </a>
                    <?php } ?>-->
                    

                </div>


                <div class="no-print">
                    <a href="lab/addLabView" class="pull-left">
                        <div class="btn-group">
                            <button id="" class="btn green">
                                <i class="fa fa-plus-circle"></i> <?php echo lang('add_a_new_report'); ?>
                            </button>
                        </div>
                    </a>
                </div>


            </div>

















        </section>

    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="common/js/codearistos.min.js"></script>



<script>
                        $(document).ready(function () {
                            var tot = 0;
                            $(".ms-selected").click(function () {
                                var id = $(this).data('idd');
                                $('#id-div' + id).remove();
                                $('#idinput-' + id).remove();
                                $('#mediidinput-' + id).remove();

                            });
                            $.each($('select.multi-select option:selected'), function () {
                                var id = $(this).data('idd');
                                if ($('#idinput-' + id).length)
                                {

                                } else {
                                    if ($('#id-div' + id).length)
                                    {

                                    } else {

                                        $("#editLabForm .qfloww").append('<div class="remove1 col-md-12" id="id-div' + id + '"> <span class="col-md-3 span1">  ' + $(this).data("cat_name") + '</span><span class="col-md-4 span2">Value: </span><span class="col-md-4 span3">Reference Value:<br> ' + $(this).data('id') + '</span></div>')
                                    }
                                    var input2 = $('<input>').attr({
                                        type: 'text',
                                        class: "remove col-md-3",
                                        id: 'idinput-' + id,
                                        name: 'valuee[]',
                                        value: '1',
                                    }).appendTo('#editLabForm .qfloww');

                                    $('<input>').attr({
                                        type: 'hidden',
                                        class: "remove",
                                        id: 'mediidinput-' + id,
                                        name: 'lab_test_id[]',
                                        value: id,
                                    }).appendTo('#editLabForm .qfloww');
                                }


                            });
                        });


</script>



<script>
    $(document).ready(function () {
        $('.multi-select').change(function () {
            var tot = 0;
            $(".ms-selected").click(function () {
                var id = $(this).data('idd');
                $('#id-div' + id).remove();
                $('#idinput-' + id).remove();
                $('#mediidinput-' + id).remove();

            });
            $.each($('select.multi-select option:selected'), function () {
                var id = $(this).data('idd');
                if ($('#idinput-' + id).length)
                {

                } else {
                    if ($('#id-div' + id).length)
                    {

                    } else {

                        $("#editLabForm .qfloww").append('<div class="remove1 col-md-12" id="id-div' + id + '"> <span class="col-md-3 span1">  ' + $(this).data("cat_name") + '</span><span class="col-md-4 span2">Value: </span><span class="col-md-4 span3">Reference Value:<br> ' + $(this).data('id') + '</span></div>')
                    }
                    var input2 = $('<input>').attr({
                        type: 'text',
                        class: "remove col-md-3",
                        id: 'idinput-' + id,
                        name: 'valuee[]',
                        value: '1',
                    }).appendTo('#editLabForm .qfloww');

                    $('<input>').attr({
                        type: 'hidden',
                        class: "remove",
                        id: 'mediidinput-' + id,
                        name: 'lab_test_id[]',
                        value: id,
                    }).appendTo('#editLabForm .qfloww');
                }


            });

        });
    });


</script>







<!-- Add Patient Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Registrar Paciente</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="patient/addNew?redirect=lab" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Direccion</label>
                        <input type="text" class="form-control" name="address" id="exampleInputEmail1" value='' placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1" value='' placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Imagen</label>
                        <input type="file" name="img_url">
                    </div>

                    <input type="hidden" name="id" value=''>

                    <section class="">
                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </section>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Patient Modal-->



<script>
    $(document).ready(function () {
        $('.pos_client').hide();
        $(document.body).on('change', '#pos_select', function () {

            var v = $("select.pos_select option:selected").val()
            if (v == 'add_new') {
                $('.pos_client').show();
            } else {
                $('.pos_client').hide();
            }
        });

    });


</script>

<script>
    $(document).ready(function () {
        $('.pos_doctor').hide();
        $(document.body).on('change', '#add_doctor', function () {

            var v = $("select.add_doctor option:selected").val()
            if (v == 'add_new') {
                $('.pos_doctor').show();
            } else {
                $('.pos_doctor').hide();
            }
        });

    });


</script>