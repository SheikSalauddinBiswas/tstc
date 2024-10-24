@extends('layouts.backend')
@section('pagetitle')| About @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css')}}" /> @endsection

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">About Welcome section</h5>
                <a href="{{route('about.create')}}" class="btn btn-light m-1">Add New Info</a>
            </div>


        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">About Question section</h5>
                <a href="{{route('about.create_question')}}" class="btn btn-light m-1">Add New Info</a>
            </div>



        </div>
    </div>
</div>


@endsection