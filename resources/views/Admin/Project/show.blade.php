@extends('layouts.app')

@section('title')
    Detail project
@endsection

@section('content')
    <div class="container py-5">
      <div class="row">
        <div class="col-2">
          <img src="{{$project->image}}" alt="{{$project->title}}" class="img-fluid">
        </div>
        {{-- detail prject  --}}
        <div class="col-8 px-3">
          <ul>
            <li>{{$project->title}}</li>
            <li>{{$project->description}}</li>
            <li>{{$project->date}}</li>
          </ul>
        </div>

        {{-- return to project list  --}}
        <div class="col-2">
          <a href="{{ route('Admin.projects.index') }}" class="btn btn-outline-success ms-auto" type="submit">Torna alla lista</a>
        </div>

      </div>
    </div>
@endsection