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
                <div class="col-12">
                    <div class="card mb-5" >
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset($data->image)}}" class="card-img-top" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h6 class="card-title">{{$data->title}}</h5>
                                    <p class="card-text">{{$data->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <p><b>R${{$data->value}}</b></p>
                                    <div>
                                        <a href="{{route('admin.courses.edit',$data->id)}}" class="btn btn-secondary">Editar</a>
                                        <form class="d-inline-block" action="{{route('admin.courses.destroy',$data->id)}}" method="POST" enctype="application/x-www-form-urlencoded" accept-charset="utf-8">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-danger">Excluir</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    @endsection

