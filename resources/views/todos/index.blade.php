@extends('layouts.app')

@section('title')
    Todos list
@endsection

@section('content')

{{-- <div class="jumbotron">
            <h1 class="display-4 text-center my-5">Todos Page</h1>
        </div> --}}

        <h1 class="text-center my-5">Todos Page</h1>

        {{-- <hr class="my-4"> --}}
        

        {{-- <ul class="text-center my-5">
            @foreach ($todos as $todo)
                <li class="list-group-item"> 
                    {{ $todo->name }}
                </li>
            @endforeach
        </ul> --}}

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card card-default">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="text my-5">
                            @foreach ($todos as $todo)
                                
                                <li class="list-group-item"> 
                                    {{ $todo->name }}
                                    
                                    @if (!$todo->completed)
                                        <a href="/todos/{{ $todo->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
                                    @endif
                                    <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>

                                </li>

                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

        </div>


        {{-- @foreach ($todos as $todo)
            <div class='card'>
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $todo->completed?"Completede":"Uncompleted" }}</h6>
                    <p class="card-text">{{ $todo->description }}</p>
                </div>
            </div>
            <br>
        @endforeach --}}
    
@endsection