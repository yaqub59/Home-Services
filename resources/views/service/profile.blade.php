@section('title')
    Profile
@endsection
@include('service.Layouts.profile-head')

<body class="dashboard-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        @include('service.Layouts.header')
        <!-- /Header -->

        <!-- Page Content -->
        <div class="content content-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="settings-widget">
                            <div
                                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <a href="{{ route('service.profile') }}"><img alt="profile image"
                                        src="{{ asset('images/settings/' . Setting()->site_logo) }}"
                                        class="avatar-lg rounded-circle"></a>
                                <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                    <h3 class="mb-0"><a
                                            href="{{ route('service.profile') }}">{{ Auth::user()->name }}</a><img
                                            src="{{ asset('assets/img/icon/verified-badge.svg') }}" class="ms-1"
                                            alt="Img"></h3>
                                    <p class="mb-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            @include('service.Layouts.sidebar')
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="pro-pos">
                            <div class="setting-content">
                                <form action="{{ route('profile.update-profile') }}" method="Post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="card">
                                        <div class="pro-head">
                                            <h3>Profile Setting</h3>
                                        </div>
                                        <div class="pro-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-row pro-pad pt-0 ps-0">
                                                        <div class="input-block col-md-6 pro-pic">
                                                            <label class="form-label">Profile Picture</label>
                                                            <div class="d-flex align-items-center">
                                                                <div class="upload-images freelancer-pic-box">
                                                                    <img src="{{ auth()->user()->image ? asset('images/avatar/' . auth()->user()->image) : asset('assets/img/icon/user-img.svg') }}"
                                                                        alt="Profile Image" id="blah"
                                                                        style="max-width: 80px; max-height: 80px; object-fit: cover; border-radius: 50%; border: 1px solid #ccc;">
                                                                </div>

                                                                <div class="ms-3 freelancer-pic-upload">
                                                                    <label class="file-upload image-upbtn"
                                                                        style="cursor:pointer;">
                                                                        Upload Image
                                                                        <input type="file" name="image"
                                                                            id="imgInp" style="display:none;"
                                                                            accept="image/*" />
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name"
                                                            value="{{ Auth::user()->name }}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="text" name="email"
                                                            value="{{ Auth::user()->email }}" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Your Job Title</label>
                                                        <input type="text" name="job_title"
                                                            value="{{ Auth::user()->job_title }}" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Services --}}
                                    <div class="form-row">
                                        <div class="col-lg-12 w-100">
                                            <div class="card flex-fill mb-3">
                                                <div class="pro-head">
                                                    <h4 class="pro-titles without-border mb-0">Services</h4>
                                                </div>
                                                <div class="pro-body">
                                                    <div id="services-wrapper">
                                                        @forelse(auth()->user()->services as $index => $service)
                                                            <div
                                                                class="form-row align-items-center skill-cont service-row mb-3">
                                                                <input type="hidden"
                                                                    name="services[{{ $index }}][id]"
                                                                    value="{{ $service->id ?? '' }}">
                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Service Name</label>
                                                                    <input type="text"
                                                                        name="services[{{ $index }}][name]"
                                                                        value="{{ $service->name }}"
                                                                        class="form-control" placeholder="Enter name">
                                                                </div>
                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Description</label>
                                                                    <input type="text"
                                                                        name="services[{{ $index }}][description]"
                                                                        value="{{ $service->description }}"
                                                                        class="form-control"
                                                                        placeholder="Enter description">
                                                                </div>
                                                                <div class="input-block col-lg-3">
                                                                    <label class="form-label">Upload Image</label>
                                                                    
                                                                    <input type="file"
                                                                        name="services[{{ $index }}][image]"
                                                                        class="form-control">
                                                                    @if ($service->image)
                                                                        <img src="{{ asset('images/services/' . $service->image) }}"
                                                                            alt="Service Image"
                                                                            style="max-width: 100px; margin-top:5px;">
                                                                            
                                                                    @endif
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn trash-icon remove-service"
                                                                        title="Remove Service"><i
                                                                            class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div
                                                                class="form-row align-items-center skill-cont service-row mb-3">
                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Service Name</label>
                                                                    <input type="text" name="services[0][name]"
                                                                        class="form-control" placeholder="Enter name">
                                                                </div>
                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Description</label>
                                                                    <input type="text"
                                                                        name="services[0][description]"
                                                                        class="form-control"
                                                                        placeholder="Enter description">
                                                                </div>
                                                                <div class="input-block col-lg-3">
                                                                    <label class="form-label">Upload Image</label>
                                                                    <input type="file" name="services[0][image]"
                                                                        class="form-control">
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn trash-icon remove-service"
                                                                        title="Remove Service"><i
                                                                            class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        @endforelse
                                                    </div>

                                                    <a href="javascript:void(0)" id="add-service-btn"
                                                        class="add-btn-form w-100 d-block text-end mt-2">
                                                        <i class="feather-plus-circle me-2"></i>Add New
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Services Section End --}}

                                        {{-- certificates --}}
                                        <div class="col-lg-12 w-100">
                                            <div class="card flex-fill mb-3">
                                                <div class="pro-head">
                                                    <h4 class="pro-titles without-border mb-0">Certificates</h4>
                                                </div>
                                                <div class="pro-body">
                                                    <div id="certificates-wrapper">
                                                        @forelse(old('certificates', auth()->user()->certificates) as $index => $certificate)
                                                            <div
                                                                class="form-row align-items-center skill-cont certificate-row mb-3">
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Name</label>
                                                                    <input type="text"
                                                                        name="certificates[{{ $index }}][name]"
                                                                        class="form-control"
                                                                        placeholder="Enter certificate name"
                                                                        value="{{ old('certificates.' . $index . '.name', $certificate->name ?? '') }}">
                                                                </div>
                                                                <div class="input-block col-lg-3">
                                                                    <label class="form-label">Institute</label>
                                                                    <input type="text"
                                                                        name="certificates[{{ $index }}][institute]"
                                                                        class="form-control"
                                                                        placeholder="Enter institute"
                                                                        value="{{ old('certificates.' . $index . '.institute', $certificate->institute ?? '') }}">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Start Date</label>
                                                                    <input type="date"
                                                                        name="certificates[{{ $index }}][start_date]"
                                                                        class="form-control"
                                                                        value="{{ old('certificates.' . $index . '.start_date', optional($certificate)->start_date ? \Carbon\Carbon::parse($certificate->start_date)->format('Y-m-d') : '') }}">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">End Date</label>
                                                                    <input type="date"
                                                                        name="certificates[{{ $index }}][end_date]"
                                                                        class="form-control"
                                                                        value="{{ old('certificates.' . $index . '.end_date', optional($certificate)->end_date ? \Carbon\Carbon::parse($certificate->end_date)->format('Y-m-d') : '') }}">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Description</label>
                                                                    <input type="text"
                                                                        name="certificates[{{ $index }}][description]"
                                                                        class="form-control"
                                                                        placeholder="Enter description"
                                                                        value="{{ old('certificates.' . $index . '.description', $certificate->description ?? '') }}">
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn trash-icon remove-certificate"
                                                                        data-service-id="{{ $service->id ?? '' }}"
                                                                        title="Remove Certificate">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div
                                                                class="form-row align-items-center skill-cont certificate-row mb-3">
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Name</label>
                                                                    <input type="text" name="certificates[0][name]"
                                                                        class="form-control"
                                                                        placeholder="Enter certificate name">
                                                                </div>
                                                                <div class="input-block col-lg-3">
                                                                    <label class="form-label">Institute</label>
                                                                    <input type="text"
                                                                        name="certificates[0][institute]"
                                                                        class="form-control"
                                                                        placeholder="Enter institute">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Start Date</label>
                                                                    <input type="date"
                                                                        name="certificates[0][start_date]"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">End Date</label>
                                                                    <input type="date"
                                                                        name="certificates[0][end_date]"
                                                                        class="form-control">
                                                                </div>
                                                                <div class="input-block col-lg-2">
                                                                    <label class="form-label">Description</label>
                                                                    <input type="text"
                                                                        name="certificates[0][description]"
                                                                        class="form-control"
                                                                        placeholder="Enter description">
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn trash-icon remove-certificate"
                                                                        title="Remove Certificate">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforelse
                                                    </div>

                                                    <a href="javascript:void(0)" id="add-certificate-btn"
                                                        class="add-btn-form w-100 d-block text-end mt-2">
                                                        <i class="feather-plus-circle me-2"></i>Add New
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- End certificates --}}
                                        {{-- Eexpertise --}}
                                        <div class="col-lg-12 w-100">
                                            <div class="card flex-fill mb-3">
                                                <div class="pro-head">
                                                    <h4 class="pro-titles without-border mb-0">Expertises</h4>
                                                </div>
                                                <div class="pro-body">
                                        <div id="expertise-wrapper">
                                            @forelse(old('tags', auth()->user()->expertises) as $index => $tag)
                                                <div class="form-row align-items-center skill-cont mb-2 expertise-row">
                                                    <div class="input-block col-lg-10">
                                                        <label class="form-label">Tags</label>
                                                        <input type="text" class="form-control"
                                                            name="tags[{{ $index }}][tags]"
                                                            value="{{ is_array($tag) ? $tag['tags'] : $tag->tags }}"
                                                            placeholder="Enter expertise tag">
                                                    </div>
                                                    <div class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                        <a href="javascript:void(0);"
                                                            class="btn trash-icon remove-exp" title="Remove Tag">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="form-row align-items-center skill-cont mb-2 expertise-row">
                                                    <div class="input-block col-lg-10">
                                                        <label class="form-label">Tags</label>
                                                        <input type="text" class="form-control"
                                                            name="tags[0][tags]" placeholder="Enter expertise tag">
                                                    </div>
                                                    <div class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                        <a href="javascript:void(0);"
                                                            class="btn trash-icon remove-exp" title="Remove Tag">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a href="javascript:void(0)"
                                            class="add-btn-form add-exp w-100 d-block text-end mt-2">
                                            <i class="feather-plus-circle me-2"></i>Add New
                                        </a>
                                        {{-- End expertise --}}
                                    </div>
                                    <div class="card text-end border-0">
                                        <div class="pro-body"> <button class="btn btn-primary click-btn btn-plan"
                                                type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        @include('service.Layouts.footer')

        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->

    @include('service.Layouts.profile-footer-script')

</body>

</html>
