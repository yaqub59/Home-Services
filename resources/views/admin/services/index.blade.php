@extends('admin.Layouts.master')
@section('title')
    Services
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4 d-flex align-items-center">
                        <h4 class="card-title mb-0">Services</h4>
                        <a href="{{ route('admin.services-create') }}" class="btn btn-sm btn-primary ms-auto">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="datatable table table-striped" id="Table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            if ($.fn.DataTable.isDataTable('#Table')) {
                $('#Table').DataTable().destroy();
            }
            $('#Table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.services') }}',
              columns: [
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'name',
                name: 'name'
            },
             {
                data: 'description',
                name: 'description'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
            });
        });
    </script>
@endsection
