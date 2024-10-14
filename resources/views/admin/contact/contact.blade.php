@extends('layouts.backend')
@section('pagetitle')| Contact @endsection
@section('page_css')<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css'); }}" /> @endsection

@section('content')

  <div class="container-fluid">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Contact Massage</h5>
          <p class="mb-0">This is a sample page </p>



        </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h5 class="card-title fw-semibold mb-4">Contact Info</h5>
          <a href="{{route('contact.create')}}" class="btn btn-light m-1">Add New Info</a>
        </div>
          <p class="mb-0">This is a sample page </p>



      </div>
    </div>



  </div>


@endsection