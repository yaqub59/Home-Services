@extends('employer.Layouts.master')
@section('content')
@section('title')
    Service Providers
@endsection
<div class="col-md-12 col-lg-8 col-xl-9">
    <div class="sort-tab develop-list-select">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex flex-column flex-sm-row align-items-sm-center gap-2">
                    <div class="freelance-view">
                        <h4 class="mb-0">
                            <i class="feather-users text-primary me-1"></i>
                            Found <span class="text-primary">{{ $countproviders }}</span> Results
                        </h4>
                    </div>

                    @if ($query)
                        <span class="badge bg-light text-dark border rounded-pill px-3 py-2 shadow-sm">
                            <i class="feather-filter me-1 text-primary"></i>
                            Filtered by: <strong>{{ $query }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
                <form class="d-flex" role="search" method="GET" action="{{ route('search.providers') }}">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search by Service"
                        value="{{ request('query') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

            </div>
        </div>

    </div>
    <div class="row">
        @forelse ($serviceProviders as $providers)
            <div class="col-12 col-md-6 col-xl-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3 text-end">
                            <a data-bs-toggle="modal" href="#rating" class="text-danger"><i
                                    class="feather-heart"></i></a>
                        </div>

                        {{-- Image --}}
                        @php
                            $imagePath = public_path('images/avatar/' . $providers->image);
                        @endphp
                        <div class="text-center mb-3">
                            <a href="{{ route('provider-details', $providers->id) }}">
                                @if ($providers->image && File::exists($imagePath))
                                    <img src="{{ asset('images/avatar/' . $providers->image) }}" alt="User Image"
                                        class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('assets/img/user/avatar-1.jpg') }}" alt="Default User Image"
                                        class="img-fluid rounded" style="height: 200px; object-fit: cover;">
                                @endif
                            </a>
                        </div>

                        {{-- Info --}}
                        <div class="flex-grow-1">
                            <h5 class="text-center">
                                <a href="{{ route('provider-details', $providers->id) }}"
                                    class="text-decoration-none text-dark">{{ $providers->name }}</a>
                            </h5>
                            <p class="text-muted text-center mb-1">Institutes</p>
                            <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                                @forelse ($providers->certificates as $certificate)
                                    <span class="badge bg-primary">{{ $certificate->institute }}</span>
                                @empty
                                    <span class="badge bg-secondary">Not updated</span>
                                @endforelse
                            </div>

                            {{-- Ratings --}}
                            @php
                                $rating = $providers->average_rating ?? 0;
                                $totalReviews = $providers->total_reviews ?? 0;
                            @endphp
                            <div class="d-flex justify-content-center align-items-center gap-1 mb-2">
                                <div>
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= floor($rating))
                                            <i class="fas fa-star text-warning"></i>
                                        @elseif ($i - $rating < 1)
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        @else
                                            <i class="far fa-star text-warning"></i>
                                        @endif
                                    @endfor
                                </div>
                                <small class="text-muted ms-1">
                                    <strong>{{ number_format($rating, 1) }}</strong>
                                    <span class="text-secondary">({{ $totalReviews }} reviews)</span>
                                </small>
                            </div>

                            {{-- Services --}}
                            <p class="text-muted text-center mb-1">Services</p>
                            <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                                @forelse ($providers->services as $service)
                                    <span class="badge bg-primary">{{ $service->name }}</span>
                                @empty
                                    <span class="badge bg-secondary">Not updated</span>
                                @endforelse
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-auto">
                            <a href="{{ route('request.create', $providers->id) }}"
                                class="btn btn-outline-primary w-100 mb-2">Send Request</a>
                            <a href="{{ route('provider-details', $providers->id) }}"
                                class="btn btn-primary w-100">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="p-5 text-center bg-white border rounded-4 shadow-sm">
                    <div class="mb-4">
                        <img src="{{ asset('images/empty-box.png.jpg') }}" alt="No Data" style="height: 120px;">
                    </div>
                    <h4 class="fw-bold text-dark">No Service Providers Available</h4>
                    <p class="text-muted">Looks like we couldn't match any professionals to your request.<br>Try
                        selecting another category.</p>
                    <a href="{{ route('home') }}" class="btn btn-outline-primary mt-3 rounded-pill px-4 py-2">
                        <i class="fas fa-search me-1"></i> Explore More Services
                    </a>
                </div>
            </div>
        @endforelse
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="paginations list-pagination">
                <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-left"></i></a>
                </li>
                <li class="page-item"><a href="javascript:void(0);" class="active">1</a></li>
                <li class="page-item"><a href="javascript:void(0);">2</a></li>
                <li class="page-item"><a href="javascript:void(0);">3</a></li>
                <li class="page-item"><a href="javascript:void(0);">...</a></li>
                <li class="page-item"><a href="javascript:void(0);">10</a></li>
                <li class="page-item"><a href="javascript:void(0);"><i class="feather-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>

</div>
@endsection
