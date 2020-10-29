
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <i class="fa fa-user"></i>  <?php echo lang('todays_appointments'); ?>
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <a data-toggle="modal" href="#myModal">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    <i class="fa fa-plus-circle"></i>   <?php echo lang('add_appointment'); ?> 
                                </button>
                            </div>
                        </a>
                        <!--<button class="export" onclick="javascript:window.print();">Print</button>-->  
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th> <?php echo lang('id'); ?></th>
                                <th> <?php echo lang('patient'); ?></th>
                                <th> <?php echo lang('doctor'); ?></th>
                                <th> <?php echo lang('date-time'); ?></th>
                                <th> <?php echo lang('remarks'); ?></th>
                                <th> <?php echo lang('status'); ?></th>
                                <th> <?php echo lang('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                        <style>

                            .img_url{
                                height:20px;
                                width:20px;
                                background-size: contain; 
                                max-height:20px;
                                border-radius: 100px;
                            }

                        </style>

                        <?php
                        foreach ($appointments as $appointment) {
                            if ($appointment->date == strtotime(date('Y-m-d'))) {
                                ?>
                                <tr class="">
                                    <td ><?php echo $appointment->id; ?></td>
                                    <td> <?php echo $this->db->get_where('patient', array('id' => $appointment->patient))->row()->name; ?></td>
                                    <td><?php
                                        if (!empty($appointment->doctor)) {
                                            echo $this->db->get_where('doctor', array('id' => $appointment->doctor))->row()->name;
                                        }
                                        ?></td>
                                    <td class="center"><?php echo date('d-m-Y', $appointment->date); ?> <strong> <?php echo $appointment->s_time; ?> - <?php echo $appointment->e_time; ?> </strong></td>
                                    <td>
                                        <?php echo $appointment->remarks; ?>
                                    </td>
                                    <td>
                                        <?php echo $appointment->status; ?>
                                    </td>
                                    <td>

                                        <button type="button" class="btn btn-info btn-xs btn_width editbutton" data-toggle="modal" data-id="<?php echo $appointment->id; ?>"><i class="fa fa-edit"> <?php echo lang('edit'); ?></i></button>   

                                        <a class="btn btn-info btn-xs btn_width delete_button" href="appointment/delete?id=<?php echo $appointment->id; ?>" <?php echo lang('delete'); ?> onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o"> </i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->




<!-- Add Appointment Modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-plus-circle"></i>  <?php echo lang('add_appointment'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="appointment/addNew" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('patient'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15 js-example-basic-single pos_select" id="pos_select" name="patient" value=''> 
                                <option value="">Seleccionar .....</option>
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
                                <input type="text" class="form-control pay_in" name="p_name" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('email'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_email" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('phone'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_phone" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('age'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_age" value='' placeholder="">
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
                            <input type="text" class="form-control" name="remarks" id="exampleInputEmail1" value='' placeholder="">
                        </div>
                    </div>

                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('appointment'); ?> <?php echo lang('status'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15" name="status" value=''>
                                <option value="Pending" <?php
                                ?> > Pendiente </option> 
                                <option value="Approved" <?php
                                ?> > Aprobado </option>
                                <option value="Done" <?php
                                ?> > Denegado </option>
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



                    <input type="hidden" name="id" value=''>


                    <button type="submit" name="submit" class="btn btn-info"> <?php echo lang('submit'); ?></button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add Appointment Modal-->








<!-- Edit Event Modal-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><i class="fa fa-edit"></i>  <?php echo lang('edit_appointment'); ?></h4>
            </div>
            <div class="modal-body">
                <form role="form" action="appointment/addNew" id="editAppointmentForm" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 panel">
                        <div class="col-md-3 payment_label"> 
                            <label for="exampleInputEmail1"> <?php echo lang('patient'); ?></label>
                        </div>
                        <div class="col-md-9"> 
                            <select class="form-control m-bot15 js-example-basic-single pos_select patient" id="pos_select" name="patient" value=''> 
                                <option value="">Seleccionar .....</option>
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
                                <input type="text" class="form-control pay_in" name="p_name" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('email'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_email" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('phone'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_phone" value='' placeholder="">
                            </div>
                        </div>
                        <div class="col-md-8 payment pad_bot pull-right">
                            <div class="col-md-3 payment_label"> 
                                <label for="exampleInputEmail1"> <?php echo lang('patient'); ?> <?php echo lang('age'); ?></label>
                            </div>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control pay_in" name="p_age" value='' placeholder="">
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
                                    ?> > Femenino </option>
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
                            <select class="form-control m-bot15 js-example-basic-single doctor" name="doctor" value=''>  
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
                            <input type="text" class="form-control" name="remarks" id="exampleInputEmail1" value='' placeholder="">
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
                                ?> > Denegado </option>
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



                    <input type="hidden" name="id" value=''>


                    <button type="submit" name="submit" class="btn btn-info"> <?php echo lang('submit'); ?></button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Edit Event Modal-->

<script src="common/js/codearistos.min.js"></script>
<script type="text/javascript">
                                            $(document).ready(function () {
                                                $(".editbutton").click(function (e) {
                                                    e.preventDefault(e);
                                                    // Get the record's ID via attribute  
                                                    var iid = $(this).attr('data-id');
                                                    $('#editAppointmentForm').trigger("reset");
                                                    $('#myModal2').modal('show');
                                                    $.ajax({
                                                        url: 'appointment/editAppointmentByJason?id=' + iid,
                                                        method: 'GET',
                                                        data: '',
                                                        dataType: 'json',
                                                    }).success(function (response) {
                                                        var de = response.appointment.date * 1000;
                                                        var d = new Date(de);
                                                        var da = d.getDate() + '-' + (d.getMonth() + 1) + '-' + d.getFullYear();
                                                        // Populate the form fields with the data returned from server
                                                        $('#editAppointmentForm').find('[name="id"]').val(response.appointment.id).end()
                                                        $('#editAppointmentForm').find('[name="patient"]').val(response.appointment.patient).end()
                                                        $('#editAppointmentForm').find('[name="doctor"]').val(response.appointment.doctor).end()
                                                        $('#editAppointmentForm').find('[name="date"]').val(da).end()
                                                        $('#editAppointmentForm').find('[name="s_time"]').val(response.appointment.s_time).end()
                                                        $('#editAppointmentForm').find('[name="e_time"]').val(response.appointment.e_time).end()
                                                        $('#editAppointmentForm').find('[name="status"]').val(response.appointment.status).end()
                                                        $('#editAppointmentForm').find('[name="remarks"]').val(response.appointment.remarks).end()

                                                        $('.js-example-basic-single.doctor').val(response.appointment.doctor).trigger('change');
                                                        $('.js-example-basic-single.patient').val(response.appointment.patient).trigger('change');
                                                    });
                                                });
                                            });
</script>




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
        $('#editable-sample').DataTable({
            responsive: true,

            dom: "<'row'<'col-sm-3'l><'col-sm-5 text-center'B><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                //'copyHtml5',
                //'excelHtml5',
                //'csvHtml5',
                //'pdfHtml5',
                {
                    //extend: 'print',
                    exportOptions: {
                        columns: [0,1,2,3,4,5],
                    }
                },
            ],

            aLengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "Todo"]
            ],
            iDisplayLength: -1,
            "order": [[0, "desc"]],

            "language": {
                "lengthMenu": "_MENU_ registro por pagina",
            }


        });
    });
</script>


<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>
