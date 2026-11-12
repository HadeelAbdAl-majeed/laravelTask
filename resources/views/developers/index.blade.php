@extends('layouts.app')

@section('title', 'Developers')

@section('content')

<div class="border rounded overflow-hidden m-5">
    <table class="table table-striped mb-0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Job Title</th>
                <th scope="col">skills</th>
            </tr>
        </thead>
        <tbody>
            @foreach($developers as $developer)
            <tr>
                <th scope="row">{{$developer->id}}</th>
                <td>{{$developer->name}}</td>
                <td>{{$developer->job_title}}</td>
                <td>{{$developer->skills}}</td>
                <td>
                    <a href="{{route('developers.edit' , $developer->id)}}" class="btn-solid theme-primary">Edit</a>
                    <form style="display:inline;" method="POST" action="{{route('developers.destroy' ,  $developer->id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-solid theme-danger">Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-5 pt-5">
    <div class='text-center'>
        <a href="{{route('developers.create')}}" class="btn-solid theme-success">Create Post</a>
    </div>
</div>

@endsection