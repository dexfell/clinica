<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- invoice start-->
        <section>
            <div class="panel panel-primary">
                <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                <div class="panel-body col-md-5" style="font-size: 10px;">
                    <div class="row invoice-list">

                        <div class="text-center corporate-id">
                            <h1>
                                <?php echo $settings->title ?>
                            </h1>
                            <h4>
                                <?php echo $settings->address ?>
                            </h4>
                            <h4>
                                Tel: <?php echo $settings->phone ?>
                            </h4>
                        </div>

                        <div class="col-lg-4 col-sm-4">
                            <h4><?php echo lang('bill_to'); ?>:</h4>
                            <p>
                                <?php echo $settings->title; ?> <br>
                                <?php echo $settings->address; ?><br>
                                Tel:  <?php echo $settings->phone; ?>
                            </p>
                        </div>



                        <div class="col-lg-4 col-sm-4">
                            <h4><?php echo lang('invoice_info'); ?></h4>
                            <ul class="unstyled">
                                <li>Invoice Number		: <strong>000<?php echo $expense->id; ?></strong></li>
                                <li>Date		: <?php echo date('m/d/Y', $expense->date); ?></li>
                            </ul>
                        </div>
                        <br>
                        <?php if (!empty($payment->doctor)) { ?>
                            <span><strong>Referred By Doctor:</strong></span> <span><?php echo $this->db->get_where('doctor', array('id' => $payment->doctor))->row()->name ?></span>
                        <?php } ?>
                    </div>




                    <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo lang('description'); ?></th>
                                <th><?php echo lang('note'); ?></th>
                                <th><?php echo lang('amount'); ?></th>
                            </tr>
                        </thead>

                        <tbody>


                            <tr>
                                <td><?php echo '1'; ?></td>
                                <td><?php echo $expense->category; ?> </td>
                                <td><?php echo $expense->note; ?> </td>
                                <td class=""><?php echo $settings->currency; ?> <?php echo $expense->amount; ?> </td>
                            </tr> 

                           

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-lg-4 invoice-block pull-right">
                            <ul class="unstyled amounts">
                                <li><strong><?php echo lang('sub_total'); ?> : </strong><?php echo $settings->currency; ?> <?php echo $expense->amount; ?></li>
                                <li><strong><?php echo lang('grand_total'); ?> : </strong><?php echo $settings->currency; ?> <?php echo $expense->amount; ?></li>
                            </ul>
                        </div>
                    </div>


                    <div class="text-center invoice-btn">
                        <?php if ($this->ion_auth->in_group(array('admin', 'Accountant'))) { ?>
                            <a href="finance/editExpense?id=<?php echo $expense->id; ?>" class="btn btn-info btn-lg invoice_button"><i class="fa fa-edit"></i> Edit Invoice </a>
                        <?php } ?>
                        <a class="btn btn-info btn-lg invoice_button" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print </a>
                    </div>


                </div>

                <div class="panel-body col-md-6" class="" style="font-size: 10px; float: right;">

                    <!--
                    <form role="form" action="finance/amountReceived" method="post" enctype="multipart/form-data">
                        <div class="form-group"> 
                            <label for="exampleInputEmail1"></label>
                            Due Amount: <?php echo $settings->currency; ?>  <?php echo $payment->gross_total - $payment->amount_received; ?> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Deposit</label>
                            <input type="text" class="form-control" name="amount_received" id="exampleInputEmail1" value='<?php
                    if (!empty($category->description)) {
                        echo $category->description;
                    }
                    ?>' placeholder="<?php echo $settings->currency; ?> ">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $payment->id; ?>">

                        <button type="submit" name="submit" class="btn btn-info">Submit</button>
                    </form>
                    -->
                    <div class="panel-body no-print">


                        <a href="finance/addPaymentView">
                            <div class="btn-group">
                                <button id="" class="btn green">
                                    <i class="fa fa-plus-circle"></i> <?php echo lang('add_another_payment'); ?>
                                </button>
                            </div>
                        </a>
                    </div>

                </div>








            </div>
        </section>
        <!-- invoice end-->
    </section>
</section>
<!--main content end-->
<!--footer start-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
                            $(document).ready(function () {
                                $(".flashmessage").delay(3000).fadeOut(100);
                            });
</script>
