 @extends('service.Layouts.master')
 @section('content')
 @section('title')
     Dashbord
 @endsection

 <div class="col-xl-9 col-lg-8">
     <div class="dashboard-sec">
         <div class="page-title">
             <h3>Dashboard</h3>
         </div>
         <div class="table-top-section">
             <div class="table-header">
                 <h5 class="mb-0">Requests</h5>
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
                         <th>Employer Name</th>
                         <th>Details</th>
                         <th>Status</th>
                         <th>Date</th>
                     </tr>
                 </thead>
                 <tbody>
                     @forelse ($requests as $request)
                         <tr>
                             <td>{{ $request->employer->name }}</td>
                             <td>{{ $request->details }}</td>
                             <td>
                                 @if ($request->status == 'pending')
                                     <a href="{{ route('service.updateStatus', ['id' => $request->id, 'status' => 'accepted']) }}"
                                         class="badge bg-warning text-dark d-inline-flex align-items-center px-2 py-1 rounded-pill">
                                         <i class="fas fa-clock me-1"></i> Pending
                                     </a>
                                 @elseif ($request->status == 'accepted')
                                     <a href="javascript:void(0)"
                                         class="badge bg-primary text-light d-inline-flex align-items-center px-2 py-1 rounded-pill">
                                         <i class="fas fa-check-circle me-1"></i> Accepted
                                     </a>
                                 @endif
                             </td>

                             <td>{{ $request->created_at->format('d M Y') }}</td>
                         </tr>
                     @empty
                         <tr>
                             <td colspan="4" class="text-center">No requests found.</td>
                         </tr>
                     @endforelse

                 </tbody>
             </table>
         </div>
         <!-- /Table -->

     </div>
 </div>
@endsection
