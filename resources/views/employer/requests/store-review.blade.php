@extends('employer.Layouts.master')
@section('title', 'Write a Review')
@section('content')

    <div class="col-xl-9 col-lg-8">
        <div class="dashboard-sec">
            <div class="page-title mb-4">
                <h3 class="text-dark">Dashboard</h3>
            </div>

            <div class="container px-0">
                <div class="card border-0 shadow rounded-4">
                    <div class="card-header bg-gradient bg-primary text-white rounded-top-4 py-3 px-4">
                        <h5 class="mb-0 d-flex align-items-center">
                            <i class="fas fa-pen-fancy me-2 fs-5"></i>
                            Write a Review for <span class="fw-bold ms-1">{{ $request->serviceProvider->name }}</span>
                        </h5>
                    </div>

                    <div class="card-body px-4 py-4 bg-light rounded-bottom-4">
                        <form method="POST" action="{{ route('reviews-submit') }}">
                            @csrf
                            <input type="hidden" name="reviewee_id" value="{{ $request->serviceProvider->id }}">
                                <input type="hidden" name="request_id" value="{{ $request->id }}">

                            <div class="mb-4">
                                <label class="form-label fw-semibold text-dark">Rating</label>
                                <select name="rating" class="form-select shadow-sm">
                                    <option value="" disabled selected>Select Rating</option>
                                    @for ($i = 5; $i >= 1; $i--)
                                        <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold text-dark">Your Review</label>
                                <textarea name="comment" rows="5" class="form-control shadow-sm" placeholder="Share your experience..."></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                                    <i class="fas fa-paper-plane me-2"></i> Submit Review
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
