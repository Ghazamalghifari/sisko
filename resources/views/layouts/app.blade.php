<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->


    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">

    <link href="{{ asset('css/bootstrap1.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/mdb1.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/bootstrap-datetimepicker1.css') }}" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.bootstrap3.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('tab/media/css/jquery.dataTables.min.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('glyphicons/css/bootstrap.icon-large.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('glyphicons/css/bootstrap.icon-large.min.css') }}">
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
                    <li><a class="icons-sm"> <i class="fa fa-user"> {{ Auth::user()->name }} </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!-- Side navigation links -->
            <li>
 
                 @role('pengajar')   
                    <ul class="collapsible collapsible-accordion"> 

                      <li> <a class="collapsible-header waves-effect arrow-r" href="{{ url('\home') }}" ><i class="fa fa-home"></i>Beranda</a></li> 

                                 
                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('alumnis.index') }}" ><i class="fa fa-mortar-board"" aria-hidden="true"></i>Alumni</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('kelass.index') }}" ><i class="fa fa-university" aria-hidden="true"></i>Kelas</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('pelajars.index') }}" ><i class="fa fa-child" aria-hidden="true"></i>Siswa</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('niss.index') }}" ><i class="fa fa-hdd-o" aria-hidden="true"></i>Nis</a></li>

                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('minjams.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i>Pinjaman Buku</a></li>


                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-clock-o" aria-hidden="true"></i>Jadwal<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="{{ route('jadwall.index') }}" class="waves-effect">Jadwal Les</a>
                                    </li>

                                    <li><a href="{{ route('jadwaln.index') }}" class="waves-effect">Jadwal Ngajar</a>
                                    </li>

                                    <li><a href="{{ route('jadwale.index') }}" class="waves-effect">Jadwal Ekskul</a>
                                    </li>

                                    <li><a href="{{ route('jadwalg.index') }}" class="waves-effect">Jadwal Guru</a>

                                    <li><a href="{{ route('jadwals.index') }}" class="waves-effect">Jadwal Sekolah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>  

                    </ul>
                 @endrole

                 @role('perpustakaan')   
                    <ul class="collapsible collapsible-accordion"> 
                        <a class="collapsible-header waves-effect arrow-r" href="{{ url('\home') }}" ><i class="fa fa-home"></i>Beranda</a>

                        <li><a class="waves-effect" href="{{ route('niss.index') }}">Nis</a></li>

                                    <li><a href="{{ route('bukus.index') }}" class="waves-effect">Buku</a>
                                    </li>

                                    <li><a href="{{ route('minjams.index') }}" class="waves-effect">Pinjaman</a>
                                    </li>
                    </ul>
                 @endrole

                 @role('uks')     
                    <ul class="collapsible collapsible-accordion">
                        
                        <a class="collapsible-header waves-effect arrow-r" href="{{ url('\home') }}" ><i class="fa fa-home"></i>Beranda</a>

                        <li><a class="waves-effect" href="{{ route('niss.index') }}">Nis</a></li>

                         <li><a href="{{ route('dokter.index') }}" class="waves-effect">Dokter Kecil</a></li>

                         <li><a href="{{ route('omasuks.index') }}" class="waves-effect">Obat Masuk</a></li>

                         <li><a href="{{ route('okeluars.index') }}" class="waves-effect">Obat Keluar</a></li>

                         <li><a href="{{ route('fasilitass.index') }}" class="waves-effect">Fasilitas</a></li> 


                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cogs" aria-hidden="true"></i>Setting<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                                    <li><a href="{{ route('okategoris.index') }}" class="waves-effect">Kategori Obat</a>
                                    </li>

                                    <li><a href="{{ route('osatuans.index') }}" class="waves-effect">Satuan Obat</a>
                                    </li>

                                </ul>
                            </div>
                        </li>                    

                    </ul>
                @endrole

                 @role('admin')                   
                    <ul class="collapsible collapsible-accordion">
                        <li>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ url('\home') }}" ><i class="fa fa-home"></i>Beranda</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('alumnis.index') }}" ><i class="fa fa-mortar-board"" aria-hidden="true"></i>Alumni</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('gurus.index') }}" ><i class="fa fa-users" aria-hidden="true"></i>Guru</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('karyawans.index') }}" ><i class="fa fa-user" aria-hidden="true"></i>Karyawan</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('kelass.index') }}" ><i class="fa fa-university" aria-hidden="true"></i>Kelas</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('pelajars.index') }}" ><i class="fa fa-child" aria-hidden="true"></i>Siswa</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('niss.index') }}" ><i class="fa fa-hdd-o" aria-hidden="true"></i>Nis</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('users.index') }}" ><i class="fa fa-sign-in" aria-hidden="true"></i>User</a>

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-tasks" aria-hidden="true"></i>Perpustakaan<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="{{ route('bukus.index') }}" class="waves-effect">Buku</a>
                                    </li>

                                    <li><a href="{{ route('minjams.index') }}" class="waves-effect">Pinjaman</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-user-md" aria-hidden="true"></i>Uks<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="{{ route('dokters.index') }}" class="waves-effect">Dokter Kecil</a>
                                    </li>

                                    <li><a href="{{ route('omasuks.index') }}" class="waves-effect">Obat Masuk</a>
                                    </li>

                                    <li><a href="{{ route('okeluars.index') }}" class="waves-effect">Obat Keluar</a>
                                    </li>

                                    <li><a href="{{ route('fasilitass.index') }}" class="waves-effect">Fasilitas</a>
                                    </li>
                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-clock-o" aria-hidden="true"></i>Jadwal<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                        
                                    <li><a href="{{ route('jless.index') }}" class="waves-effect">Jadwal Les</a>
                                    </li>

                                    <li><a href="{{ route('jngajars.index') }}" class="waves-effect">Jadwal Ngajar</a>
                                    </li>

                                    <li><a href="{{ route('jekskuls.index') }}" class="waves-effect">Jadwal Ekskul</a>
                                    </li>

                                    <li><a href="{{ route('jgurus.index') }}" class="waves-effect">Jadwal Guru</a>

                                    <li><a href="{{ route('jsekolahs.index') }}" class="waves-effect">Jadwal Sekolah</a>
                                    </li>
                                </ul>
                            </div>
                        </li>  

                         <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-navicon" aria-hidden="true"></i></i>Fasilitas<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('less.index') }}" ><i class="fa fa-book" aria-hidden="true"></i>Les</a>

                        <a class="collapsible-header waves-effect arrow-r" href="{{ route('kantins.index') }}" ><i class="fa fa-cutlery" aria-hidden="true"></i>Kantin</a>


                                </ul>
                            </div>
                        </li> 

                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-cogs" aria-hidden="true"></i>Setting<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>

                                    <li><a href="{{ route('ekskuls.index') }}" class="waves-effect">Ekskul</a>
                                    </li>

                                    <li><a href="{{ route('pekerjaans.index') }}" class="waves-effect">Pekerjaan</a>
                                    </li>

                                    <li><a href="{{ route('pelajarans.index') }}" class="waves-effect">Pelajaran</a>
                                    </li>

                                    <li><a href="{{ route('okategoris.index') }}" class="waves-effect">Kategori Obat</a>
                                    </li>

                                    <li><a href="{{ route('osatuans.index') }}" class="waves-effect">Satuan Obat</a>
                                    </li>

                                </ul>
                            </div>
                        </li>                    
                    </ul>
                @endrole
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
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
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
        @include('layouts._flash')
        @yield('content')
    </div>

    <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/selectize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


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

     @yield('scripts')

</body>
</html>
