
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Taman Usaha Politeknik Negeri Jember</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
   <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>/assets/css/style.css" rel="stylesheet">
    
     
    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .divider-new {
            margin-top: 0;
        }

        .navbar {
            background-color: #414a5c;
        }

        footer.page-footer {
            background-color: #414a5c;
            margin-top: 2rem;
        }

        .list-group-item.active {
            background-color: #2bbbad;
            border-color: #2bbbad
        }

        .list-group-item:not(.active) {
            color: #222;
        }

        .list-group-item:not(.active):hover {
            color: #666;
        }
        .card {
            font-weight: 300;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        #img-upload{
            width: 25%;
            height: 25%;
        }
        .reviews {
            text-align: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .price {
            position: absolute;
            left: 0;
            top: 0;
            margin-top: -2px;
        }

        .price .tag {
            margin: 0;
        }
    </style>
</head>

<body class="rgba-grey-slight">


    <main class="mt-5">

        <!--Main layout-->
        <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-lg-1"></div>
                <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">
                    

                </div>
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-6">
                    <div class="wow fadeIn" data-wow-delay="0.4s">
                        <center><h4>Admin Tamu Poltek</h4></center>
                        <br>
                        <div class="card">
                            <div class="card-body mb-3">
                                <center><p><strong>Login untuk admin di TamanUsaha.com</strong></p></center>
								<?php echo "<br>".$this->session->flashdata("pesan");?>
                                <form action="<?php echo base_url() ?>/index.php/admin/login_admin/adm_login" method="post">
                                <div class="md-form">
                                    <i class="fa fa-envelope prefix grey-text"></i>
                                    <input type="text" id="orangeForm-email" class="form-control" name="user">
                                    <label for="orangeForm-email">Your Username</label>
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
                                            
                                    </div>
                                </div>
                                

                                
                                <center><button type="submit" class="btn btn-primary pull-right btn-block">Login</button>
                               </center>
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



    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="h<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/mdb.min.js"></script>

    <script>
        new WOW().init();

        $(document).ready( function() {
        $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {
            
            var input = $(this).parents('.input-group').find(':text'),
                log = label;
            
            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }
        
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });     
    });
    </script>

</body>

</html>