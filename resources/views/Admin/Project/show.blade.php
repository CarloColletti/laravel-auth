@extends('layouts.app')

@section('title')
    Detail project
@endsection

@section('content')
    <div class="container py-5">
      <div class="row">
        <div class="col-4">
          <img src="{{$project->image}}" alt="{{$project->title}}" class="img-fluid">
        </div>
        <div class="col-8 px-5">
          <ul>
            <li>{{$project->title}}</li>
            <li>{{$project->description}}</li>
            <li>{{$project->date}}</li>
          </ul>
        </div>
      </div>
    </div>
@endsection