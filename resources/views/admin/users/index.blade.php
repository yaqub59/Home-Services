@extends('admin.Layouts.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4 d-flex align-items-center">
                        <h4 class="card-title mb-0">Users</h4>
                        <a href="{{ route('admin.users-create') }}" class="btn btn-sm btn-primary ms-auto">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="datatable table table-striped" id="Table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>CNIC</th>
                                    <th>Type</th>
                                    <th>Status</th>
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
                ajax: '{{ route('admin.users') }}',
                columns: [{
                        data: 'image',
                        name: 'image',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone_no',
                        name: 'phone_no',
                        render: function(data) {
                            return data ? data :
                                '<span class="badge bg-secondary">Not Provided</span>';
                        }
                    },
                    {
                        data: 'cnic',
                        name: 'cnic',
                        render: function(data) {
                            return data ? data :
                                '<span class="badge bg-secondary">Not Provided</span>';
                        }
                    },
                    {
                        data: 'type',
                        name: 'type',
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $(document).on('click', '.toggle-status', function() {
                var url = $(this).data('url');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            iziToast.success({
                                title: 'Success',
                                message: response.message,
                                position: 'topRight'
                            });

                            $('#Table').DataTable().ajax.reload(null, false);
                        }
                    },
                    error: function() {
                        alert('Something went wrong. Please try again.');
                    }
                });
            });

        });
    </script>
@endsection
