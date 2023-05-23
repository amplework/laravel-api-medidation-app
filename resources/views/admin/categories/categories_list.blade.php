@extends('layouts.admin.main')
@section('title')
    Categories List
@endsection
@push('css')
@endpush
@section('content')
    <div class="page-header">
        <h3 class="page-title">Category-List</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page"> List </li>
            </ol>
        </nav>
    </div>
    <div class="page-header">
        <a href=""></a>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-sm ml-3 btn-success">Create Categories </a>
    </div>
    <div class="row">
        <div class="col-md grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category List</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $cat)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>{{ $cat->slug }}</td>
                                        <td>
                                            @if ($cat->status === 1)
                                                <label class="badge badge-success">Active</label>
                                            @else
                                                <label class="badge badge-danger">InActive</label>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    id="dropdownMenuIconButton2" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton2">
                                                    <a class="dropdown-item text-success"
                                                        href="{{ route('admin.categories.edit', $cat->id) }}">Edit</a>
                                                    <a class="dropdown-item text-danger" href="{{ route('admin.categories.destroy',$cat->id) }}">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script></script>
    @endpush
@endsection
