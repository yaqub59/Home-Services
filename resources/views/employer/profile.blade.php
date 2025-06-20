@extends('employer.Layouts.master')

@section('title')
    Update Profile
@endsection

@section('content')
    <div class="col-xl-9 col-lg-8">
        <div class="dashboard-sec shadow-sm p-4 rounded bg-white">
            <div class="page-title mb-4 border-bottom pb-2">
                <h3 class="fw-bold">Update Profile</h3>
            </div>

            <form method="POST" action="{{ route('employer.update') }}" enctype="multipart/form-data">
                @csrf
                <!-- 👤 Personal Information -->
                <h5 class="mb-3 text-primary fw-semibold"><i class="bi bi-person-circle me-2"></i>Personal Information</h5>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" name="name" value="{{ $employer->name }}"
                                placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" value="{{ $employer->email }}"
                                placeholder="email@example.com">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Job Title</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-briefcase"></i></span>
                            <input type="text" class="form-control" name="job_title" value="{{ $employer->job_title }}"
                                placeholder="Enter Job Title">
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Left: Upload Input -->
                        <div class="col-md-6">
                            <label class="form-label">Upload Profile Picture</label>
                            <input class="form-control mb-2" type="file" name="image" id="profilePictureInput">
                            <small class="text-muted d-block">JPG, JPEG or PNG (Max: 2MB)</small>
                            <small class="text-muted">Recommended: Square image (1:1)</small>
                        </div>

                        <!-- Right: Preview -->
                        <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <label class="form-label">Current Profile Picture</label>
                            <div class="rounded border shadow-sm overflow-hidden" style="width: 120px; height: 120px;">
                                <img id="profilePreview"
                                    src="{{ $employer->image ? asset('images/employer/' . $employer->image) : asset('images/default.png') }}"
                                    alt="Profile Picture" class="img-fluid w-100 h-100" style="object-fit: cover;" />
                            </div>
                        </div>
                    </div>



                </div>

                <hr class="my-4">

                <!-- 🔒 Password Update -->
                <h5 class="mb-3 text-danger fw-semibold"><i class="bi bi-lock me-2"></i>Change Password</h5>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">New Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="********">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="********">
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <!-- 📩 Submit -->
                <div class="text-end mt-4">
                    <button type="submit"
                        class="btn btn-outline-primary btn-lg px-4 rounded-pill d-inline-flex align-items-center gap-2">
                        <i class="bi bi-save"></i>
                        <span>Update Profile</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.getElementById('profilePictureInput').addEventListener('change', function() {
            const file = this.files[0];
            const preview = document.getElementById('profilePreview');
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
