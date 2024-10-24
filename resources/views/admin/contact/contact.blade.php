@extends('layouts.backend')
@section('pagetitle')| Contact @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css'); }}" /> @endsection

@section('content')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Contact Massage</h5>

      <div style="overflow-y:scroll; height:200px;" class="p-2">
        <table class="table table-bordered border-primary">
          <thead class="bg-light sticky-top">
            <tr class="position-relative text-center">
              <th scope="col">Sl</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Massage</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $srl = 1; @endphp
            @foreach ($contact_massage as $massage)
            <tr>
              <td>{{$srl++}}</td>
              <td>{{$massage->name}}</td>
              <td>{{$massage->e_mail}}</td>
              <td>{{$massage->massage}}</td>
              <td>
                <div class="d-flex justify-content-end">
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FB4C">
                    <path d="m381-240 424-424-57-56-368 367-169-170-57 57 227 226Zm0 113L42-466l169-170 170 170 366-367 172 168-538 538Z" />
                  </svg>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
  </div>




  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <h5 class="card-title fw-semibold mb-4">Contact Info</h5>
        <a href="{{route('contact.create')}}" class="btn btn-light m-1">Add New Info</a>
      </div>

      <div class="p-2">
        <table class="table table-bordered border-primary">
          <thead class="bg-light">
            <tr class="position-relative text-center">
              <th colspan="2" scope="col">Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contact_title as $title)
            <tr>
              <td>
                {{$title->contact_info}}
              </td>
              <td>
                <div class="d-flex justify-content-end">
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FB4C">
                    <path d="m381-240 424-424-57-56-368 367-169-170-57 57 227 226Zm0 113L42-466l169-170 170 170 366-367 172 168-538 538Z" />
                  </svg>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <h5>Outlet</h5>
      <div class="p-2">
        <table class="table table-bordered border-primary">
          <thead class="bg-light">
            <tr class="position-relative text-center">
              <th scope="col"> Sl</th>
              <th scope="col"> Office Name</th>
              <th scope="col">Email</th>
              <th scope="col">Adress</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php $srl = 1; @endphp
            @foreach($contact_address as $address)
            <tr>
              <td>{{$srl++}}</td>
              <td>{{$address->name}}</td>
              <td>{{$address->e_mail}}</td>
              <td>{{$address->address}}</td>
              <td>
                <div class="d-flex justify-content-end">
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                    <path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#75FB4C">
                    <path d="m381-240 424-424-57-56-368 367-169-170-57 57 227 226Zm0 113L42-466l169-170 170 170 366-367 172 168-538 538Z" />
                  </svg>
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


@endsection