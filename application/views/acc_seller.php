<main class="mt-5">
<?php foreach ($seller as $s) {
                                               ?>

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1"></div>
                <!--Sidebar-->
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">

                     <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <div class="card">
                            <div class="card-body">
                                 <img src="<?php if($s->SELL_IMAGE == 0){?><?php echo base_url() ?>assets/seller/seller_default.jpg<?php } else { ?><?php echo base_url() ?>assets/seller/<?php echo $s->SELL_IMAGE ?><?php } ?>" class="img-fluid z-depth-0" height="40px" width="40px">
                                <?php echo $s->SELL_NAME; ?>
                                <small><?php echo $s->SELL_EMAIL; ?></small>
                                <p><a class="pull-rigth" href="">Edit<i class="fa fa-chevron-right ml-1"></i></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="widget-wrapper">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Dashboard</a>
                            <a href="<?php echo base_url('index.php/product'); ?>" class="list-group-item">Kelola Produk</a>
                            <a href="<?php echo base_url('index.php/product/add_product'); ?>" class="list-group-item">Tambah Produk</a>
                            <a href="#" class="list-group-item">Ulasan</a>
                            <a href="#" class="list-group-item">Pesan</a>
                        </div>
                    </div>

                   

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        
                    </div>
                    <div class="col-lg-1"></div>
                    <!--/.First row-->
                    <!--Second row-->
                    <div class="row">
                        <!--First columnn-->
                        <div class="col-lg-12">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h6 class="card-title">LENGKAPI PROFIL ANDA TERLEBIH DAHULU</h6>
                                     <p class="card-text">Lengkapi data identitas diri anda dengan benar
                                    </p>
                                    <hr>
                                    <!--Text-->
                                    <div class="row">
                                        <div class="col-lg-4">
                                           <form action="<?php echo base_url('index.php/seller/up_seller') ?>" method="post" enctype='multipart/form-data'>
                                            
                                                <img src="<?php echo base_url() ?>assets/seller/seller_default.jpg" class="img-fluid z-depth-0" height="100%" width="100%"> 
                                                <div class="btn-group pull-right mt-3">
                                                  <button type="button" class="btn btn-sm rgba-orange-strong" data-toggle="tooltip" title="Edit foto"><i class="fa fa-pencil mr-1"></i></button>
                                                  <button type="button" class="btn btn-sm rgba-red-strong" data-toggle="tooltip" data-placement="bottom" title="Hapus foto"><i class="fa fa-trash mr-1"></i></button>
                                                  <button type="button" class="btn btn-sm btn-success"data-toggle="tooltip" title="Upload foto"><i class="fa fa-upload mr-1"></i></button>
                                                </div>
                                                <input type="hidden" name="idseller" value="<?php echo $s->SELL_ID; ?>">
                                        
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="nama" class="form-control" value="<?php echo $s->SELL_NAME ?>">
                                                        <label for="form1" class="">Nama</label>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="email" class="form-control" value="<?php echo $s->SELL_EMAIL ?>">
                                                        <label for="form1" class="">Email</label>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="telp"  class="form-control" value="<?php echo $s->SELL_PHONE ?>" required="required">
                                                        <label for="form1" class="">WhatsApp / Telepon</label>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="fb" value="<?php echo $s->SELL_FB ?>" class="form-control">
                                                        <label for="form1" class="">Facebook</label>
                                                    </div>  
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="insta" value="<?php echo $s->SELL_INSTA ?>" class="form-control">
                                                        <label for="form1" class="">Instagram</label>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="md-form form-sm">
                                                        <input type="text" id="form1" name="line" value="<?php echo $s->SELL_LINE ?>" class="form-control">
                                                        <label for="form1" class="">Line</label>
                                                    </div>  
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class="col-md-8">
                                                    <div class="md-form">
                                                        <textarea id="textarea-char-counter" name="alamat" class="md-textarea" length="500" required="required"><?php echo $s->SELL_ADDRESS ?></textarea>
                                                        <label for="textarea-char-counter">Alamat Lengkap</label>
                                                    </div>        
                                                </div>
                                            </div>
                                            <?php
                                           } ?>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="pull-right">
                                                    <a href="<?php echo base_url('index.php/product'); ?>" class="btn btn-sm rgba-red-strong">Batal</a>
                                                    <button type="submit" class="btn btn-success btn-sm">Simpan</button>    
                                                    </div>   
                                                </div>
                                                  </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                    </div>
                    <!--/.Second row-->

                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>