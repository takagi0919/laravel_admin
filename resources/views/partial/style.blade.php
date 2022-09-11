 <!-- Google font-->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
 <!-- Bootstrap CSS -->
 <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" rel="stylesheet">
 <!-- Material_Able CSS -->
 <link href="{{ asset('material_able/pages/waves/css/waves.min.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/css/font-awesome-n.min.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/css/font-awesome.min.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/icon/themify-icons/themify-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/icon/icofont/css/icofont.css') }}" rel="stylesheet">
 <link href="{{ asset('material_able/css/style.css') }}" rel="stylesheet">
 {{-- Common CSS --}}
 <link href="{{ asset('css/common.css') }}" rel="stylesheet">

 {{-- Livewire CSS --}}
 @livewireStyles

 {{-- Custom CSS --}}
 @yield('style')
