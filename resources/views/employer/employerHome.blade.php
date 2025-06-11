@extends('employer.Layouts.master')
@section('content')
@section('title')
    Employer Dashbord
@endsection

<div class="col-xl-9 col-lg-8">
    <div class="dashboard-sec">
        <div class="page-title">
            <h3>Dashboard</h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon">
                            <i class="fas fa-tasks text-primary"></i>
                        </div>
                        <div class="dash-widget-info">Total Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $totalRequests }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-two">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <div class="dash-widget-info">Pending Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $pendingRequests }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-three">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="dash-widget-info">Accepted Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $completedRequests }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                    <div class="dash-info">
                        <div class="dashboard-icon dashboard-icon-four">
                            <i class="fas fa-trash-alt"></i>
                        </div>
                        <div class="dash-widget-info">Cancelled Requests</div>
                    </div>
                    <div class="dash-widget-more d-flex align-items-center justify-content-between">
                        <div class="dash-widget-count">{{ $cancelledRequests }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
