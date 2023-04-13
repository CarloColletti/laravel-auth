@extends('layouts.app')

@section('title')
    List-Projects
@endsection

@section('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="container py-5">

      {{-- search bar  --}}
      <div class="row py-4">
        <div class="col-8">
          <form class="d-flex">
            <input class="form-control me-2" type="text" name="term" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>

        <div class="col-4">
          <div class="d-flex">
            <a href="{{ route('Admin.projects.create') }}" class="btn btn-outline-success ms-auto" type="submit">Nuovo Progetto</a>
          </div>
        </div>

      </div>


      {{-- table show all projects  --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data creazione</th>
            <th scope="col">Funzioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
            <tr>
              <th scope="row">{{$project->id}}</th>
              <td>{{$project->title}}</td>
              <td>{{$project->date}}</td>
              {{-- button function --}}
              <td>
                <a href="{{route('Admin.projects.show',['project' => $project])}}" class="px-2">
                  <i class="bi bi-card-list"></i>
                </a>
                <a href="{{route('Admin.projects.edit',['project' => $project])}}" class="px-2">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <button type="button" class="btn bi bi-trash" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$project->id}}"></button>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
      {{-- end table  --}}


      {{-- pagination  --}}
      {{$projects->links()}}
    </div>
@endsection