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
                                                            value="{{ Auth::user()->job_title }}"
                                                            class="form-control"placeholder="{{ empty(Auth::user()->job_title) ? 'Enter your Job Title' : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Location</label>
                                                        <input type="text" name="location"
                                                            value="{{ Auth::user()->location }}"
                                                            class="form-control"placeholder="{{ empty(Auth::user()->location) ? 'Enter your Loaction' : '' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Phone No </label>
                                                        <input type="text" name="phone_no" class="form-control"
                                                            id="phone_no" placeholder="+92XXXXXXXXXX"
                                                            value="{{ old('phone_no', Auth::user()->phone_no) }}"
                                                            maxlength="13">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">CNIC</label>
                                                        <input type="text" name="cnic" class="form-control"
                                                            id="cnic" placeholder="12345-1234567-1"
                                                            value="{{ old('cnic', Auth::user()->cnic) }}">
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
                                                    <!-- ✅ Container to hold hidden deleted inputs -->
                                                    <div id="deleted-inputs-container"> </div>
                                                    <div id="services-wrapper">
                                                        @if (auth()->user()->services->count())
                                                            @php $index = 0; @endphp
                                                            @foreach (auth()->user()->services as $user_service)
                                                                {{-- ✅ existing rows (same as your code above) --}}
                                                                <div
                                                                    class="form-row align-items-center skill-cont service-row mb-3">
                                                                    <div class="input-block col-lg-4">
                                                                        <label class="form-label">Select
                                                                            Service</label>
                                                                        <select
                                                                            name="services[{{ $index }}][name]"
                                                                            class="form-control">
                                                                            @foreach ($all_services as $admin_service)
                                                                                <option
                                                                                    value="{{ $admin_service->name }}"
                                                                                    {{ $user_service->name == $admin_service->name ? 'selected' : '' }}>
                                                                                    {{ $admin_service->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                    <div class="input-block col-lg-4">
                                                                        <label class="form-label">Custom
                                                                            Description</label>
                                                                        <input type="text"
                                                                            name="services[{{ $index }}][description]"
                                                                            value="{{ $user_service->description }}"
                                                                            class="form-control">
                                                                    </div>

                                                                    <div class="input-block col-lg-3">
                                                                        <label class="form-label">Upload Image</label>
                                                                        <input type="file"
                                                                            name="services[{{ $index }}][image]"
                                                                            class="form-control">
                                                                        @if (!empty($user_service->image))
                                                                            <img src="{{ asset('images/services/' . $user_service->image) }}"
                                                                                style="max-width: 100px; margin-top:5px;">
                                                                        @endif
                                                                    </div>

                                                                    <div
                                                                        class="input-block col-lg-1 d-flex align-items-end">
                                                                        <input type="hidden"
                                                                            name="services[{{ $index }}][id]"
                                                                            value="{{ $user_service->id }}">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn remove-service"><i
                                                                                class="far fa-trash-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                                @php $index++; @endphp
                                                            @endforeach
                                                        @else
                                                            {{-- ❌ No existing services — display empty row --}}
                                                            <div
                                                                class="form-row align-items-center skill-cont service-row mb-3">
                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Select Service</label>
                                                                    <select name="services[0][name]"
                                                                        class="form-control">
                                                                        @foreach ($all_services as $admin_service)
                                                                            <option
                                                                                value="{{ $admin_service->name }}">
                                                                                {{ $admin_service->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="input-block col-lg-4">
                                                                    <label class="form-label">Custom
                                                                        Description</label>
                                                                    <input type="text"
                                                                        name="services[0][description]"
                                                                        class="form-control"
                                                                        placeholder="Description">
                                                                </div>

                                                                <div class="input-block col-lg-3">
                                                                    <label class="form-label">Upload Image</label>
                                                                    <input type="file" name="services[0][image]"
                                                                        class="form-control">
                                                                </div>

                                                                <div
                                                                    class="input-block col-lg-1 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn remove-service"><i
                                                                            class="far fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        @endif

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
                                                    <div id="deleted-certificates-container"></div>
                                                    <div id="certificates-wrapper">
                                                        @forelse(old('certificates', auth()->user()->certificates) as $index => $certificate)

                                                            <input type="hidden"
                                                                name="certificates[{{ $index }}][id]"
                                                                value="{{ $certificate->id ?? '' }}">
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
                                                                    <select
                                                                        name="certificates[{{ $index }}][institute]"
                                                                        class="form-control">
                                                                        <option value="">Select institute
                                                                        </option>
                                                                        @foreach (getAllInstitutes() as $institute)
                                                                            <option value="{{ $institute->name }}"
                                                                                @if (old('certificates.' . $index . '.institute', $certificate->institute ?? '') == $institute->name) selected @endif>
                                                                                {{ $institute->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
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
                                                                    <input type="hidden"
                                                                        name="certificates[{{ $index }}][id]"
                                                                        value="{{ $certificate['id'] ?? '' }}">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn remove-certificate"
                                                                        title="Remove Certificate">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @empty
                                                            <div class="alert alert-warning text-center"
                                                                id="empty-certificate-message">
                                                                <i class="feather-info"></i> No records found.
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
                                                    <div id="deleted-expertises-container"></div>
                                                    <div id="expertise-wrapper">
                                                        @forelse(old('tags', auth()->user()->expertises) as $index => $tag)
                                                            <div
                                                                class="form-row align-items-center skill-cont mb-2 expertise-row">
                                                                <div class="input-block col-lg-10">
                                                                    <label class="form-label">Tags</label>
                                                                    <input type="text" class="form-control"
                                                                        name="tags[{{ $index }}][tags]"
                                                                        value="{{ is_array($tag) ? $tag['tags'] : $tag->tags }}"
                                                                        placeholder="Enter expertise tag">

                                                                    <!-- HIDDEN ID FIELD (required for deletion to work) -->
                                                                    <input type="hidden"
                                                                        name="tags[{{ $index }}][id]"
                                                                        value="{{ is_array($tag) ? $tag['id'] ?? '' : $tag->id }}">
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn remove-exp" title="Remove Tag">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @empty

                                                            <div
                                                                class="form-row align-items-center skill-cont mb-2 expertise-row">
                                                                <div class="input-block col-lg-10">
                                                                    <label class="form-label">Tags</label>
                                                                    <input type="text" class="form-control"
                                                                        name="tags[0][tags]"
                                                                        placeholder="Enter expertise tag">
                                                                </div>
                                                                <div
                                                                    class="input-block col-lg-1 mb-0 d-flex align-items-end">
                                                                    <a href="javascript:void(0);"
                                                                        class="btn remove-exp" title="Remove Tag">
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
    @include('service.Layouts.profile-js')





</body>

</html>
