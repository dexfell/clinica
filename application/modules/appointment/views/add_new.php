    
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <?php
                if (!empty($appointment->id))
                    echo '<i class="fa fa-edit"></i> Edit Appointment';
                else
                    echo '<i class="fa fa-plus-circle"></i> Agregar nueva cita';
                ?>
            </header>


            <style>

                .panel{
                    background: transparent;
                }



            </style>


            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">

                        <div class="col-lg-6">
                            <section class="panel">
                                <div class="panel-body">
                                    <div class="col-lg-12">
                                        <?php echo validation_errors(); ?>
                                        <?php echo $this->session->flashdata('feedback'); ?>
                                    </div>
                                    <form role="form" action="appointment/addNew" method="post" enctype="multipart/form-data">
                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?></label>
                                            </div>
                                            <div class="col-md-9"> 
                                                <select class="form-control m-bot15 js-example-basic-single pos_select" id="pos_select" name="patient" value=''> 
                                                    <option value="">Selecccionar .....</option>
                                                    <option value="add_new" style="color: #41cac0 !important;"><?php echo lang('add_new'); ?></option>
                                                    <?php foreach ($patients as $patient) { ?>
                                                        <option value="<?php echo $patient->id; ?>" <?php
                                                        if (!empty($payment->patient)) {
                                                            if ($payment->patient == $patient->id) {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?> ><?php echo $patient->name; ?> </option>
                                                            <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pos_client clearfix">
                                            <div class="col-md-8 payment pad_bot pull-right">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('name'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="p_name" value='<?php
                                                    if (!empty($payment->p_name)) {
                                                        echo $payment->p_name;
                                                    }
                                                    ?>' placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 payment pad_bot pull-right">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('email'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="p_email" value='<?php
                                                    if (!empty($payment->p_email)) {
                                                        echo $payment->p_email;
                                                    }
                                                    ?>' placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 payment pad_bot pull-right">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('phone'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="p_phone" value='<?php
                                                    if (!empty($payment->p_phone)) {
                                                        echo $payment->p_phone;
                                                    }
                                                    ?>' placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-8 payment pad_bot pull-right">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('age'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="p_age" value='<?php
                                                    if (!empty($payment->p_age)) {
                                                        echo $payment->p_age;
                                                    }
                                                    ?>' placeholder="">
                                                </div>
                                            </div> 
                                            <div class="col-md-8 payment pad_bot pull-right">
                                                <div class="col-md-3 payment_label"> 
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

                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1">  <?php echo lang('doctor'); ?></label>
                                            </div>
                                            <div class="col-md-9"> 
                                                <select class="form-control m-bot15 js-example-basic-single" name="doctor" value=''>  
                                                    <option value="">Seleccionar .....</option>
                                                    <?php foreach ($doctors as $doctor) { ?>
                                                        <option value="<?php echo $doctor->id; ?>"<?php
                                                        if (!empty($payment->doctor)) {
                                                            if ($payment->doctor == $doctor->id) {
                                                                echo 'selected';
                                                            }
                                                        }
                                                        ?>><?php echo $doctor->name; ?> </option>
                                                            <?php } ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('date'); ?></label>
                                            </div>
                                            <div class="col-md-9"> 
                                                <input type="text" class="form-control default-date-picker" readonly="" name="date" id="exampleInputEmail1" value='' placeholder="">
                                            </div>
                                        </div>




                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('start_time'); ?></label>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker-default" name="s_time" id="exampleInputEmail1" value="" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('end_time'); ?></label>
                                            </div>
                                            <div class="col-md-6"> 
                                                <div class="">
                                                    <div class="input-group bootstrap-timepicker">
                                                        <input type="text" class="form-control timepicker-default" name="e_time" id="exampleInputEmail1" value="" readonly>
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('remarks'); ?></label>
                                            </div>
                                            <div class="col-md-9"> 
                                                <input type="text" class="form-control" name="remarks" id="exampleInputEmail1" value='<?php
                                                if (!empty($appointment->address)) {
                                                    echo $appointment->address;
                                                }
                                                ?>' placeholder="">
                                            </div>
                                        </div>


                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                                <label for="exampleInputEmail1"> <?php echo lang('appointment'); ?> <?php echo lang('status'); ?></label>
                                            </div>
                                            <div class="col-md-9"> 
                                                <select class="form-control m-bot15" name="status" value=''>
                                                    <option value="Pending" <?php
                                                    if (!empty($appointment->status)) {
                                                        if ($appointment->status == 'Pending') {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > Pendiente </option> 
                                                    <option value="Approved" <?php
                                                    if (!empty($appointment->status)) {
                                                        if ($appointment->status == 'Approved') {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > Aprobado </option>
                                                    <option value="Done" <?php
                                                    if (!empty($appointment->status)) {
                                                        if ($appointment->status == 'Done') {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > Denegar </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 panel">
                                            <div class="col-md-3 payment_label"> 
                                            </div>
                                            <div class="col-md-9"> 
                                                <input type="checkbox" name="sms" value="sms"> <?php echo lang('send_sms') ?><br>
                                            </div>
                                        </div>






                                        <input type="hidden" name="id" value='<?php
                                        if (!empty($appointment->id)) {
                                            echo $appointment->id;
                                        }
                                        ?>'>


                                        <button type="submit" name="submit" class="btn btn-info"> <?php echo lang('submit'); ?></button>
                                    </form>

                                </div>
                            </section>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->


<script src="common/js/codearistos.min.js"></script>

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