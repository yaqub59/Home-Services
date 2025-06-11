 @extends('employer.Layouts.master')
 @section('content')
 @section('title')
     Reviews
 @endsection


 <div class="col-xl-9 col-lg-8">
     <div class="dashboard-sec">
         <div class="page-title">
             <h3>Dashboard</h3>
         </div>
         <div class="table-top-section">
             <div class="table-header">
                 <h5 class="mb-0">Reviews</h5>
             </div>
             <div class="table-options">
                 <div class="data-search-input">
                     <input type="text" class="form-control" placeholder="Search here" name="search" id="search">
                 </div>
             </div>
         </div>
         <div class="table-responsive">
             <table class="table">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Service Provider</th>
                         <th>Status</th>
                         <th>Description</th>
                         <th>Requested At</th>

                     </tr>
                 </thead>
                 <tbody>
                     @forelse($requests as $request)
                         <tr>
                             <td>{{ $loop->iteration }}</td>
                             <td>{{ $request->serviceProvider->name }}</td>
                             <td>
                                 @if ($request->status === 'pending')
                                     <span
                                         class="badge bg-warning text-dark d-inline-flex align-items-center px-2 py-1 rounded-pill">
                                         <i class="fas fa-clock me-1"></i> Pending
                                     </span>
                                 @elseif ($request->status === 'accepted')
                                     @if (!$request->review)
                                         <a href="{{ route('store-reviews', $request->id) }}"
                                             class="btn btn-xs btn-outline-primary d-inline-flex align-items-center px-2 py-0 small rounded-pill"
                                             title="Write your review" style="font-size: 0.75rem; line-height: 1.2;">
                                             <i class="fas fa-pen me-1" style="font-size: 0.75rem;"></i> Review
                                         </a>
                                     @else
                                         <span
                                             class="badge bg-success d-inline-flex align-items-center px-2 py-1 rounded-pill mb-1">
                                             <i class="fas fa-check-circle me-1"></i> Reviewed
                                         </span>
                                         <br>
                                         {{-- ⭐ Rating Stars --}}
                                         @for ($i = 1; $i <= 5; $i++)
                                             @if ($i <= $request->review->rating)
                                                 <i class="fas fa-star text-warning small"></i>
                                             @else
                                                 <i class="far fa-star text-muted small"></i>
                                             @endif
                                         @endfor
                                     @endif
                                 @elseif ($request->status === 'rejected')
                                     <span
                                         class="badge bg-danger d-inline-flex align-items-center px-2 py-1 rounded-pill">
                                         <i class="fas fa-times-circle me-1"></i> Rejected
                                     </span>
                                 @endif
                             </td>

                             <td>{{ $request->details }}</td>
                             <td>{{ $request->created_at->format('h:i A - d M Y') }}</td>
                         </tr>
                     @empty
                         <tr>
                             <td colspan="4">No requests found.</td>
                         </tr>
                     @endforelse
                 </tbody>
             </table>
         </div>
         <!-- /Table -->

     </div>
 </div>
@endsection
