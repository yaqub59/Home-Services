@extends('service.Layouts.master')

@section('title', 'Reviews')

@section('content')
<div class="col-xl-9 col-lg-8">
    <div class="dashboard-sec">
        <div class="page-title mb-4">
            <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Client Reviews</h4>
            <div class="w-50">
                <input type="text" class="form-control" placeholder="Search reviews..." id="search">
            </div>
        </div>
        @forelse ($reviews as $review)
            <div class="card border-0 shadow-sm mb-4 rounded-4">
                <div class="card-body d-flex gap-3 align-items-start">
                    {{-- Avatar --}}
                    <img src="{{ asset('images/default.png') }}"
                         class="rounded-circle border shadow-sm"
                         width="60" height="60" alt="Employer">

                    {{-- Content --}}
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-1 fw-semibold">{{ $review->reviewer->name ?? 'Unknown Employer' }}</h5>
                            <small class="text-muted">{{ $review->created_at->format('d M Y') }}</small>
                        </div>

                        <div class="mb-2">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fas fa-star{{ $i < $review->rating ? ' text-warning' : ' text-secondary' }}"></i>
                            @endfor
                            <span class="ms-2 text-muted">{{ $review->rating }}/5</span>
                        </div>

                        <p class="text-dark mb-0">{{ $review->comment }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-info text-center rounded-4 p-4">
                <i class="fas fa-info-circle me-2"></i>No reviews found yet.
            </div>
        @endforelse
    </div>
</div>
@endsection
