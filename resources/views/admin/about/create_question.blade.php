@extends('layouts.backend')
@section('pagetitle')| About | Create Question @endsection
@section('page_css')
<link rel="stylesheet" href="{{ asset('public/admin/css/styles.min.css')}}" /> @endsection

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-semibold mb-4">Add New About Question</h5>
            </div>
            <form action="{{route('about.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 d-flex p-3">
                    <label for="validationDefault03" class="form-label col-md-2">
                        <h5>Question </h5>
                    </label>
                    <input type="text" name="question" class="form-control" id="validationDefault03">
                </div>

                <div class="col-md-6 d-flex p-2">
                    <label for="validationDefault03" class="form-label col-md-2">
                        <h5>Question Answer </h5>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="answer" rows="3"></textarea>
                </div>

                <input type="text" name="slug" hidden value="question">

                <div class="col-12 p-5">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>




        </div>
    </div>



</div>


@endsection