@extends('layouts.template.base-template')
 
@section('title', 'Home')
 
@section('navbar')
    @parent
 
@endsection
 
@section('content')
    <div class="container">
        <h3 class="mt-5">Cursos</h3>
        <a href="{{route('admin.courses.create')}}" class="btn btn-primary col-4 mt-3 mb-3 ">Adicionar</a>
        <div class="row">
           
                @foreach($data as $courses)
                    <div class="col-12">
                        <div class="card mb-5" >
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{asset($courses->image)}}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h6 class="card-title">{{$courses->title}}</h5>
                                        <p class="card-text">{{$courses->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <p>
                                    <b>R${{$courses->value}}</b>
                                </p>
                                <div>
                                    <a href="{{route('admin.courses.show',$courses->id)}}" class="btn btn-secondary">Detalhes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection

