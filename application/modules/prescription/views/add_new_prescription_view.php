<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                <?php
                if (!empty($prescription->id))
                    echo '<i class="fa fa-edit-circle"></i> ' . lang('edit_prescription');
                else
                    echo ' <i class="fa fa-plus-circle"></i> ' . lang('add_prescription');
                ?>
            </header>
            <div class="panel-body col-md-7">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="col-lg-12">
                            <section class="panel">
                                <div class="panel-body">
                                    <?php echo validation_errors(); ?>
                                    <form role="form" action="prescription/addNewPrescription" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> <?php echo lang('date'); ?></label>
                                            <input type="text" class="form-control default-date-picker" name="date" id="exampleInputEmail1" value='<?php
                                            if (!empty($setval)) {
                                                echo set_value('date');
                                            }
                                            if (!empty($prescription->date)) {
                                                echo $prescription->date;
                                            }
                                            ?>' placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> <?php echo lang('patient'); ?></label>
                                            <select class="form-control m-bot15 js-example-basic-single" name="patient" value=''>
                                                <?php foreach ($patients as $patient) { ?>
                                                    <option value="<?php echo $patient->id; ?>" <?php
                                                    if (!empty($setval)) {
                                                        if ($patient->id == set_value('patient')) {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    if (!empty($prescription->patient)) {
                                                        if ($patient->id == $prescription->patient) {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > <?php echo $patient->name; ?> </option>
                                                        <?php } ?> 
                                            </select>
                                        </div>
                                        <div class="form-group"> 
                                            <label for="exampleInputEmail1"> <?php echo lang('doctor'); ?></label>
                                            <select class="form-control m-bot15 js-example-basic-single" name="doctor" value=''>
                                                <?php foreach ($doctors as $doctor) { ?>
                                                    <option value="<?php echo $doctor->id; ?>" <?php
                                                    if (!empty($setval)) {
                                                        if ($doctor->id == set_value('doctor')) {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    if (!empty($prescription->doctor)) {
                                                        if ($doctor->id == $prescription->doctor) {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?> > <?php echo $doctor->name; ?> </option>
                                                        <?php } ?> 
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3"><?php echo lang('history'); ?></label>
                                            <div class="col-md-9">
                                                <textarea class="ckeditor form-control" id="editor1" name="symptom" value="" rows="10"><?php
                                                    if (!empty($setval)) {
                                                        echo set_value('symptom');
                                                    }
                                                    if (!empty($prescription->symptom)) {
                                                        echo $prescription->symptom;
                                                    }
                                                    ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3"><?php echo lang('medication'); ?></label>
                                            <div class="col-md-9">
                                                <textarea class="ckeditor form-control" id="editor2" name="medicine" value="" rows="10"><?php
                                                    if (!empty($setval)) {
                                                        echo set_value('medicine');
                                                    }
                                                    if (!empty($prescription->medicine)) {
                                                        echo $prescription->medicine;
                                                    }
                                                    ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3"><?php echo lang('note'); ?></label>
                                            <div class="col-md-9">
                                                <textarea class="ckeditor form-control" id="editor3" name="note" value="" rows="10"><?php
                                                    if (!empty($setval)) {
                                                        echo set_value('note');
                                                    }
                                                    if (!empty($prescription->note)) {
                                                        echo $prescription->note;
                                                    }
                                                    ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" name="admin" value='admin'>

                                        <input type="hidden" name="id" value='<?php
                                        if (!empty($prescription->id)) {
                                            echo $prescription->id;
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
