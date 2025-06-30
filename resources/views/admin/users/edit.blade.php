@extends('admin.Layouts.master')
@section('title')
    Edit Users
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">

            <!-- Custom Boostrap Validation -->
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4">
                        <h5 class="card-title">Edit Users</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.users.edit', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-row row">
                                    <div class="col-md-4 mb-3">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}"
                                            id="validationCustom01" name="name" placeholder="Enter Name">

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" value="{{ $user->email }}"
                                                name="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter Password">
                                            <small class="form-text text-muted">Leave blank if you don't want to update the
                                                password.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <label for="imageInput">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="image" id="imageInput" class="form-control"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    @php
                                        use Illuminate\Support\Facades\File;

                                        $imagePath = public_path('images/admin/images/' . $user->image);
                                        $finalImage =
                                            !empty($user->image) && File::exists($imagePath)
                                                ? asset('images/admin/images/' . $user->image)
                                                : asset('images/default.png');
                                    @endphp
                                    <div class="col-md-2 mb-3 d-flex align-items-end">
                                        <div id="imagePreview">
                                            <img id="previewImg" src="{{ $finalImage }}" alt="Image Preview"
                                                class="img-fluid border rounded shadow" style="max-height: 100px;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="phone_no" class="form-label">Phone No</label>
                                            <input type="text" name="phone_no" id="phone_no" class="form-control"
                                                value="{{ old('phone_no', $user->phone_no ?? 'Not Provided') }}"
                                                placeholder="+923001234567" required>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="cnic" class="form-label">CNIC</label>
                                            <input type="text" name="cnic" id="cnic" class="form-control"
                                                value="{{ old('cnic', $user->cnic ?? 'Not Provided') }}"
                                                placeholder="12345-1234567-1" required>
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const preview = document.getElementById('previewImg');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('d-none');
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = "{{ asset('images/default.png') }}";
                preview.classList.remove('d-none');
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#phone_no').inputmask('+929999999999');
            $('#cnic').inputmask('99999-9999999-9');
        });
    </script>
@endsection
