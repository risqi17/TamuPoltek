    <main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-1 mb-4"></div>
                <div class="col-lg-3 mb-4 wow fadeIn" data-wow-delay="0.2s">

                    <div class="widget-wrapper">
                        <h4>Kategori:</h4>
                        <br>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Elektronik</a>
                            <a href="#" class="list-group-item">Pakaian</a>
                            <a href="#" class="list-group-item">Makanan</a>
                            <a href="#" class="list-group-item">Buku</a>
                            <a href="#" class="list-group-item">Lain-lain</a>
                        </div>
                    </div>

                    <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <h4>Kritik dan saran:</h4>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <p><strong>Masukkan dari anda sangat berharga</strong></p>
                                <p>Untuk membuat TamuPoltek menjadi lebih baik lagi</p>
                                <div class="md-form">
                                    <i class="fa fa-user prefix"></i>
                                    <input type="text" id="form1" class="form-control">
                                    <label for="form1">Emailmu</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix"></i>
                                    <input type="text" id="form2" class="form-control">
                                    <label for="form2">Pesanmu</label>
                                </div>
                                <button class="btn btn-default">Kirim</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-7">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-lg-12">
                            
                    <br>
                    <hr class="extra-margins">

                    <!--Second row-->
                    <div class="row">
                        <?php
                        foreach ($data as $p) {
                       ?>
                        <!--First columnn-->
                        <div class="col-lg-4 mb-4">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">

                                <!--Card image-->
                                <a href="<?php echo base_url()?>index.php/product/d_product"><img class="img-fluid" src="<?php echo base_url()?>assets/product/<?php echo $p->PROD_IMAGE ?>" alt="Card image cap"/></a>

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title"><?php echo $p->PROD_NAME ?></h4>
                                    <!--Text-->
                                    <p class="card-text"><?php echo $p->PROD_DESCRIPTION ?>
                                    </p>
                                    <a href="<?php echo base_url()?>index.php/product/d_product" class="btn btn-default">Rp. <strong><?php echo $p->PROD_PRICE ?></strong></a>
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                        <?php } ?>
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>