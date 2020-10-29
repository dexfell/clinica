<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">
            <header class="panel-heading">
                <?php
                if (!empty($payment->id))
                    echo '<i class="fa fa-edit"></i> ' . lang('edit_payment');
                else
                    echo '<i class="fa fa-plus-circle"></i> ' . lang('add_new_payment');
                ?>
            </header>
            <div class="">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <!--  <div class="col-lg-12"> -->
                        <div class="">
                           <!--   <section class="panel"> -->
                            <section class="">
                                <!--   <div class="panel-body"> -->
                                <div class="">
                                    <style> 
                                        .payment{
                                            padding-top: 10px;
                                            padding-bottom: 20px;
                                            border: none;

                                        }
                                        .pad_bot{
                                            padding-bottom: 5px;
                                        }  

                                        form{
                                            
                                            border: 1px solid #ccc;
                                            background: transparent !important;
                                        
                                        
                                        }
                                    </style>

                                    <form role="form" id="editPaymentForm" class="clearfix" action="finance/addPayment" method="post" enctype="multipart/form-data">
                                        <div class="col-md-6">
                                           <div class="col-md-8 payment pad_bot">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('patient'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                  <h4>  <?php echo $patient->name;?></h4>
                                                  <input type="hidden" name="patient" value="<?php echo $patient->id; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-8 panel">
                                            </div>

                                            <div class="pos_client">
                                                <div class="col-md-8 payment pad_bot">
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
                                                <div class="col-md-8 payment pad_bot">
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
                                                <div class="col-md-8 payment pad_bot">
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
                                                <div class="col-md-8 payment pad_bot">
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
                                                <div class="col-md-8 payment pad_bot">
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
                                                            ?> > Male </option>   
                                                            <option value="Female" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Female') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Female </option>
                                                            <option value="Others" <?php
                                                            if (!empty($patient->sex)) {
                                                                if ($patient->sex == 'Others') {
                                                                    echo 'selected';
                                                                }
                                                            }
                                                            ?> > Others </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 payment pad_bot">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"> <?php echo lang('refd_by_doctor'); ?></label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <select class="form-control m-bot15 js-example-basic-single add_doctor" id="add_doctor" name="doctor" value=''>  
                                                        <option value="">Select .....</option>
                                                        <option value="add_new" style="color: #41cac0 !important;"><?php echo lang('add_new'); ?></option>
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

                                            <div class="pos_doctor">
                                                <div class="col-md-8 payment pad_bot">
                                                    <div class="col-md-3 payment_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('name'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_name" value='<?php
                                                        if (!empty($payment->p_name)) {
                                                            echo $payment->p_name;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 payment pad_bot">
                                                    <div class="col-md-3 payment_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('email'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_email" value='<?php
                                                        if (!empty($payment->p_email)) {
                                                            echo $payment->p_email;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 payment pad_bot">
                                                    <div class="col-md-3 payment_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?> <?php echo lang('phone'); ?></label>
                                                    </div>
                                                    <div class="col-md-9"> 
                                                        <input type="text" class="form-control pay_in" name="d_phone" value='<?php
                                                        if (!empty($payment->p_phone)) {
                                                            echo $payment->p_phone;
                                                        }
                                                        ?>' placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 panel">
                                            </div>


                                            <div class="col-md-8 payment">
                                                <div class="form-group last">
                                                    <div class="col-md-3 payment_label"> 
                                                        <label for="exampleInputEmail1"> <?php echo lang('select'); ?></label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select name="category_name[]" id="" class="multi-select" multiple="" id="my_multi_select3" >
                                                            <?php foreach ($categories as $category) { ?>
                                                                <option class="ooppttiioonn" data-id="<?php echo $category->c_price; ?>" data-idd="<?php echo $category->id; ?>" data-cat_name="<?php echo $category->category; ?>" value="<?php echo $category->category; ?>" <?php
                                                                if (!empty($payment->category_name)) {
                                                                    $category_name = $payment->category_name;
                                                                    $category_name1 = explode(',', $category_name);
                                                                    foreach ($category_name1 as $category_name2) {
                                                                        $category_name3 = explode('*', $category_name2);
                                                                        if ($category_name3[0] == $category->category) {
                                                                            echo 'selected';
                                                                        }
                                                                    }
                                                                }
                                                                ?>><?php echo $category->category; ?></option>
                                                                    <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="col-md-2 qfloww"></div>

                                        <div class="col-md-4">
                                            <div class="col-md-12 payment right-six">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('sub_total'); ?> </label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="subtotal" id="subtotal" value='<?php
                                                    if (!empty($payment->amount)) {

                                                        echo $payment->amount;
                                                    }
                                                    ?>' placeholder=" " disabled>
                                                </div>

                                            </div>


                                            <div class="col-md-12 payment right-six">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('discount'); ?>  <?php
                                                        if ($discount_type == 'percentage') {
                                                            echo ' (%)';
                                                        }
                                                        ?> </label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="discount" id="dis_id" value='<?php
                                                    if (!empty($payment->discount)) {
                                                        $discount = explode('*', $payment->discount);
                                                        echo $discount[0];
                                                    }
                                                    ?>' placeholder="">
                                                </div>

                                            </div>

                                            <div class="col-md-12 payment right-six">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('gross_total'); ?> </label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="grsss" id="gross" value='<?php
                                                    if (!empty($payment->gross_total)) {

                                                        echo $payment->gross_total;
                                                    }
                                                    ?>' placeholder=" " disabled>
                                                </div>

                                            </div>
                                            <div class="col-md-12 payment right-six">
                                                <div class="col-md-3 payment_label"> 
                                                    <label for="exampleInputEmail1"><?php echo lang('amount_received'); ?> </label>
                                                </div>
                                                <div class="col-md-9"> 
                                                    <input type="text" class="form-control pay_in" name="amount_received" id="amount_received" value='<?php
                                                    if (!empty($payment->amount_received)) {

                                                        echo $payment->amount_received;
                                                    }
                                                    ?>' placeholder=" ">
                                                </div>

                                            </div>

                                            <div class="col-md-12 payment right-six">
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
                                            <!--
                                            <div class="col-md-12 payment">
                                                <div class="col-md-3 payment_label"> 
                                                  <label for="exampleInputEmail1">Vat (%)</label>
                                                </div>
                                                <div class="col-md-9"> 
                                                  <input type="text" class="form-control pay_in" name="vat" id="exampleInputEmail1" value='<?php
                                            if (!empty($payment->vat)) {
                                                echo $payment->vat;
                                            }
                                            ?>' placeholder="%">
                                                </div>
                                            </div>
                                            -->

                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($payment->id)) {
                                                echo $payment->id;
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
        </section>

    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="common/js/codearistos.min.js"></script>




<script>
    $(document).ready(function () {
        $('.multi-select').change(function () {
            $(".qfloww").html("");
            var tot = 0;
            $.each($('select.multi-select option:selected'), function () {
                var curr_val = $(this).data('id');
                var idd = $(this).data('idd');
                tot = tot + curr_val;
                var cat_name = $(this).data('cat_name');
                $("#editPaymentForm .qfloww").append('<div class="remove1" id="id-div' + idd + '">  ' + $(this).data("cat_name") + '- <?php echo $settings->currency; ?> ' + $(this).data('id') + '</div><br>')
            });
            var discount = $('#dis_id').val();
            <?php
if ($discount_type == 'flat') {
    ?>
            var gross = tot - discount;
<?php }else{ ?>
     var gross = tot - tot * discount / 100;
<?php }?>
            $('#editPaymentForm').find('[name="subtotal"]').val(tot).end()
            $('#editPaymentForm').find('[name="grsss"]').val(gross)
        }

        );


    });

    $(document).ready(function () {
        $('#dis_id').keyup(function () {
            var val_dis = 0;
            var amount = 0;
            var ggggg = 0;
            amount = $('#subtotal').val();
            val_dis = this.value;
<?php
if ($discount_type == 'flat') {
    ?>
                ggggg = amount - val_dis;
<?php } else { ?>
                ggggg = amount - amount * val_dis / 100;
<?php } ?>
            $('#editPaymentForm').find('[name="grsss"]').val(ggggg)
        });
    });

</script> 

<script>
    $(document).ready(function () {

        $(".qfloww").html("");
        var tot = 0;
        $.each($('select.multi-select option:selected'), function () {
            var curr_val = $(this).data('id');
            var idd = $(this).data('idd');
            tot = tot + curr_val;
            var cat_name = $(this).data('cat_name');
            $("#editPaymentForm .qfloww").append('<div class="remove1" id="id-div' + idd + '">  ' + $(this).data("cat_name") + '- <?php echo $settings->currency; ?> ' + $(this).data('id') + '</div><br>')
        });
        var discount = $('#dis_id').val();
<?php
if ($discount_type == 'flat') {
    ?>
            var gross = tot - discount;
<?php } else { ?>
            var gross = tot - tot * discount / 100;
<?php } ?>
        $('#editPaymentForm').find('[name="subtotal"]').val(tot).end()
        $('#editPaymentForm').find('[name="grsss"]').val(gross)

    });

    $(document).ready(function () {
        $('#dis_id').keyup(function () {
            var val_dis = 0;
            var amount = 0;
            var ggggg = 0;
            amount = $('#subtotal').val();
            val_dis = this.value;
<?php
if ($discount_type == 'flat') {
    ?>
                ggggg = amount - val_dis;
<?php } else { ?>
                ggggg = amount - amount * val_dis / 100;
<?php } ?>
            $('#editPaymentForm').find('[name="grsss"]').val(ggggg)
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
                <form role="form" action="patient/addNew?redirect=payment" method="post" enctype="multipart/form-data">

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
                        <button type="submit" name="submit" class="btn btn-info">Enviar</button>
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