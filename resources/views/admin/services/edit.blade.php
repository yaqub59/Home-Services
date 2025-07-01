@extends('admin.Layouts.master')
@section('title')
    Edit Services
@endsection
@section('css')
    <style>
        .img-thumbnail {
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">

            <!-- Custom Boostrap Validation -->
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4">
                        <h5 class="card-title">Edit Services</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.services.update', $services->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-row row mb-4">
                                    <!-- 🖼️ Current Image Display -->
                                    <div class="col-md-6">
                                        <label class="form-label">Current Image</label><br>
                                        <img src="{{ asset('images/admin/services/' . $services->image) }}"
                                            alt="Service Image" class="img-thumbnail" width="120" height="120">
                                    </div>
                                    <!-- 📤 Upload New Image -->
                                    <div class="col-md-6">
                                        <label class="form-label">Change Image</label>
                                        <input type="file" class="form-control" name="image" accept="image/*">
                                    </div>
                                </div>

                                <!-- 📝 Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="name" value="{{ $services->name }}"
                                        placeholder="Enter your title" required>
                                </div>

                                <!-- 💬 Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="4" placeholder="Type your description..." required>{{ $services->description }}</textarea>
                                </div>

                                <!-- 🔘 Submit -->
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save me-1"></i> Update Service
                                </button>
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
        document.querySelector('input[name="image"]').addEventListener('change', function(e) {
            const preview = document.querySelector('img.img-thumbnail');
            const file = e.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
            }
        });
    </script>
@endsection
