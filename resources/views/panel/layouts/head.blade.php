<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{config('app.name' , 'hola')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset("template/assets/img/favicon.ico")}}"/>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset("template/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("template/assets/css/plugins.css")}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset("template/plugins/fullcalendar/fullcalendar.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("template/plugins/fullcalendar/custom-fullcalendar.advance.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("template/plugins/flatpickr/flatpickr.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("template/plugins/flatpickr/custom-flatpickr.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("template/assets/css/forms/theme-checkbox-radio.css")}}" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    
    @yield('styles')

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
