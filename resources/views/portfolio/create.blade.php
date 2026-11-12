@extends('layouts.app')

@section('title', 'create')

@section('content')

<div class="container-fluid w-75 mx-auto my-5 p-4">
    <form method="POST" action="{{route('projects.store')}}">
        @csrf
        <!-- حقل العنوان Title -->
        <div class="mb-4">
            <label for="postTitle" class="form-label text-dark small fw-medium mb-1">Title</label>
            <input type="text" class="form-control border-secondary-subtle" id="postTitle" name="title">
        </div>

        <!-- حقل الوصف Description -->
        <div class="mb-4">
            <label for="postDescription" class="form-label text-dark small fw-medium mb-1">Description</label>
            <!-- استخدام rows="4" لتحديد ارتفاع الحقل بدلاً من الـ CSS -->
            <textarea class="form-control border-secondary-subtle" id="postDescription" rows="4" name="description"></textarea>
        </div>

        <!-- حقل منشئ المنشور Post Creator -->
        <div class="mb-4">
            <label for="postCreator" class="form-label text-dark small fw-medium mb-1">status</label>
            <input type="text" class="form-control border-secondary-subtle" id="postCreator" name="status">
        </div>

        <!-- حقل منشئ المنشور -->
        <div class="mb-4">
            <label for="postCreator" class="form-label text-dark small fw-medium mb-1">
                Created by
            </label>

            <select
                class="form-control border-secondary-subtle"
                id="postCreator"
                name="developer_id"
                required>
                <option value="">Select Developer</option>

                @foreach($developers as $developer)
                <option value="{{ $developer->id }}">
                    {{ $developer->name }}
                </option>
                @endforeach

            </select>
        </div>
        <!-- زر الإرسال Submit باللون الأخضر الغامق والحجم المناسب -->
        <button type="submit" class="btn-solid theme-success px-4 py-2 fw-medium border-0" style="background-color: #00703c;">Submit</button>
    </form>


    @endsection