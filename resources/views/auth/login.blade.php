<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">

    <link href="{{ asset('css/bootstrap1.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/mdb1.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-datetimepicker1.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.bootstrap3.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('tab/media/css/jquery.dataTables.min.css') }}">

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

            </div>


    <div class="container" style="padding-top: 1%;">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <!--Form with header-->
                <div class="card">
                    <div class="card-block">
                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}

                        <!--Header-->
                        <div class="form-header purple darken-4">
                            <h3><i class="fa fa-lock"></i> Login:</h3>
                        </div>

                        <!--Body-->
                        <div class="md-form{{ $errors->has('email') ? ' has-error' : ''}}">
                            <i class="fa fa-envelope prefix" style="color:black"></i>
                            <label for="form2" style="color:black">Alamat email</label>

                            {!! Form::email('email', null, ['class'=>'form-control']) !!}
                            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="md-form{{ $errors->has('password') ? ' has-error' : ''}}">
                            <i class="fa fa-lock prefix" style="color:black"></i>
                            <label for="form4" style="color:black">Password</label>

                            {!! Form::password('password', ['class'=>'form-control']) !!}
                            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="text-xs-center">
                                            <a class="btn btn-primary  btn-sm" href="{{ url('/register') }}">
                                                        <i class="fa fa-btn fa-user-plus"></i>  Register</a>
                                            <a class="btn btn-warning  btn-sm" href="{{ url('/password/reset') }}"><i class="fa fa-btn fa-undo"></i> Lupa password</a>
                            <button class="btn btn-success btn-block btn-sm"><i class="fa fa-btn fa-sign-in"></i> Login</button>
                        </div>

                    {!! Form::close() !!}


                    </div>


                </div>
                <!--/Form with header-->
            </div>
        </div>
    </div>






<!-- SCRIPT -->

  <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('js/tether1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/selectize.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

    <script>
        $(".button-collapse").sideNav();

        var el = document.querySelector('.custom-scrollbar');

        Ps.initialize(el);
    </script>


    </body>
</html>
