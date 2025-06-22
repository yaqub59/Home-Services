@extends('admin.Layouts.master')
@section('title')
    Add Users
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <!-- Custom Boostrap Validation -->
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4">
                        <h5 class="card-title">Add Users</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.users-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row row">
                                    <div class="col-md-4 mb-3">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="name"
                                            placeholder="Enter Name">

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 mb-3">
                                            <label for="imageInput">Image</label>
                                            <div class="input-group">
                                                <input type="file" name="image" id="imageInput" class="form-control"
                                                    accept="image/*">
                                            </div>
                                        </div>

                                        <div class="col-md-2 mb-3 d-flex align-items-end">
                                            <div id="imagePreview">
                                                <img id="previewImg" src="#" alt="Image Preview"
                                                    class="img-fluid d-none border rounded shadow"
                                                    style="max-height: 100px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
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
                preview.src = '#';
                preview.classList.add('d-none');
            }
        });
    </script>
@endsection
