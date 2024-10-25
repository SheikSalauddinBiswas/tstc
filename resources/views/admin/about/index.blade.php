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
            <br>
            <table class="table table-bordered border-dark">
                <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answer</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $srl=1; @endphp
                    @foreach ($about as $data)
                    <tr>
                        <th scope="row">{{$srl++}}</th>
                        <td>{{$data->question}}</td>
                        <td>{{$data->answer}}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <span>
                                    <h4><a href=""><i class="ti ti-eye me-1"></a></i></h4>
                                </span>
                                <span>
                                    <h4><a href=""><i class="ti ti-trash ms-1"></i></a></h4>
                                </span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>


@endsection