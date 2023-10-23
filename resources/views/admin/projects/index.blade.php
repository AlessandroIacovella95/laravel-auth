@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Slug</th>
            <th scope="col">Link</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
            <tr>
              <th scope="row">{{$project->id}}</th>
              <td>{{$project->title}}</td>
              <td>{{$project->description}}</td>
              <td>{{$project->slug}}</td>
              <td>{{$project->url}}</td>
              <td>
                <a href="{{route('admin.projects.show', $project)}}">Show</a>
              </td>
            </tr>    
            @empty
            <tr>
                <td colspan="6">Non ci sono progetti</td>
            </tr>
                
            @endforelse
        </tbody>
      </table>
</div>
    
@endsection