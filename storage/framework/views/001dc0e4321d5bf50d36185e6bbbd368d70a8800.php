<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

    <link href="<?php echo e(asset('css/bootstrap1.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/mdb1.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/bootstrap-datetimepicker1.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/dataTables.bootstrap.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/selectize.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/selectize.bootstrap3.css')); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tab/media/css/jquery.dataTables.min.css')); ?>">

        <!-- Styles -->
        <style>
            html, body {
                background:http://data.1freewallpapers.com/download/back-to-school.jpg;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="http://data.1freewallpapers.com/download/back-to-school.jpg">

            <div class="content">
                <div class="title m-b-md">
                    SISKO
                    <h1>Sistem Informasi Sekolah</h1>
                </div>

                    <div class="container" style="padding-top: 1%;">
                        <div class="row"> 
                            <div class="col-md-12">
                                <!--Form with header-->
                                <div class="card">
                                    <div class="card-block">

                                        <div class="form-header purple darken-4">
                                            <h3><i class="fa fa-lock"></i> Register Guru:</h3>
                                        </div>

                                <?php echo Form::open(['url'=>'/register','class'=>'form-horizontal']); ?>

                                            <div class="row">


        <div class="mdb-form<?php echo $errors->has('name') ? 'has-error' : ''; ?>">
            <div class="col-md-6">
                <?php echo Form::select('name',[]+App\Guru::pluck('nama_guru','nama_guru')->all(), null, ['class'=>'form-control js-selectize', 'placeholder' => 'Pilih Guru'
                ]); ?>

                <?php echo $errors->first('name', '<p class="help-block">:message</p>'); ?>

            </div>
        </div>

                                                    <div class="md-form<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" >
                                                        <div class="col-md-6">
                                                            <?php echo Form::text('email', null, ['class'=>'form-control']); ?>

                                                            <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

                                                            <label id="form2">Alamat Email</label>
                                                        </div>
                                                    </div>         

                                            </div>

                                            <div class="row">

                                                    <div class="md-form<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" >
                                                        <div class="col-md-6">
                                                            <?php echo Form::password('password', null, ['class'=>'form-control']); ?>

                                                            <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                                                            <label id="form3">Password</label>
                                                        </div>
                                                    </div>     

                                                    <div class="md-form<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>" >
                                                        <div class="col-md-6">
                                                            <?php echo Form::password('password_confirmation', null, ['class'=>'form-control']); ?>

                                                            <?php echo $errors->first('password_confirmation', '<p class="help-block">:message</p>'); ?>

                                                            <label id="form4">Konfirmasi Password</label>
                                                        </div>
                                                    </div>     
                                            </div>
                                            <br>

                                            <div class="form-group"> 
                                            <div class="col-md-6">
                                            <a class="btn btn-warning btn-block" href="<?php echo e(url('/login')); ?>"><i class="fa fa-btn fa-sign-in"></i> Sudah Memiliki Akun</a>
                                            </div>

                                            <div class="col-md-6">
                                                    <button type="submit" class="btn btn-success btn-block">
                                                        <i class="fa fa-btn fa-user-plus"></i> Daftar
                                                    </button> 
                                            </div>
                                            </div>
                                <?php echo Form::close(); ?>


                                  </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 


<!-- SCRIPT -->

  <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>


    <script type="text/javascript" src="<?php echo e(asset('js/tether1.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap1.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/dataTables.bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/selectize.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>

    <script>
        $(".button-collapse").sideNav();

        var el = document.querySelector('.custom-scrollbar');

        Ps.initialize(el);
    </script>


    </body>
</html>
