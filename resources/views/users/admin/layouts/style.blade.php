@php
        $configuration =App\Models\Configuration::where('id', 1)->first();

@endphp
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/dist/min/dropzone.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/chocolat/dist/css/chocolat.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/weather-icon/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/modules/select2/dist/css/select2.min.css') }}">
<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets/users/assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/users/assets/css/components.min.css') }}">
<link rel="shortcut icon" href="{{ $configuration->getMedia('logo')->first()->getFullUrl()}} " type="image/x-icon">
