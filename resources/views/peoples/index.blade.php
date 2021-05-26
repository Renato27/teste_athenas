@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h3 class="card-header  text-center">
                    Administração de pessoas
                </h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-outline-primary createPerson" data-toggle="modal" data-target="#createModal">
                            <span><i class="bi bi-plus-square"></i>&nbspAdicionar</span>
                        </button>
                    </div>
                    <div class="form-group col-md-2 offset-md-4">
                        <input type="text" class="form-control " id="search" placeholder="Pesquisa">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive-sm">
                        <table  class="table table-bordered text-center">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 10px">Código</th>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                @foreach ($peoples as $people)
                                <tr>
                                    <td>{{$people->id}}</td>
                                    <td>{{$people->name}}</td>
                                    <td>{{$people->email}}</td>
                                    <td>
                                        <a href="{{route('peoples.show', $people->id)}}" class="btn btn-outline-info btn-sm">
                                            <span><i class="bi bi-box-arrow-right"></i>&nbspAcessar</span>
                                        </a>
                                        &nbsp
                                        <button class="btn btn-outline-info btn-sm editPeople" data-toggle="modal" data-target="#editModal" value="{{ $people }}">
                                            <span><i class="bi bi-pencil-square"></i>&nbspEditar</span>
                                        </button>
                                        &nbsp
                                        <button class="btn btn-outline-danger btn-sm deletePerson" data-toggle="modal" data-target="#deleteModal" value="{{ $people }}">
                                            <span><i class="bi bi-trash"></i>&nbspExcluir</span>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                {{$peoples->links()}}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection

@push('modal')
    @include('peoples.modal.edit')
    @include('peoples.modal.delete')
    @include('peoples.modal.create')
@endpush

