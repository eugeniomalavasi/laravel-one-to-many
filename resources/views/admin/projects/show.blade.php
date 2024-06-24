@extends('layouts.admin')

@section('content')
    <h1>Detail page</h1>
    @include('partials.message-success')
    <div class="mt-4">
        <p><span class="fw-bold">Title:</span> {{ $project->title }}</p>
        <p><span class="fw-bold">Content:</span> {{ $project->content }}</p>
        <p><span class="fw-bold">Last commit:</span> {{ $project->last_commit }}</p>
        <img class="w-25" src="{{asset('storage/' . $project->cover_img) }}" alt="{{ $project->title }}">
        <div class="mt-3"><a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Back</a></div>
    </div>
@endsection
