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
                    
                 </tbody>
             </table>
         </div>
         <!-- /Table -->

     </div>
 </div>
@endsection
