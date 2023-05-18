@extends('layouts.admin.main')

@section('title')
    {{-- Moti DashBoard {{ $title }} --}}
@endsection

@push('css')
@endpush
@section('content')
    <div class="page-header">
        <h3 class="page-title">Categories Create Form</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Create Form </li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Categories form</h4>
                    <p class="card-description">Create</p>
                    <form class="forms-sample" action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Categories Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Your Categories Name">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control" value="" id="slug"
                                placeholder="Slug Auto Fill">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="status"
                                                value="1" checked=""> Active <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="status" id="status"
                                                value="0"> Inactive <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $(document).on('keyup', '#name', function() {
                    var name = $(this).val();
                    var slug = name.toLowerCase().trim().replace(/ /g, '-');
                    $("#slug").val(slug);
                });
            });
        </script>
    @endpush
@endsection
