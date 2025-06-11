<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Summernote CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote-lite.css') }}">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

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
                                        <i class="feather-map-pin"></i>Pakistan
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
                            <h4 class="company-detail-title">Description</h4>

                            @if ($serviceProvider->services->isNotEmpty())
                                @php
                                    $firstService = $serviceProvider->services->first();
                                @endphp

                                @if ($firstService->name && $firstService->description)
                                    <p><strong>Service:</strong> {{ $firstService->name }}</p>
                                    <p>{{ $firstService->description }}</p>
                                @elseif($firstService->description)
                                    <p>{{ $firstService->description }}</p>
                                @else
                                    <p>No professional description available for this service provider yet.</p>
                                @endif
                            @else
                                <p>No professional description available for this service provider yet.</p>
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
                                            <img src="{{ asset('assets/img/icon/report.png') }}"
                                                alt="Certificate Icon">
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
                                        <h5>Pakistan</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-mail me-2"></i>Mail</h6>
                                        <h5>{{ $serviceProvider->email }}</h5>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="{{ route('request.create', $serviceProvider->id) }}" class="btn proposal-btn btn-primary">Send
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

    <!-- The Modal -->
    <div class="modal fade custom-modal" id="hire">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-modal">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center pt-0 mb-4">
                        <img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
                        <h5 class="modal-title">Discuss your project with David</h5>
                    </div>
                    <form action="dashboard.html">
                        <div class="modal-info">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="input-block">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="First name & Lastname">
                                    </div>
                                    <div class="input-block">
                                        <input type="email" name="name" class="form-control"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="input-block">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="input-block">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <div class="input-block row">
                                        <div class="col-12 col-md-4 pr-0">
                                            <label class="file-upload">
                                                Add Attachment <input type="file">
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                            <p>Max file size: 50 MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-center">
                            <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->

    <!-- The Modal -->
    <div class="modal fade" id="file">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Your Proposal</h4>
                    <span class="modal-close"><a href="javascript:void(0);" data-bs-dismiss="modal"
                            aria-label="Close"><i class="fa fa-times orange-text"></i></a></span>
                </div>
                <div class="modal-body">
                    <div class="modal-info proposal-modal-info">
                        <form action="freelancer-project-proposals.html">
                            <div class="feedback-form proposal-form ">
                                <div class="row">
                                    <div class="col-md-6 input-block">
                                        <label class="form-label">Your Price</label>
                                        <input type="text" class="form-control" placeholder="Your Price">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Estimated Delivery</label>
                                        <div class="input-group ">
                                            <input type="text" class="form-control" placeholder="Estimated Hours"
                                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">Days</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 input-block">
                                        <label class="form-label">Cover Letter</label>
                                        <textarea class="form-control summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="suggested-milestones-form">
                                <div class="row">
                                    <div class="col-md-4 input-block">
                                        <label class="form-label">Milestone name</label>
                                        <input type="text" class="form-control" placeholder="Milestone name">
                                    </div>
                                    <div class="col-md-2 input-block floating-icon">
                                        <label class="form-label">Amount</label>
                                        <input type="text" class="form-control" placeholder="Amount">
                                        <span><i class="feather-dollar-sign"></i></span>
                                    </div>
                                    <div class="col-md-3 input-block floating-icon">
                                        <label class="form-label">Start Date</label>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="Choose">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                    <div class="col-md-3 input-block floating-icon">
                                        <label class="form-label">End Date</label>
                                        <input type="text" class="form-control datetimepicker"
                                            placeholder="Choose">
                                        <span><i class="feather-calendar"></i></span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="new-addd">
                                            <a id="new_add1" class="add-new" href="javascript:void(0);"><i
                                                    class="feather-plus-circle "></i> Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="add_row1"></div>
                            </div>
                            <div class="proposal-features">
                                <div class="proposal-widget proposal-warning">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time" checked><span
                                            class="checkmark"></span>
                                        <span class="proposal-text">Stick this Proposal to the Top</span>
                                        <span class="proposal-text float-end">$12.00</span>
                                    </label>
                                    <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                                </div>
                                <div class="proposal-widget proposal-blue">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time"><span class="checkmark"></span>
                                        <span class="proposal-text">Stick this Proposal to the Top</span>
                                        <span class="proposal-text float-end">$12.00</span>
                                    </label>
                                    <p>The sticky proposal will always be displayed on top of all the proposals.</p>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 submit-section">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_time">
                                        <span class="checkmark"></span> I agree to the Terms And Conditions
                                    </label>
                                </div>
                                <div class="col-md-12 submit-section text-end">
                                    <a data-bs-dismiss="modal" href="javascript:void(0);"
                                        class="btn btn-cancel submit-btn">Cancel</a>
                                    <a data-bs-toggle="modal" data-bs-dismiss="modal" href="#success"
                                        class="btn btn-primary submit-btn">Send Proposal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->

    <!-- The Modal -->
    <div class="modal fade custom-modal" id="success">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content proposal-modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center modal-body-content pt-0">
                        <h5 class="modal-title">Submitted Successfully</h5>
                        <p>You will be Notified once, your Proposal approves.</p>
                    </div>
                    <div class="col-md-12 submit-section text-center">
                        <a data-bs-dismiss="modal" href="freelancer-dashboard.html"
                            class="btn btn-primary submit-btn">Go to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Summernote JS -->
    <script src="{{ asset('assets/plugins/summernote/dist/summernote-lite.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
