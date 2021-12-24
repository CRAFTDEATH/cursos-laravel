@extends('layouts.template.base-template')
 
@section('title', 'Courses')
 
@section('navbar')
    @parent
 
@endsection
 
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-header"> <h5 class="card-title">Adicionar Cursos</h5></div>
                <div class="card-body">
                    <form action="{{route('admin.courses.update',$data->id)}}" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                        @csrf
                        @method('PUT')
                        @include('forms.courses.courses-form')
                        <button class="btn btn-primary mt-3" type="submit">Publicar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection

