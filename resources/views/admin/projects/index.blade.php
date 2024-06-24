@extends('layouts.admin')

@section('content')
    <h1>My Projects:</h1>

    @include('partials.message-success')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Last commit</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row"><a
                            href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">{{ $project->title }}</a>
                    </th>
                    <td>{{ $project->content }}</td>
                    <td>{{ $project->last_commit }}</td>
                    <td class="d-flex gap-1">

                        {{-- SHOW CRUD --}}
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>

                        {{-- DELETE CRUD --}}
                        <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" method="POST"><i
                                    class="fa-solid fa-trash"></i></button>
                        </form>

                        {{-- EDIT CRUD --}}
                        <a class="btn btn-success" href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('admin.projects.create', ['project' => $project->slug]) }}"><i
            class="fa-solid fa-plus"></i></a>
@endsection
