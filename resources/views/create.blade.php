@extends('layouts.app')

@section('content')
<form method="POST" action="/home">
    @csrf

    <input type="text" id="name" placeholder="Enter Name" name="name" maxlength="150"
        required>

    <input type="text" id="complaint" placeholder="Enter Complaint" name="complaint" maxlength="150"
        required>

    <input type="date" id="date" placeholder="Enter Date" name="date" maxlength="150"
        required>

    <input type="submit" value="submit">
</form>
@endsection
