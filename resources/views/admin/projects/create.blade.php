@extends('layouts.admin')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>
                  {{ $error }}
                </li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="mb-3">
          <label class="form-label">titolo</label>
          <input  type="text" class="form-control" name="title" value="{{ old('title') }}" id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">Thumb</label>
          <input type="text" class="form-control" name="thumb" value="{{ old('thumb') }}"  id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">Descrizione</label>
          <textarea type="text" id="" name="description" value="{{ old('description') }}" class="form-control" ></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Linguaggio</label>
          <input type="text" class="form-control" name="programming_language" value="{{ old('programming_language') }}" id="" >
        </div>

        <div class="mb-3">
          <label class="form-label">tipo</label>
          <input type="text" class="form-control" name="type" value="{{ old('type') }}" id="" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection