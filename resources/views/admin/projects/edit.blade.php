@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.update', ['project'=> $project->slug]) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$project->title) }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content',$project->content) }}</textarea>
        </div>

        <img class="w-25" src="{{ asset('storage/' . $project->cover_img) }}" alt="">
        <div class="mt-4 mb-4"><button class="btn btn-success" type="submit">Salva</button></div>
    </form>
@endsection

