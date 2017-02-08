<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

    <link href="<?php echo e(asset('css/bootstrap1.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/mdb1.min.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('css/bootstrap-datetimepicker1.css')); ?>" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/selectize.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/selectize.bootstrap3.css')); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('tab/media/css/jquery.dataTables.min.css')); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('glyphicons/css/bootstrap.icon-large.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('glyphicons/css/bootstrap.icon-large.min.css')); ?>">
    <!-- Scripts -->
     <style>

        }
        
        body {
            padding-bottom: 10%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

        }
        #set{
            padding-top: 5%;
        }

    </style>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body class="fixed-sn purple-skin">

    <div id="app">


     <header>

        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
                <center><div class="rgba-stylish-strong"><br>
                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
                        <p class="user white-text"><center>SISKO</center>Sistem Informasi Sekolah</p>
                    </div></center>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li><a class="icons-sm"> <i class="fa fa-user"> <?php echo e(Auth::user()->name); ?> </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!-- Side navigation links -->
            <li>
 
                 <?php if (app('laratrust')->hasRole('pengajar')) : ?>   
                    <ul class="collapsible collapsible-accordion"> 

                      <li> <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(url('\home')); ?>" ><i class="fa fa-home"></i>Beranda</a></li> 

                                 
                        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('alumnis.index')); ?>" ><i class="fa fa-mortar-board"" aria-hidden="true"></i>Alumni</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('kelass.index')); ?>" ><i class="fa fa-university" aria-hidden="true"></i>Kelas</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('pelajars.index')); ?>" ><i class="fa fa-child" aria-hidden="true"></i>Siswa</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('niss.index')); ?>" ><i class="fa fa-hdd-o" aria-hidden="true"></i>Nis</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('minjams.index')); ?>"><i class="fa fa-tasks" aria-hidden="true"></i>Pinjaman Buku</a></li>


                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-clock-o" aria-hidden="true"></i>Jadwal<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="<?php echo e(route('jadwall.index')); ?>" class="waves-effect">Jadwal Les</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jadwaln.index')); ?>" class="waves-effect">Jadwal Ngajar</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jadwale.index')); ?>" class="waves-effect">Jadwal Ekskul</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jadwalg.index')); ?>" class="waves-effect">Jadwal Guru</a>

                                    <li><a href="<?php echo e(route('jadwals.index')); ?>" class="waves-effect">Jadwal Sekolah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>  

                    </ul>
                 <?php endif; // app('laratrust')->hasRole ?>

                 <?php if (app('laratrust')->hasRole('perpustakaan')) : ?>   
                    <ul class="collapsible collapsible-accordion"> 
                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(url('\home')); ?>" ><i class="fa fa-home"></i>Beranda</a>

                        <li><a class="waves-effect" href="<?php echo e(route('niss.index')); ?>">Nis</a></li>

                                    <li><a href="<?php echo e(route('bukus.index')); ?>" class="waves-effect">Buku</a>
                                    </li>

                                    <li><a href="<?php echo e(route('minjams.index')); ?>" class="waves-effect">Pinjaman</a>
                                    </li>
                    </ul>
                 <?php endif; // app('laratrust')->hasRole ?>

                 <?php if (app('laratrust')->hasRole('uks')) : ?>     
                    <ul class="collapsible collapsible-accordion">
                        
                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(url('\home')); ?>" ><i class="fa fa-home"></i>Beranda</a>

                        <li><a class="waves-effect" href="<?php echo e(route('niss.index')); ?>">Nis</a></li>

                         <li><a href="<?php echo e(route('dokter.index')); ?>" class="waves-effect">Dokter Kecil</a></li>

                         <li><a href="<?php echo e(route('omasuks.index')); ?>" class="waves-effect">Obat Masuk</a></li>

                         <li><a href="<?php echo e(route('okeluars.index')); ?>" class="waves-effect">Obat Keluar</a></li>

                         <li><a href="<?php echo e(route('fasilitass.index')); ?>" class="waves-effect">Fasilitas</a></li> 


                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cogs" aria-hidden="true"></i>Setting<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                                    <li><a href="<?php echo e(route('okategoris.index')); ?>" class="waves-effect">Kategori Obat</a>
                                    </li>

                                    <li><a href="<?php echo e(route('osatuans.index')); ?>" class="waves-effect">Satuan Obat</a>
                                    </li>

                                </ul>
                            </div>
                        </li>                    

                    </ul>
                <?php endif; // app('laratrust')->hasRole ?>

                 <?php if (app('laratrust')->hasRole('admin')) : ?>                   
                    <ul class="collapsible collapsible-accordion">
                        <li>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(url('\home')); ?>" ><i class="fa fa-home"></i>Beranda</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('alumnis.index')); ?>" ><i class="fa fa-mortar-board"" aria-hidden="true"></i>Alumni</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('gurus.index')); ?>" ><i class="fa fa-users" aria-hidden="true"></i>Guru</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('karyawans.index')); ?>" ><i class="fa fa-user" aria-hidden="true"></i>Karyawan</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('kelass.index')); ?>" ><i class="fa fa-university" aria-hidden="true"></i>Kelas</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('pelajars.index')); ?>" ><i class="fa fa-child" aria-hidden="true"></i>Siswa</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('niss.index')); ?>" ><i class="fa fa-hdd-o" aria-hidden="true"></i>Nis</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('users.index')); ?>" ><i class="fa fa-sign-in" aria-hidden="true"></i>User</a>

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tasks" aria-hidden="true"></i>Perpustakaan<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="<?php echo e(route('bukus.index')); ?>" class="waves-effect">Buku</a>
                                    </li>

                                    <li><a href="<?php echo e(route('minjams.index')); ?>" class="waves-effect">Pinjaman</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user-md" aria-hidden="true"></i>Uks<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="<?php echo e(route('dokters.index')); ?>" class="waves-effect">Dokter Kecil</a>
                                    </li>

                                    <li><a href="<?php echo e(route('omasuks.index')); ?>" class="waves-effect">Obat Masuk</a>
                                    </li>

                                    <li><a href="<?php echo e(route('okeluars.index')); ?>" class="waves-effect">Obat Keluar</a>
                                    </li>

                                    <li><a href="<?php echo e(route('fasilitass.index')); ?>" class="waves-effect">Fasilitas</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-clock-o" aria-hidden="true"></i>Jadwal<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="<?php echo e(route('jless.index')); ?>" class="waves-effect">Jadwal Les</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jngajars.index')); ?>" class="waves-effect">Jadwal Ngajar</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jekskuls.index')); ?>" class="waves-effect">Jadwal Ekskul</a>
                                    </li>

                                    <li><a href="<?php echo e(route('jgurus.index')); ?>" class="waves-effect">Jadwal Guru</a>

                                    <li><a href="<?php echo e(route('jsekolahs.index')); ?>" class="waves-effect">Jadwal Sekolah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>  

                         <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-navicon" aria-hidden="true"></i></i>Fasilitas<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('less.index')); ?>" ><i class="fa fa-book" aria-hidden="true"></i>Les</a>

                        <a class="collapsible-header waves-effect arrow-r" href="<?php echo e(route('kantins.index')); ?>" ><i class="fa fa-cutlery" aria-hidden="true"></i>Kantin</a>


                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cogs" aria-hidden="true"></i>Setting<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                                    <li><a href="<?php echo e(route('ekskuls.index')); ?>" class="waves-effect">Ekskul</a>
                                    </li>

                                    <li><a href="<?php echo e(route('pekerjaans.index')); ?>" class="waves-effect">Pekerjaan</a>
                                    </li>

                                    <li><a href="<?php echo e(route('pelajarans.index')); ?>" class="waves-effect">Pelajaran</a>
                                    </li>

                                    <li><a href="<?php echo e(route('okategoris.index')); ?>" class="waves-effect">Kategori Obat</a>
                                    </li>

                                    <li><a href="<?php echo e(route('osatuans.index')); ?>" class="waves-effect">Satuan Obat</a>
                                    </li>

                                </ul>
                            </div>
                        </li>                    
                    </ul>
                <?php endif; // app('laratrust')->hasRole ?>
            </li>
            <!--/. Side navigation links -->

        </ul>
        <!--/. Sidebar navigation -->

        <!--Navbar-->
        <nav class="navbar scrolling-navbar double-nav" id="new_navbar">

            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn">
                <p>Master Data</p>
            </div>


            <ul class="nav navbar-nav float-xs-right">
                  <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
            </ul>

        </nav>
        <!--/.Navbar-->


    </header>
    <!--/Double Navigation-->

<br>
        <?php echo $__env->make('layouts._flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>


    <script type="text/javascript" src="<?php echo e(asset('js/tether.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('js/mdb.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/dataTables.bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/selectize.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>


    <script type="text/javascript">
        $('.datepicker').pickadate();

        // Time Picker Initialization
        $('#mulai').pickatime({
            twelvehour: true
        });

        // Time Picker Initialization
        $('#selesai').pickatime({
            twelvehour: true
        });
    </script>

    <script type="text/javascript">
         $(document).ready(function() {
    $('.mdb-select').material_select();
  });
    </script>

    <script>
        $(".button-collapse").sideNav();

        var el = document.querySelector('.custom-scrollbar');

        Ps.initialize(el);
    </script>

     <?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
