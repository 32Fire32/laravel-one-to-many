@extends('layouts.admin.admin')

@section('content')
    <div class="container text-center">
        <h1>{{ $type->name }}</h1>
        @if ($type->projects)
            <h3>Tipologie associate:</h3>
            <ul>
                @foreach ($type->projects as $project)
                    <li><a href="{{ route('admin.projects.show', $type) }}">{{ $project->name_project }}</a></li>
                @endforeach
            </ul>
        @else
            <h3>Nessuna tipologia associata</h3>
        @endif
        <a href="{{ route('admin.types.index') }}"class="btn btn-primary">Torna alla lista dei progetti</a>
    @endsection
