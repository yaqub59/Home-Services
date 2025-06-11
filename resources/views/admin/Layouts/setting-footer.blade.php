<!-- jQuery -->
<script src="{{ asset('admin-assets/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('admin-assets/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('admin-assets/js/feather.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin-assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ asset('admin-assets/plugins/select2/js/select2.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin-assets/js/script.js') }}"></script>
<script src="{{ asset('admin-assets/plugins/izitoast/js/iziToast.min.js') }}"></script>

@include('layouts.toast-messages')
<script>
    document.getElementById('imageInput').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            document.getElementById('previewImage').src = URL.createObjectURL(file);
        }
    });
</script>
<script>
    function previewLogo(event) {
        const file = event.target.files[0];
        if (file) {
            document.getElementById('logoPreview').src = URL.createObjectURL(file);
        }
    }

    function previewFavicon(event) {
        const file = event.target.files[0];
        if (file) {
            document.getElementById('faviconPreview').src = URL.createObjectURL(file);
        }
    }
</script>
