@extends('layouts.admin')

@section('content')
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data inizio progetto</th>
                <th scope="col">Data fine progetto</th>
                <th scope="col">Descrizione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}">Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
