@extends('layouts.app')

@section('content')
<div class="container mt-5">
   <a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary">Torna alla lista</a>
   <h1 class="my-3">{{ $project->title}}</h1>
   <div class="row g-5">
    <div class="col-12">
        <p>
            <strong>Descrizione:</strong>{{$project->description}}<br>
        </p>
    </div>
    <div class="col-4">
        <p>
            <strong>Slug:</strong>{{$project->slug}}<br>
        </p>
    </div>
    <div class="col-4">
        <p>
            <strong>Link:</strong>{{$project->url}}<br>
        </p>
    </div>
   </div>
</div>
@endsection