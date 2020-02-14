@extends('layouts.app')

@section('title')
    Single todo {{ $todo->name }}
@endsection

@section('content')


<body>

    <div class="container">
        <h1 class="text-center my-5">
            {{ $todo->name }}
        </h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">

                    <div class="card-header">
                        Details
                    </div>
        
                    <div class="card-body">
                        {{ $todo->description }}
                    </div>

                    <a href='/todos/{{ $todo->id }}/edit' class="btn btn-info my-2">
                        Edit 
                    </a>

                    <a href='/todos/{{ $todo->id }}/delete' class="btn btn-danger my-2">
                        Delete 
                    </a>

                </div>
            </div>
        </div>

    </div>


    {{-- <div class="container">
        <div class='card'>
            <div class="card-body">
                <h5 class="card-title">{{ $todo->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $todo->completed?"Completede":"Uncompleted" }}</h6>
                <p class="card-text">{{ $todo->description }}</p>
            </div>
        </div>
    </div> --}}

    
    
@endsection