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
                            <?php foreach ($cat as $cat) { ?>
                            <a href="<?php echo base_url()?>index.php/welcome/pilih_cat?id=<?php echo $cat->CAT_ID?>" class="list-group-item"><?php echo $cat->CAT_NAME?></a>
                            <?php } ?>
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
                            <div class="card wow fadeIn" data-wow-delay="0.2s" >

                                <!--Card image-->
                                <a href="<?php echo base_url()?>index.php/Welcome/DetailProduct/<?php echo $p->PROD_ID ?>"><img class="img-fluid" src="<?php echo base_url()?>assets/product/<?php echo $p->PROD_IMAGE ?>" alt="Card image cap"/></a>

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h5 class="card-title" style="height: 40px"><?php echo substr($p->PROD_NAME,0,45); if (strlen($p->PROD_NAME) > 45) {
                                        echo '...';
                                    } ?></h5>
                                    <!--Text-->
                                    <p class="card-text"><?php echo substr($p->PROD_DESCRIPTION,0 , 40) ?>...
                                    </p>
                                    <a href="<?php echo base_url()?>index.php/Welcome/DetailProduct/<?php echo $p->PROD_ID ?>" class="btn btn-default btn-block">Rp. <strong><?php echo $p->PROD_PRICE ?></strong></a>
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