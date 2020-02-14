@extends('layouts.app')

@section('title')
    Create todo
@endsection

@section('content')
    
    <h1 class="text-center my-5">Create todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create new todos</div>
                
                <div class="card-body">
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/store-todos" method="POST" class="form-group">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">
                                Create todo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection