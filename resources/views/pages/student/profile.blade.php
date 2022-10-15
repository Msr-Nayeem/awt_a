@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4 style = "text-transform:capitalize;">{{$student->name}}</h4>
                      <h6 class="text-secondary" style = "text-transform:capitalize;">Role: {{$student->utype}}</h6>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name :</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                    <h6 class="mb-0" style = "text-transform:capitalize;">{{$student->name}}</h6>
                    </div>

                    <div class="col-sm-3">
                      <h6 class="mb-0">Student ID :</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      <h6 class="mb-0">{{$student->student_id}}</h6>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                     <div class="col-sm-3">
                      <h6 class="mb-0">Email :</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                    <h6 class="mb-0"><u>{{$student->email}}</u></h6>
                    </div>

                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone :</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                      <h6 class="mb-0">+880{{$student->phone}}</h6>
                    </div>

                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                    {{$student->address}}
                    </div>
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-3 text-secondary">
                    {{$student->dob}}
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " href="">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

 
@endsection