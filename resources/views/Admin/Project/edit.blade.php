@extends('layouts.app')


@section('content')
    <div class="container py-5 px-4">
      <div class="row">
        <h1 class="py-4">Modifica progetto: {{$project->title}}</h1>
      </div>
    <div class="row">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </div>
    {{-- return to project list  --}}
    <div class="col-2 ms-auto">
      <a href="{{ route('Admin.projects.index') }}" class="btn btn-outline-success ms-auto" type="submit">Torna alla lista</a>
    </div>


    {{-- form to create a new project  --}}
    <form action="{{route('Admin.projects.update', $project)}}" method="POST" class="row flex-column">
    @csrf
    @method('PUT')
      {{-- title  --}}
      <div class="col-4 my-3">
        <label for="text" class="form-label">Titolo: </label>
        <input type="text" id="title" name="title" placeholder="Titolo" class="form-control" />
      </div>
      {{-- description --}}
      <div class="col-4 my-3">
        <label for="description" class="form-label">Descrizione: </label>
        <textarea id="description" name="description" placeholder="Descrizione" class="form-control"></textarea>
      </div>
      {{-- date  --}}
      <div class="col-4 my-3">
        <label for="date" class="form-label">Data inizio: </label>
        <input type="date" id="date" name="date" placeholder="data" class="form-control" />        
      </div>

      <div class="col-4 my-3">
        <input type="submit" class="btn btn-primary" value="Modifica" /> 
      </div>


    </form>
  </div>
@endsection