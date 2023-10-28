@extends('layouts.admin')

@section("content")

<h1>{{$project->title}}</h1>
<p class="w-75">{{$project->content}}</p>

<h5>Tipo: {{$project->type?$project->type->name:"Nessuna tipologia assegnata"}}</h5>

<h5>
    Tecnologie: 
    @if ($project->technologies->isNotEmpty()) 
        @foreach ($project->technologies as $technology)
        <span class="badge rounded-pill text-bg-secondary p-1">{{$technology->name}}</span>
        @endforeach
    @else 
        <span>Nessuna tech</span> 
    @endif
</h5>

<a href="{{route("admin.projects.index")}}" type="button" class="btn btn-primary">Torna ai Projects</a>

@endsection