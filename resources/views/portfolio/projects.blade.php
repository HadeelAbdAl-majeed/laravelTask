@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<h2>My Latest Work</h2>

<div style="display: flex; gap: 20px;">
    @foreach($projects as $project)
    <div style="border: 1px solid #ccc; padding: 15px;">
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['description'] }}</p>
        <p>{{ $project->developer->name }}</p>
        <small>Status: {{ $project['status'] }}</small>
        <form method="POST" action="{{route('project.destroy' ,  $project['id'])}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-solid theme-danger">Delete</button>
        </form>
    </div>
    @endforeach
    
</div>

  <div class="mt-5 pt-5" >
        <div class='text-center'>
            <a href="{{route('porject.create')}}" class="btn-solid theme-success">Create Post</a>
        </div>
    </div>
@endsection