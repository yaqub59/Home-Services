@extends('admin.Layouts.master')
@section('content')
@section('title')
    Dashbord
@endsection
<div class="row">
    <div class="col-md-8">
        <!-- Dashboard Stats -->
        <div class="row">

            <!-- Total Users -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Total Users</p>
                        <h5>{{ $totalUsers }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-users"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Service Providers -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Service Providers</p>
                        <h5>{{ $totalProviders }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-user-cog"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Service Requests -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Service Requests</p>
                        <h5>{{ $totalRequests }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-clipboard-list"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Completed Requests -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Completed Services</p>
                        <h5>{{ $completedRequests }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-check-circle"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Pending Requests -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Pending Requests</p>
                        <h5>{{ $pendingRequests }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-clock"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Total Reviews -->
            <div class="col-md-4 d-flex">
                <div class="card wizard-card flex-fill">
                    <div class="card-body">
                        <p class="text-primary mt-0 mb-2">Total Reviews</p>
                        <h5>{{ $totalReviews }}</h5>
                        <p><a href="#">view details</a></p>
                        <span class="dash-widget-icon bg-1">
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="col-md-4 d-flex">
        <div class="card w-100 shadow-sm rounded">
            <div class="card-body pt-0">
                <div class="card-header border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="mb-1 text-muted">Welcome back,</p>
                            <h6 class="text-primary mb-0">{{ auth()->user()->name ?? 'Admin' }}</h6>
                            <small class="text-muted">{{ auth()->user()->role ?? 'Super Admin' }}</small>
                        </div>
                        <div class="text-end">
                            <div class="welcome-dash-icon bg-1 rounded-circle p-2">
                                <i class="fas fa-user fa-lg text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <p class="text-muted mb-1">Member Since</p>
                    <p class="text-dark small">{{ auth()->user()->created_at->format('F j, Y') }}</p>
                </div>

                <div class="mt-4">
                    <p class="text-muted mb-1">Today</p>
                    <p class="text-dark small">{{ now()->format('l, F j, Y') }}</p>
                </div>
                <div class="mt-4">
                    <p class="text-muted mb-1">Email</p>
                    <p class="text-dark small">{{ auth()->user()->email }}</p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); 
                     document.getElementById('logout-form').submit();"
                        class="btn btn-sm btn-outline-danger w-100">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf </form>
                </div>
            </div>
        </div>
    </div>


@endsection
