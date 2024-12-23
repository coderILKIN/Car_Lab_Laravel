<div>
    @if(session('success'))
    <script>
        Swal.fire({
            title: 'OK!',
            text: '{{session("success")}}',
            icon: 'success',
            confirmButtonText: 'OK',
            timer: 3000
        })
    </script>

    @elseif(session('error'))
    <script>
        Swal.fire({
            title: 'Error!',
            text: '{{session("error")}}',
            icon: 'error',
            confirmButtonText: 'OK',
            timer: 3000
        })
    </script>
    @endif
</div>