<main class="mt-5">

        <!--Main layout-->
        <div class="container-fluid">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-1"></div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.2s">
                    

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-5">
                    <div class="wow fadeIn" data-wow-delay="0.4s">
                        <h4>Menjadi penjual di TamuPoltek</h4>
                        <br>
                        <div class="card">
                            <div class="card-body mb-3">
                                <p><strong>Login untuk penjual di TamuPoltek.com</strong></p>
                                <p>Masukkan data dengan benar.</p>
                                <form action="<?php echo base_url('index.php/login/pro_login') ?>" method="post">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="text" id="orangeForm-email" class="form-control" name="email">
                                    <label for="orangeForm-email">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="orangeForm-pass" class="form-control" name="pass">
                                    <label for="orangeForm-pass">Your password</label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1">
                                        
                                    </div>
                                    <div class="col-lg-10">
                                    <?= $this->session->flashdata('pesan')?>        
                                    </div>
                                </div>
                                

                                
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                                <a href="<?php echo base_url('index.php/register'); ?>" class="btn btn-default pull-right">Daftar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div> 
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

    </main>
    
    <br><br><br><br>