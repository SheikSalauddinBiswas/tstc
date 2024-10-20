@extends('layouts.backend')
@section('pagetitle')| My Profile @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css'); }}" /> @endsection
@section('content')

<div class="container-fluid">
    <div class="col-md-12 d-flex justify-content-around">
        <!-- this is left side card section add card here -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">My Profile left side</h5>

                </div>
            </div>



        </div>




        <!-- this is right side card section add card here for right side section -->
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">My Profile right side</h5>
                </div>
            </div>



        </div>
    </div>
</div>


@endsection