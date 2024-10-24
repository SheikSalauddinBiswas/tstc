@extends('layouts.backend')
@section('pagetitle')| Contact | Create Info @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css'); }}" /> @endsection

@section('content')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <h5 class="card-title fw-semibold mb-4">Add New Contact Info</h5>
      </div>

      <h2>Info</h2>
      <form action="{{route('contact.store')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
          <div class="col-md-7 p-2">
            <input type="text" name="contact_info" class="form-control">
          </div>
          <div class="col-md-3 p-2">
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
        </div>




        <h2>outlet</h2>


        <div class="col-md-6 d-flex p-3">
          <label for="validationDefault03" class="form-label col-md-2">
            <h5>Name </h5>
          </label>
          <input type="text" name="name" class="form-control" id="validationDefault03">
        </div>

        <div class="col-md-6 d-flex p-2">
          <label for="validationDefault03" class="form-label col-md-2">
            <h5>Address </h5>
          </label>
          <input type="text" name="address" class="form-control" id="validationDefault03">
        </div>

        <div class="col-md-6 d-flex p-2">
          <label for="validationDefault03" class="form-label col-md-2">
            <h5>Email</h5>
          </label>
          <input type="text" name="e-mail" class="form-control" id="validationDefault03">
        </div>

        <div class="col-md-6 d-flex p-2">
          <label for="validationDefault05" class="form-label col-md-2">
            <h5>Mobile</h5>
          </label>
          <input type="text" name="mobile" class="form-control" id="validationDefault05">
        </div>

        <div class="col-12 p-5">
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>


    </div>
  </div>



</div>


@endsection