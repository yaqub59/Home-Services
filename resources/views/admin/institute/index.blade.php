@extends('admin.Layouts.master')
@section('title')
    Institute
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4 d-flex align-items-center">
                        <h4 class="card-title mb-0">Institute</h4>
                        <a href="{{ route('admin.institute-create') }}" class="btn btn-sm btn-primary ms-auto">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="datatable table table-striped" id="Table">
                            <thead>
                                <tr>
                                    <th>Name</th>
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
                ajax: '{{ route('admin.institute') }}',
              columns: [
            {
                data: 'name',
                name: 'name'
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
