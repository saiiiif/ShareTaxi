<head>
    <title>{{ $title or '' }}</title>
    <meta name="description" content="{{  $description or '' }}">
    <meta name="keywords" content="{{ $keywords or '' }}">
    <meta name="author" content="BluePen Labs">
    <meta name="generator" content="BluePen Labs">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="stylesheet" href="{{ asset('css/frontoffice') }}/main.css">
    <link rel="stylesheet" href="{{ asset('css/frontoffice') }}/colors.css"  id="navy">
    <script type="text/javascript" src="{{ asset('plugins') }}/jquery/jquery.js"></script>

    <script type="text/javascript" src="{{ asset('plugins') }}/toastr/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset ('plugins') }}/toastr/toastr.css">

    <link rel="stylesheet" type="text/css" href="{{ asset ('plugins') }}/select2/select2.css">

    <link rel="stylesheet" type="text/css" href="{{ asset ('plugins') }}/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('plugins') }}/sweetalert/swal-forms.css">
    <script type="text/javascript" src="{{ asset ('plugins') }}/sweetalert/sweetalert.min.js"></script>
</head>