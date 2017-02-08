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
            html, body 

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



<div class="container">
    <div class="row">
    <div class="col-md-2">
        
    </div>
        <div class="col-md-8 col-md-offset-2">
           <div class="card">
                    <div class="card-block">


                        <!--Header-->
                        <div class="form-header purple darken-4">
                            <h3><i class="fa "></i> Reset Password :</h3>
                        </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="row" >
                    {!! Form::open(['url'=>'/password/email','class'=>'form-horizontal']) !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                            {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-2 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-btn fa-envelope"></i> Kirim link reset password
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
</div>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- SCRIPT -->

  <script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>


    <script type="text/javascript" src="{{asset('js/tether1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/mdb1.min.js')}}"></script>
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