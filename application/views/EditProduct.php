<main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-1"></div>
                <!--Sidebar-->
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">

                     <div class="widget-wrapper wow fadeIn" data-wow-delay="0.4s">
                        <div class="card">
                            <div class="card-body">
                             <?php foreach ($seller as $s) { ?>
                                <img src="<?php if($s->SELL_IMAGE == 0){?><?php echo base_url() ?>assets/seller/seller_default.jpg<?php } else { ?><?php echo base_url() ?>assets/seller/<?php echo $s->SELL_IMAGE ?><?php } ?>" class="img-fluid z-depth-0" height="40px" width="40px">
                                <?php echo $s->SELL_NAME; ?>
                                <small><?php echo $s->SELL_EMAIL; ?></small>
                                <p><a class="pull-rigth" href="<?php echo base_url('index.php/seller'); ?>">Edit<i class="fa fa-chevron-right ml-1"></i></a></p>
                                <?php } ?> 
                            </div>
                        </div>
                    </div>

                    
                    
                    <div class="widget-wrapper">
                        <div class="list-group">
                            <a href="#" class="list-group-item">Dashboard</a>
                            <a href="<?php echo base_url('index.php/product') ?>" class="list-group-item active">Kelola Produk</a>
                            <a href="<?php echo base_url('index.php/product/add_product') ?>" class="list-group-item">Tambah Produk</a>
                            <a href="#" class="list-group-item">Ulasan</a>
                            <a href="#" class="list-group-item">Pesan</a>
                        </div>
                    </div>

                   

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">

                   <h5>Tambah Produk</h5>
                   <br>
                   <!-- first row -->
                   <div class="row">
                       <div class="col-lg-12 mb-3">
                           <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <p style="font-size: 14px;">Sebelum menambahkan produk baru, pastikan produk yang anda jual benar-benar ada dan dapat dipertanggung-jawabkan. Produk yang tidak memenuhi akan dihapus oleh TamanUsaha.com</p>
                                </div>

                            </div>
                       </div>
                   </div>
                   <!-- /first row -->
                    <!--Second row-->
                    <div class="row">
                        <!--First columnn-->
                        <div class="col-lg-12 mb-3">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h6 class="card-title">Apa produk anda ?</h6>
                                    <hr>
                                    <?php foreach ($product as $p) {
                                       ?>
                                    <!--Text-->
                                    <form action="<?php echo base_url(); ?>index.php/product/UpdateProduct" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <input type="hidden" name="prod_id" value="<?php echo $p->PROD_ID ?>">
                                            <div class="col-md-8">
                                                <div class="md-form form-sm">
                                                    <input type="text" name="nama" id="form1" class="form-control" value="<?php echo $p->PROD_NAME ?>">
                                                    <label for="form1" class="">Nama Produk</label>
                                                </div>       
                                            </div>
                                        </div>
                                        <?php foreach ($seller as $s) {
                                            ?>
                                        <input type="hidden" name="idseller" value="<?php echo $s->SELL_ID; ?>">
                                        <?php } ?>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                          <label for="sel1">Pilih Kategori:</label>
                                          <select class="form-control" name="kategori" id="sel1">
                                          <?php foreach ($category as $cat) {
                                           ?>
                                            <option value="<?php echo $cat->CAT_ID ?>" <?php if ($cat->CAT_ID == $p->CAT_ID) {
                                                echo 'selected';
                                            } ?> ><?php echo $cat->CAT_NAME ?></option>
                                           <?php } ?>
                                          </select>
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
                    <!--third row-->
                    <div class="row">
                        <!--First columnn-->
                        <div class="col-lg-12 mb-3">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h6 class="card-title">Gambar</h6>
                                    <hr>
                                    <!--Text-->
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-sm btn-default btn-file mr-3">
                                                    Browse <input type="file" name="gambar" id="imgInp" multiple="3">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <br>
                                        <input type="hidden" name="lama" value="<?php echo $p->PROD_IMAGE ?>">
                                       <img id='img-upload' src="<?php echo base_url(); ?>assets/product/<?php echo $p->PROD_IMAGE ?>">
                                    </div>
                                    
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                    </div>

                    <!--/.third row-->
                                        <!--third row-->
                    <div class="row">
                        <!--First columnn-->
                        <div class="col-lg-12 mb-3">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h6 class="card-title" >Detail Produk</h6>
                                    <p style="font-size: 11px" class="card-text">Jelaskan mengenai produk anda
                                    </p>
                                    <hr>
                                    <!--Text-->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="md-form">
                                                <textarea id="textarea-char-counter" class="md-textarea" name="deskripsi" length="500"><?php echo $p->PROD_DESCRIPTION ?></textarea>
                                                <label for="textarea-char-counter">Deskripsi produk</label>
                                            </div>        
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="md-form form-sm">
                                                <input type="number" id="form1" name="stok" class="form-control" value="<?php echo $p->PROD_STOCK ?>">
                                                <label for="form1" class="">Stok</label>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="md-form form-sm">
                                                <input type="number" id="form1" name="harga" class="form-control" value="<?php echo $p->PROD_PRICE ?>">
                                                <label for="form1" class="">Harga</label>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="md-form form-sm">
                                                <input type="number" id="form1" name="berat" class="form-control" value="<?php echo $p->PROD_WEIGHT ?>">
                                                <label for="form1" class="">Berat dalam kg</label>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                          <label for="sel1">Kondisi</label>
                                          <select class="form-control" name="kondisi" id="sel1">
                                            <option>-</option>
                                            <option value="Baru" <?php if ($p->PROD_CONDITION == 'Baru') {
                                                echo 'selected';
                                            } ?>>Baru</option>
                                            <option value="Bekas" <?php if ($p->PROD_CONDITION == 'Bekas') {
                                                echo 'selected';
                                            } ?>>Bekas</option>
                                           
                                          </select>
                                        </div> 
                                        </div>
                                    </div>
          
                                    
                                    
                                </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                    </div>
                    <!--/.third row-->
                    <div class="row">
                       <div class="col-lg-12 mb-3">
                           <div class="card wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                     <h6 class="card-title">Detail Tambahan</h6>
                                    <p style="font-size: 11px" class="card-text">Tambahkan detail jika perlu.
                                    </p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="md-form">
                                                <textarea id="textarea-char-counter" name="DeskripsiTambah" class="md-textarea" length="50"><?php echo $p->PROD_OTHER_DESC ?></textarea>
                                                <label for="textarea-char-counter">Deskripsi tambahan</label>
                                            </div>        
                                        </div>
                                    </div>
                                </div>

                            </div>
                       </div>
                   </div>
                   <!-- /fourth row -->
                   <div class="row">
                       <div class="col-lg-12 mb-3">
                           <div class="wow fadeIn" data-wow-delay="0.2s">
                                <!--Card content-->
                                <div class="pull-right">
                                <a href="<?php echo base_url('index.php/product'); ?>" class="btn btn-sm rgba-red-strong">Batal</a>
                                <button type="submit" class="btn btn-success btn-sm">Simpan perubanan</button>    
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <!--/.Main column-->
            </form>
            </div>
        </div>
        <!--/.Main layout-->

    </main>
   <?php } ?>