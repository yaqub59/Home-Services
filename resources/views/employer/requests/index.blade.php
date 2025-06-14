@extends('employer.Layouts.master')
@section('content')
@section('title')
    Service Providers
@endsection

<div class="col-md-12 col-lg-8 col-xl-9">
    <div class="sort-tab develop-list-select">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="d-flex align-items-center">
                    <div class="freelance-view">
                        <h4>Found {{ $countproviders }} Results</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
                <form class="d-flex" role="search" method="GET" action="{{ route('search.providers') }}">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search by Expertise"
                        value="{{ request('query') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

            </div>
        </div>

    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
        @forelse ($serviceProviders as $providers)
            <div class="col">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <div class="mb-3 text-end">
                            <a data-bs-toggle="modal" href="#rating" class="text-danger"><i
                                    class="feather-heart"></i></a>
                        </div>
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
                        <div class="flex-grow-1">
                            <h5 class="text-center">
                                <a href="{{ route('provider-details', $providers->id) }}"
                                    class="text-decoration-none text-dark">{{ $providers->name }}</a>
                            </h5>
                            <p class="text-muted text-center mb-1">Institutes</p>
                            <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                                @if ($providers->certificates->isNotEmpty())
                                    @foreach ($providers->certificates as $certificate)
                                        <span class="badge bg-primary">{{ $certificate->institute }}</span>
                                    @endforeach
                                @else
                                    <span class="badge bg-secondary">Not updated</span>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center align-items-center mb-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star{{ $i <= 4 ? ' filled text-warning' : '' }}"></i>
                                @endfor
                                <span class="ms-2 text-muted">4.7 (32)</span>
                            </div>
                            <p class="text-muted text-center mb-1">Expertise</p>
                            <div class="d-flex flex-wrap justify-content-center gap-1 mb-3">
                                @if ($providers->expertises->isNotEmpty())
                                    @foreach ($providers->expertises as $expertise)
                                        <span class="badge bg-primary">{{ $expertise->tags }}</span>
                                    @endforeach
                                @else
                                    <span class="badge bg-secondary">Not updated</span>
                                @endif
                            </div>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('request.create', $providers->id) }}"
                                class="btn btn-outline-primary w-100 mb-2">Send Request</a>
                            <a href="{{ route('provider-details', $providers->id) }}"
                                class="btn btn-primary w-100">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    No service providers found.
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
