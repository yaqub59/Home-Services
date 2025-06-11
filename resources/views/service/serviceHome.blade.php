@extends('service.Layouts.master')

@section('title')
    Service Provider Dashboard
@endsection

@section('content')
<div class="col-xl-9 col-lg-8">
    <div class="dashboard-sec">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>

        <div class="row">
            {{-- Total Requests --}}
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon">
                            <i class="fas fa-envelope-open-text text-primary"></i>
                        </div>
                        <div class="dash-widget-info">Total Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $counts['total_requests'] }}</div>
                    </div>
                </div>
            </div>

            {{-- Pending Requests --}}
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-two">
                            <i class="fas fa-hourglass-half text-warning"></i>
                        </div>
                        <div class="dash-widget-info">Pending Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $counts['pending_requests'] }}</div>
                    </div>
                </div>
            </div>

            {{-- Completed Requests --}}
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-three">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div class="dash-widget-info">Completed Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $counts['accepted_requests'] }}</div>
                    </div>
                </div>
            </div>

            {{-- Total Reviews --}}
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-four">
                            <i class="fas fa-star text-info"></i>
                        </div>
                        <div class="dash-widget-info">Total Reviews</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ collect($counts['rating_counts'])->sum() }}</div>
                    </div>
                </div>
            </div>

            {{-- Star-wise Breakdown --}}
            @foreach (range(5, 1) as $star)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="dash-widget">
                        <div class="dash-info">
                            <div class="dashboard-icon">
                                <i class="fas fa-star{{ $star == 1 ? '-half-alt' : '' }} text-secondary"></i>
                            </div>
                            <div class="dash-widget-info">{{ $star }} Star Reviews</div>
                        </div>
                        <div class="dash-widget-more d-flex align-items-center justify-content-between">
                            <div class="dash-widget-count">{{ $counts['rating_counts'][$star] ?? 0 }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
