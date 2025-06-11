@extends('employer.Layouts.master')
@section('title', 'Send Request')
@section('content')
    <div class="col-xl-9 col-lg-8">
        <div class="dashboard-sec">
            <div class="page-title mb-4">
                <h3>Dashboard</h3>
            </div>

            <div class="container px-0">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Send Request to
                            <strong>{{ $serviceProvider->name }}</strong>
                        </h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('request.store') }}">
                            @csrf
                            <input type="hidden" name="service_provider_id" value="{{ $serviceProvider->id }}">
                            <div class="mb-3">
                                <label for="details" class="form-label">Request Details</label>
                                <textarea name="details" id="details" rows="5" class="form-control @error('details') is-invalid @enderror"
                                    placeholder="Write something about your request...">{{ old('details') }}</textarea>
                                @error('details')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-send me-1"></i> Send Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
