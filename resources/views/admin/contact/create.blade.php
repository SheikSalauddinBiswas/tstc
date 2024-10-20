@extends('layouts.backend')
@section('pagetitle')| Contact | Create Info @endsection
@section('page_css')<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css'); }}" /> @endsection

@section('content')

  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h5 class="card-title fw-semibold mb-4">Add New Contact Info</h5>
        </div>
          
            <h2>Info</h2>
            <form action="">
                <div class="d-flex">
                    <div class="col-md-7 p-2">
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-3 p-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>



        <h2>outlet</h2>

        <form>
            <div class="col-md-6 d-flex p-3">
              <label for="validationDefault03" class="form-label col-md-2"><h5>City  </h5></label>
              <input type="text" class="form-control" id="validationDefault03" required>
            </div>
            
            <div class="col-md-6 d-flex p-2">
                <label for="validationDefault03" class="form-label col-md-2"><h5>Address </h5></label>
                <input type="text" class="form-control" id="validationDefault03" required>
              </div>
              
            <div class="col-md-6 d-flex p-2">
                <label for="validationDefault03" class="form-label col-md-2"> <h5>Email</h5></label>
                <input type="text" class="form-control" id="validationDefault03" required>
              </div>

            <div class="col-md-6 d-flex p-2">
              <label for="validationDefault05" class="form-label col-md-2"> <h5>Mobile</h5></label>
              <input type="text" class="form-control" id="validationDefault05" required>
            </div>

            <div class="col-12 p-5">
              <button class="btn btn-primary" type="submit">Add New</button>
            </div>
          </form>


      </div>
    </div>



  </div>


@endsection