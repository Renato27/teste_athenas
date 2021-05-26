@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header  text-center">
                    Dados de {{$people->name}}
                </h3>
            <div class="card-body">
                @if (\Auth::user()->people->category_id != 3)
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('peoples.index')}}" class="btn btn-outline-info">
                                <span><i class="bi bi-arrow-left-square"></i></i>&nbspVoltar</span>
                            </a>
                        </div>
                    </div>
                @endif
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nome">Nome</label>
                                <input disabled type="text" class="form-control" id="nome" value="{{$people->name}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input disabled type="email" class="form-control" id="email" value="{{$people->email}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">Categoria</label>
                                <input disabled type="text" class="form-control" id="city" value="{{$people->category->name}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

@endsection

