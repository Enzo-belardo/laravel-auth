@extends('layouts.app')
@section('content')


<div class="container">
    <div class="text-center mb-3 text-danger">
        <h1>I miei progetti</h1>
    </div>
    <div class="d-flex justify-content-between flex-wrap ">
        @foreach($projects as $project)
        <div class="card mb-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$project->title}}</h5>
              <p class="card-text">{{$project->programming_language}}</p>
              <a href=" {{ route ( 'admin.projects.show' , $project->id ) }}" class="btn btn-primary">visualizza il progetto</a>
           </div>
       </div>
       @endforeach
    </div>
</div>
@endsection