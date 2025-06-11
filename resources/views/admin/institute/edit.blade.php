@extends('admin.Layouts.master')
@section('title')
    Edit Institute
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">

            <!-- Custom Boostrap Validation -->
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4">
                        <h5 class="card-title">Edit Institute</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.institute.update',$institute->id) }}" method="POST">
                                @csrf
                                <div class="form-row row">
                                    <div class="col-md-12 mb-3">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="{{ $institute->name }}" name="name"
                                            placeholder="Enter Name">

                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection