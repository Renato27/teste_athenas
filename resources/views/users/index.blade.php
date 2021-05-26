@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header  text-center">
                    Lista de usuários
                </h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-sm">
                        <table  class="table table-bordered text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 10px">Código</th>
                                    <th>E-mail</th>
                                    <th>Pessoa</th>
                                    <th>Categoria</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->people->name}}</td>
                                    <td>{{$user->people->category->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                {{$users->links()}}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
