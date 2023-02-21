@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.update', $project->id )}}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
          <label class="form-label">titolo</label>
          <input  type="text" class="form-control" name="title" value="{{$project->title}}" id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">Thumb</label>
          <input type="text" class="form-control" name="thumb" value="{{ $project->title }}"  id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">Descrizione</label>
          <textarea type="text" id="" name="description" class="form-control" >{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Linguaggio</label>
          <input type="text" class="form-control" name="programming_language" value="{{  $project->programming_language }}" id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">tipo</label>
          <input type="text" class="form-control" name="type" value="{{ $project->type }}" id="" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection