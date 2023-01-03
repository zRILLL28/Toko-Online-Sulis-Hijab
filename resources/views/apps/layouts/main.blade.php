<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AFIFA HIJAB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('apps.layouts.links.head')
</head>

<body>

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        @include('apps.layouts.navbar')

        @yield('content')
        @include('apps.layouts.footer')
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

@include('apps.layouts.links.body')
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
    @elseif($message = session('error'))
    Toast.fire({
            icon: 'error',
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
