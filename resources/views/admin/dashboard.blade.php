@extends('layouts.admin.main')

@section('title')
    {{-- Moti DashBoard {{ $title }} --}}
@endsection

@push('css')
@endpush
@section('content')
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Hi, Admin <span class="pl-0 h6 pl-sm-2
        text-muted d-inline-block">Your web
                analytics dashboard
                template.</span>
        </h3>
       
    </div>

    @push('scripts')
    @endpush
@endsection
