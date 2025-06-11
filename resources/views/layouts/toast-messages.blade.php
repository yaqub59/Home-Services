    <script>
     @if ($errors->any())
         @foreach ($errors->all() as $error)
             iziToast.error({
                 title: 'Error',
                 message: '{{ $error }}',
                 position: 'topRight',
             });
         @endforeach
     @elseif (session('success'))
         iziToast.success({
             title: 'Success',
             message: '{{ session('success') }}',
             position: 'topRight',
         });
     @elseif (session('error'))
         iziToast.error({
             title: 'Error',
             message: '{{ session('error') }}',
             position: 'topRight',
         });
     @elseif (session('warning'))
         iziToast.warning({
             title: 'Warning',
             message: '{{ session('warning') }}',
             position: 'topRight',
         });
     @elseif (session('info'))
         iziToast.info({
             title: 'Info',
             message: '{{ session('info') }}',
             position: 'topRight',
         });
     @endif
 </script>