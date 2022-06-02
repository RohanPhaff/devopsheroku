@extends('layouts.app')

@section('content')
<form method="POST" action="/home">
    @crsf

    <label for="name">Name</label><br>
    <input type="text" id="name" placeholder="Enter Name" name="name" maxlength="150"
        required>

    <label for="complaint">Complaint</label><br>
    <input type="text" id="complaint" placeholder="Enter Complaint" name="complaint" maxlength="150"
        required>

    <label for="date">Date</label><br>
    <input type="date" id="date" placeholder="Enter Date" name="date" maxlength="150"
        required>
@endsection
