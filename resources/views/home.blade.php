@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <a href="/create">create</a>
    @if ($forms != null)
        @foreach ($forms as $form)
            <p>{{$form->name}}</p>
            <p>{{$form->complaint}}</p>
            <p>{{$form->date}}</p>
        @endforeach
    @endif
</div>
@endsection
