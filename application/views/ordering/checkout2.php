    <div id="all">
        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Delivery Method</li>
                    </ul>
                </div>

                <div class="col-md-12" id="checkout">

                    <div class="box">
                        <form Method="post" action="<?= base_url().'home/checkout2_exec'; ?>">
                            <h1>Checkout - Delivery Method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <?php if (!$this->session->has_userdata('isloggedin')) :?>
                                    <li><a href="<?= base_url().'home/checkout1';?>"><i class="fa fa-map-marker"></i><br>Address</a>
                                    <?php else: ?>
                                      <li><a href="<?= base_url().'home/account';?>"><i class="fa fa-map-marker"></i><br>Edit Address</a>
                                      <?php endif;?>
                                  </li>
                                  <li class="active"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                  </li>
                                  <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                  </li>
                                  <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                  </li>
                              </ul>
                              <div class="content">
                                <div class="row">
                                    <?php foreach ($shipper as $shipper): ?>
                                        <div class="col-sm-6">
                                            <div class="box payment-Method">
                                                <h4><?=$shipper->shipper_name?></h4>
                                                <p>&#8369;<?= number_format($shipper->shipper_price, 2) ?></p>
                                                <div class="box-footer text-center">
                                                    <input type="radio" name="shipper_id" value="<?=$shipper->shipper_id?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                    <?php if(form_error("shipper_id")): ?>
                                        <div align="center">
                                            <span style = 'color: red'><?= form_error("shipper_id") ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="pull-left">
                                    <?php if (!$this->session->has_userdata('isloggedin')) :?>
                                        <a href="<?= base_url().'home/checkout1';?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Addresses</a>
                                    <?php else: ?>
                                        <a href="<?= base_url().'home/account';?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Edit Address</a>
                                    <?php endif;?>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Order Review<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***