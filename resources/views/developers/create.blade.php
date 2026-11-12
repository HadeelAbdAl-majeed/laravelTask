@extends('layouts.app')

@section('title', 'Create')

@section('content')
<div class="container-fluid w-75 mx-auto my-5 p-4">
    <form method="POST" action="{{ route('developers.store')}}">
        @csrf
        <!-- حقل العنوان Title -->
        <div class="mb-4">
            <label for="postTitle" class="form-label text-dark small fw-medium mb-1">Name</label>
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="name">
        </div>

        <!-- حقل الوصف Job Title -->
        <div class="mb-4">
            <label for="postTitle" class="form-label text-dark small fw-medium mb-1">Job Title</label>
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="job_title">
        </div>

        <!-- حقل منشئ المنشور Skills -->
        <div class="mb-4">
            <label for="postTitle" class="form-label text-dark small fw-medium mb-1">Skills</label>
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="skills[]">
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="skills[]">
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="skills[]">
        </div>
       
        <!-- زر الإرسال Submit باللون الأخضر الغامق والحجم المناسب -->
        <button type="submit" class="btn-solid theme-success px-4 py-2 fw-medium border-0" style="background-color: #00703c;">Submit</button>
    </form>


@endsection