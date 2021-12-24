@extends('layouts.template.base-template')
 
@section('title', 'Courses')
 
@section('navbar')
    @parent
 
@endsection
 
@section('content')
<div class="container mt-5">
     <div class="row">
             <div class="col-12">
                 <div class="card mb-5">
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
                         <p><b>R${{$data->value}}</b> </p>
                     </div>
                 </div>
             </div>
        </div>
 </div>

@endsection