@extends('layouts.app')

@section('content')
    <h3>Fill student information</h3>
    <form action="{{route('createStudent')}}" class="form-group" method="post">
        {{csrf_field()}}
        <label for="">Name</label><br>
        <input type="text" name="name" class="form-control"><br>

        <label for="">Email</label><br>
        <input type="text" name="email" class="form-control"><br>

        <label for="">ID</label><br>
        <input type="text" name="id" class="form-control"><br>

        <label for="">date of birth</label><br>
        <input type="date" name="dob" class="form-control"><br>

        <label for="">Phone</label><br>
        <input type="text" name="phone" class="form-control"><br>
        

        <input type="submit" name="Add" class="btn btn-primary">

    </form>
 @endsection
