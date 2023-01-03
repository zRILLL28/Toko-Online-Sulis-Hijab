<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta content="E-Commerce Afifa Hijab Collection" name="description" />
    <meta content="Afifa Hijab Collection" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/tagsinput/jquery.tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <!-- Dropzone css -->
    <link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <!--Summer Note CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" />
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert -->
    <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>


    <style>
        .dropify-clear {
            display: none !important;
        }
    </style>
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="javasript:void(0);" class="logo">
                <span><img src="{{ asset('user-asset/images/logo/logo.png') }}" alt="logo-small" class="logo-sm" /> </span>
            </a>
        </div>
        @include('dashboard.layouts.navbar')
    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper">
        @include('dashboard.layouts.sidenav')
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container -->
            @include('dashboard.layouts.footer')
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/waves.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('assets/plugins/tippy/tippy.all.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.tooltipster.js') }}"></script>

    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peity-chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.dashboard2.init.js') }}"></script>
    <script src="{{ asset('assets/plugins/tippy/tippy.all.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.tooltipster.js') }}"></script>
    <!-- Dropzone js -->
    <script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.dropzone.init.js') }}"></script>
    <!-- Parsley js -->
    <script src="{{ asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.form-validation.init-.js') }}"></script>
    <!-- Plugins Init js -->
    <script src="{{ asset('assets/pages/jquery.form-advanced.init.js') }}"></script>
    <!--Summernote init-->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            $(".summernote").summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false, // set focus to editable area after initializing summernote
            });
        });
    </script>
    {{-- SweetAlert --}}
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            width:300,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if($message = session('success'))
            Toast.fire({
                icon: 'success',
                title: '{{ $message }}'
            })
        @endif
    </script>

    <script>
        $(document).on('click','#conf-delete',function(e){
            e.preventDefault();
            var link=$(this).attr('href');

            Swal.fire({
                title: 'Apakah anda yakin?',
                html: 'Data yang dipilih akan dihapus permanen',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location=link;
                }
            })
        })
    </script>
</body>
</html>
