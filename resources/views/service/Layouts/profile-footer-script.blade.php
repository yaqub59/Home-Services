  <!-- jQuery -->
  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

  <!-- Bootstrap Bundle JS -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Select2 JS -->
  <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

  <!-- Sticky Sidebar JS -->
  <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
  <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

  <!-- Datetimepicker JS -->
  <script src="{{ asset('assets/js/moment.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

  <!-- Profile Settings JS -->
  <script src="{{ asset('assets/js/profile-settings.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('admin-assets/plugins/izitoast/js/iziToast.min.js') }}"></script>
  <script>
      document.getElementById('imgInp').onchange = function(evt) {
          const [file] = this.files;
          if (file) {
              document.getElementById('blah').src = URL.createObjectURL(file);
          }
      };
  </script>
  


  @include('layouts.toast-messages')
