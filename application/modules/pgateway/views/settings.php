<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="col-md-8">
            <section class="panel">
                <header class="panel-heading">
                    <i class="fa fa-gear"></i>  <?php
                    if (!empty($settings->name)) {
                        echo $settings->name;
                    }
                    ?> <?php echo lang('settings'); ?>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <div class="panel-body">
                                        <?php echo validation_errors(); ?>
                                        <form role="form" action="pgateway/addNewSettings" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> <?php echo lang('payment_gateway'); ?> <?php echo lang('name'); ?></label>
                                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value='<?php
                                                if (!empty($settings->name)) {
                                                    echo $settings->name;
                                                }
                                                ?>' placeholder="" readonly>   
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> <?php echo lang('merchant_key'); ?> </label>
                                                <input type="text" class="form-control" name="merchant_key" id="exampleInputEmail1" value="<?php
                                                if (!empty($settings->merchant_key)) {
                                                    echo $settings->merchant_key;
                                                }
                                                ?>" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo lang('salt'); ?> </label>
                                                <input type="text" class="form-control" name="salt" id="exampleInputEmail1" value='<?php
                                                if (!empty($settings->salt)) {
                                                    echo $settings->salt;
                                                }
                                                ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo lang('status'); ?></label>
                                                <select class="form-control m-bot15" name="status" value=''>
                                                    <option value="live" <?php
                                                    if (!empty($settings->status)) {
                                                        if ($settings->status == 'live') {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?>><?php echo lang('live'); ?> </option>
                                                    <option value="test" <?php
                                                    if (!empty($settings->status)) {
                                                        if ($settings->status == 'test') {
                                                            echo 'selected';
                                                        }
                                                    }
                                                    ?>><?php echo lang('test'); ?></option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="id" value='<?php
                                            if (!empty($settings->id)) {
                                                echo $settings->id;
                                            }
                                            ?>'>
                                            <button type="submit" name="submit" class="btn btn-info"><?php echo lang('submit'); ?></button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="common/js/codearistos.min.js"></script>
<script>
    $(document).ready(function () {
        $(".flashmessage").delay(3000).fadeOut(100);
    });
</script>