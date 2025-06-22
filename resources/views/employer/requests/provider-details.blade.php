@section('title')
    Service Provider Details
@endsection
@include('employer.Layouts.provider-deatils-head');

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Start Navigation -->
        <!-- Header -->
        @include('employer.Layouts.header')
        <!-- /Header -->
        <!-- Page Content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="company-detail-block pt-0">
                            <div class="company-detail">
                                <div class="company-detail-image">
                                    <img src="{{ asset('assets/img/img-04.jpg') }}" class="img-fluid" alt="logo">
                                </div>
                                <div class="company-title">
                                    <h4>{{ $serviceProvider->name }}</h4>
                                    <p>{{ $serviceProvider->job_title }}</p>
                                </div>
                            </div>
                            <div class="company-address">
                                <ul>
                                    <li>
                                        <i class="feather-map-pin"></i>{{ $serviceProvider->location }}
                                    </li>
                                    <li>
                                        <i
                                            class="feather-calendar"></i>{{ $serviceProvider->created_at->format('d F Y') }}
                                    </li>
                                    <li>
                                        <i class="feather-mail"></i>{{ $serviceProvider->email }}
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="company-detail-block company-description">
                            <h4 class="company-detail-title">Services</h4>

                            @if ($serviceProvider->services->isNotEmpty())
                                @foreach ($serviceProvider->services as $service)
                                    <div class="mb-4 p-3" style="border: 1px solid #ddd; border-radius: 10px;">

                                        {{-- Service Image --}}
                                        @if ($service->image)
                                            <div class="mb-2">
                                                <img src="{{ asset('images/services/' . $service->image) }}"
                                                    alt="Service Image"
                                                    style="max-width: 100%; height: auto; border-radius: 8px;">
                                            </div>
                                        @endif


                                        {{-- Service Name --}}
                                        @if ($service->name)
                                            <p><strong>Service:</strong> {{ $service->name }}</p>
                                        @endif

                                        {{-- Service Description --}}
                                        @if ($service->description)
                                            <p>{{ $service->description }}</p>
                                        @else
                                            <p><em>No description available for this service.</em></p>
                                        @endif

                                    </div>
                                @endforeach
                            @else
                                <p>No services added by this service provider yet.</p>
                            @endif
                        </div>

                        <div class="company-detail-block company-description">
                            <h4 class="company-detail-title">Certificates</h4>
                            <div class="experience-set-container"> {{-- Added a container for better grouping --}}
                                @forelse($serviceProvider->certificates as $certificate)
                                    <div class="experience-set">
                                        <div class="experience-set-img">
                                            {{-- You might want to display a certificate-specific icon/image if available,
                         otherwise keep the default report.png --}}
                                            <img src="{{ asset('assets/img/icon/report.png') }}" alt="Certificate Icon">
                                        </div>
                                        <div class="experience-set-content">
                                            <h5>
                                                {{ $certificate->name ?? 'Certificate' }}
                                                <span>
                                                    {{-- Format Start Date --}}
                                                    @if ($certificate->start_date)
                                                        {{ \Carbon\Carbon::parse($certificate->start_date)->format('Y') }}
                                                    @endif
                                                    @if ($certificate->start_date && $certificate->end_date)
                                                        -
                                                    @endif
                                                    {{-- Format End Date --}}
                                                    @if ($certificate->end_date)
                                                        {{ \Carbon\Carbon::parse($certificate->end_date)->format('Y') }}
                                                    @else
                                                        Present {{-- Or leave empty if no end date --}}
                                                    @endif
                                                </span>
                                            </h5>
                                            <span>{{ $certificate->institute ?? 'N/A' }}</span>
                                            @if ($certificate->description)
                                                <p>{{ $certificate->description }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    @unless ($loop->last)
                                        {{-- Optional: Add a separator between certificates if desired, but your design
                     with experience-set seems to handle spacing already --}}
                                        {{-- <hr class="my-3"> --}}
                                    @endunless
                                @empty
                                    <p>No certificates available for this service provider yet.</p>
                                @endforelse
                            </div>
                        </div>

                    </div>

                    <!-- Blog Sidebar -->
                    <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
                        <div class="card budget-widget">
                            <div class="budget-widget-details">
                                <ul class="buget-profiles">
                                    <li>
                                        <h6><i class="feather-map-pin me-2"></i>Location</h6>
                                        <h5>{{ $serviceProvider->location }}</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-mail me-2"></i>Mail</h6>
                                        <h5>{{ $serviceProvider->email }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="{{ route('request.create', $serviceProvider->id) }}"
                                    class="btn proposal-btn btn-primary">Send
                                    Send Request</a>
                            </div>
                        </div>
                        <div class="card shadow-sm rounded-3 border-0">
                            <div class="card-body">
                                <h6 class="card-title text-primary fw-semibold border-bottom pb-2 mb-3">Skills</h6>

                                <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                                    @forelse($serviceProvider->expertises as $expertise)
                                        @if (!empty($expertise->tags))
                                            @php
                                                $rawTags = explode(',', $expertise->tags);
                                                $cleanTags = array_filter(array_map('trim', $rawTags));
                                            @endphp

                                            @foreach ($cleanTags as $tag)
                                                <span class="badge bg-primary fs-6"
                                                    style="width: 150px; height: 40px; display: inline-flex; align-items: center; justify-content: center; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        @endif
                                    @empty
                                        <p class="text-muted text-center w-100">No skills listed yet.</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        @include('employer.Layouts.footer')
        <!-- /Footer -->

    </div>
    <!-- /Main Wrapper -->
    <!-- jQuery -->
