@extends('admin.Layouts.master')
@section('title')
    Add Services
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">

            <!-- Custom Boostrap Validation -->
            <div class="card">
                <div class="card-body">
                    <div class="card-header pt-0 mb-4">
                        <h5 class="card-title">Add Services</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('admin.services-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row row">
                                    <div class="col-md-6 mb-3">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Your Title">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Description</label>
                                        <textarea class="form-control" id="message" name="description" rows="4" placeholder="Type your Description..."></textarea>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
