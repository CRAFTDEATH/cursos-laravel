@extends('layouts.template.base-template')

@section('title', 'Courses')

@section('navbar')
    @parent

@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($data as $courses)
                <div class="col-12">
                    <div class="card mb-5">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset($courses->image) }}" class="card-img-top" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h6 class="card-title">{{ $courses->title }}</h5>
                                        <p class="card-text">{{ $courses->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <p><b>R${{ $courses->value }}</b> </p>
                            <div>
                                <a href="{{ route('home.show', $courses->id) }}" class="btn btn-secondary">Detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
    </div>

@endsection
